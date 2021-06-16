<?php

namespace SellingPartnerApi;

use Aws\Sts\StsClient;
use Closure;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use RuntimeException;

class Authentication
{
    public const DATETIME_FMT = "Ymd\THis\Z";
    private const DATE_FMT = "Ymd";
    private const SIGNING_ALGO = "AWS4-HMAC-SHA256";
    private const SERVICE_NAME = "execute-api";
    private const TERMINATION_STR = "aws4_request";

    private $refreshToken;
    /** @var Closure|null $onUpdateCreds */
    private $onUpdateCreds;
    private $lwaClientId;
    private $lwaClientSecret;
    private $region;
    private $roleArn = null;

    private $requestTime;

    private $client = null;
    private $awsCredentials = null;
    private $grantlessAwsCredentials = null;
    private $grantlessCredentialsScope = null;
    private $roleCredentials = null;

    /**
     * @var mixed|string
     */
    private $awsKey;
    /**
     * @var string
     */
    private $awsSecret;

    /**
     * Authentication constructor.
     * @param ConfigurationOptions|null $configurationOptions
     * @throws RuntimeException
     */
    public function __construct(?ConfigurationOptions $configurationOptions = null)
    {
        $this->client = new Client();

        $accessToken = null;
        $accessTokenExpiration = null;

        if ($configurationOptions !== null) {
            $this->refreshToken = $configurationOptions->getLwaRefreshToken();
            $this->onUpdateCreds = $configurationOptions->getOnUpdateCredentials();
            $this->lwaClientId = $configurationOptions->getLwaClientId();
            $this->lwaClientSecret = $configurationOptions->getLwaClientSecret();
            $this->region = $configurationOptions->getSpapiAwsRegion();

            $accessToken = $configurationOptions->getAccessToken();
            $accessTokenExpiration = $configurationOptions->getAccessTokenExpiration();

            $this->awsKey = $configurationOptions->getAwsAccessKey();
            $this->awsSecret = $configurationOptions->getAwsAccessSecret();

            $this->roleArn = $configurationOptions->getRoleArn();
        } else {
            loadDotenv();

            $this->refreshToken = $_ENV["LWA_REFRESH_TOKEN"];
            $this->onUpdateCreds = null;
            $this->lwaClientId = $_ENV["LWA_CLIENT_ID"];
            $this->lwaClientSecret = $_ENV["LWA_CLIENT_SECRET"];
            $this->region = $_ENV["SPAPI_AWS_REGION"];
            $this->awsKey = $_ENV["AWS_ACCESS_KEY_ID"];
            $this->awsSecret = $_ENV["AWS_SECRET_ACCESS_KEY"];
        }

        if (($accessToken === null && $accessTokenExpiration !== null)
            || ($accessToken !== null && $accessTokenExpiration === null)) {
            throw new RuntimeException('If one of `$accessToken` or `$accessTokenExpiration` is provided, the other must be provided as well');
        }

        if ($accessToken !== null && $accessTokenExpiration !== null) {
            $this->populateCredentials($this->awsKey, $this->awsSecret, $accessToken, $accessTokenExpiration);
        }
    }

    /**
     * @param string|null $scope
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function requestLWAToken(?string $scope = null): array
    {
        $jsonData = [
            "grant_type" => $scope === null ? "refresh_token" : "client_credentials",
            "client_id" => $this->lwaClientId,
            "client_secret" => $this->lwaClientSecret,
        ];

        // Only pass one of `scope` and `refresh_token`
        // https://github.com/amzn/selling-partner-api-docs/blob/main/guides/developer-guide/SellingPartnerApiDeveloperGuide.md#step-1-request-a-login-with-amazon-access-token
        if ($scope !== null) {
            $jsonData["scope"] = $scope;
        } else {
            $jsonData["refresh_token"] = $this->refreshToken;
        }

        $res = $this->client->post("https://api.amazon.com/auth/o2/token", [
            \GuzzleHttp\RequestOptions::JSON => $jsonData,
        ]);

        $body = json_decode($res->getBody(), true);
        $accessToken = $body["access_token"];
        $expirationDate = new \DateTime("now", new \DateTimeZone("UTC"));
        $expirationDate->add(new \DateInterval("PT" . strval($body["expires_in"]) . "S"));
        return [$accessToken, $expirationDate->getTimestamp()];
    }

    public function populateCredentials($key, $secret, ?string $token = null, ?int $expires = null, bool $grantless = false): void
    {
        $creds = null;
        if ($token !== null && $expires !== null) {
            $creds = new Credentials($key, $secret, $token, $expires);
        } else {
            $creds = new Credentials($key, $secret);
        }

        if ($grantless) {
            $this->grantlessAwsCredentials = $creds;
        } else {
            $this->awsCredentials = $creds;
        }
    }

    public function signRequest(Psr7\Request $request, ?string $scope = null): Psr7\Request
    {
        $this->setRequestTime();
        // Check if the relevant AWS creds haven't been fetched or are expiring soon
        $credsForAccessToken = $scope === null ? $this->awsCredentials : $this->grantlessAwsCredentials;
        if ($credsForAccessToken === null || $credsForAccessToken->getSecurityToken() === null || $credsForAccessToken->expiresSoon()) {
            $this->newToken($scope);
            // Reassign $relevantCreds to the correct set of credentials, since that set of creds has been updated
            $credsForAccessToken = $scope === null ? $this->awsCredentials : $this->grantlessAwsCredentials;
        }
        $accessToken = $credsForAccessToken->getSecurityToken();

        $relevantCreds = $scope === null ? $this->awsCredentials : $this->grantlessAwsCredentials;
        if ($this->roleArn !== null) {
            if ($this->roleCredentials === null || $this->roleCredentials->expiresSoon()) {
                $client = new StsClient([
                    'sts_regional_endpoints' => 'regional',
                    'region' => $this->region,
                    'version' => '2011-06-15',
                    'credentials' => [
                        'key' => $this->awsKey,
                        'secret' => $this->awsSecret,
                    ],
                ]);
                $assumeTime = time();
                $assumed = $client->AssumeRole([
                    'RoleArn' => $this->roleArn,
                    'RoleSessionName' => "spapi-assumerole-{$assumeTime}",
                ]);
                $credentials = $assumed['Credentials'];
                $this->roleCredentials = new Credentials(
                    $credentials['AccessKeyId'],
                    $credentials['SecretAccessKey'],
                    $credentials['SessionToken'],
                    $credentials['Expiration']->getTimestamp(),
                );
            }
            $relevantCreds = $this->roleCredentials;
        }

        $request->withHeader("content-type", "application/json");
        $canonicalRequest = $this->createCanonicalRequest($request);
        $signingString = $this->createSigningString($canonicalRequest);
        $signature = $this->createSignature($signingString, $relevantCreds->getSecretKey());

        [, $signedHeaders] = $this->createCanonicalizedHeaders($request->getHeaders());
        $credentialScope = $this->createCredentialScope();
        $credsForHeader = "Credential={$relevantCreds->getAccessKeyId()}/{$credentialScope}";
        $headersForHeader = "SignedHeaders={$signedHeaders}";
        $sigForHeader = "Signature={$signature}";
        $authHeaderVal = static::SIGNING_ALGO . " " . implode(", ", [$credsForHeader, $headersForHeader, $sigForHeader]);

        $signedRequest = $request->withHeader("Authorization", $authHeaderVal);

        if ($this->roleArn) {
            $signedRequest = $signedRequest->withHeader("x-amz-security-token", $relevantCreds->getSecurityToken());
        }

        $signedRequest = $signedRequest
                       ->withHeader("x-amz-access-token", $accessToken)
                       ->withHeader("x-amz-date", $this->formattedRequestTime());

        return $signedRequest;
    }

    private function createCanonicalRequest(Psr7\Request $request): string
    {
        $method = $request->getMethod();
        $uri = $request->getUri();
        $path = $this->createCanonicalizedPath($uri->getPath());
        $query = $this->createCanonicalizedQuery($uri->getQuery());
        [$headers, $headerNames] = $this->createCanonicalizedHeaders($request->getHeaders());
        $hashedPayload = hash("sha256", $request->getBody());

        $canonicalRequest = "{$method}\n{$path}\n{$query}\n{$headers}\n{$headerNames}\n{$hashedPayload}";
        return $canonicalRequest;
    }

    private function createCanonicalizedPath(string $path): string
    {
        // Remove leading slash
        $trimmed = ltrim($path, "/");
        // URL encode an already URL-encoded path
        $doubleEncoded = rawurlencode($trimmed);
        // Add a leading slash, and convert all encoded slashes back to normal slashes
        return "/" . str_replace("%2F", "/", $doubleEncoded);
    }

    private function createCanonicalizedQuery(string $query): string
    {
        if (strlen($query) === 0) return "";

        // Parse query string
        $params = explode("&", $query);
        $paramsMap = [];
        foreach ($params as $param) {
            [$key, $value] = explode("=", $param);

            if ($value === null) {
                $paramsMap[$key] = "";
            } else if (array_key_exists($key, $paramsMap)) {
                // If there are multiple values for a parameter, make its value an array
                if (is_array($paramsMap[$key])) {
                    $paramsMap[$key] = [$paramsMap[$key]];
                }
                $paramsMap[$key][] = $value;
            } else {
                $paramsMap[$key] = $value;
            }
        }

        // Sort param map by key name, ascending
        ksort($paramsMap, SORT_STRING);
        // Sort params with multiple values by value, ascending
        foreach ($paramsMap as $param) {
            if (is_array($param)) {
                sort($param, SORT_STRING);
            }
        }

        // Generate list of query params
        $sorted = [];
        foreach ($paramsMap as $key => $value) {
            if (is_array($value)) {
                foreach ($value as $paramVal) {
                    $sorted[] = "{$key}={$paramVal}";
                }
            } else {
                $sorted[] = "{$key}={$value}";
            }
        }

        $canonicalized = implode("&", $sorted);
        return $canonicalized;
    }

    private function createCanonicalizedHeaders(array $headers): array
    {
        // Convert all header names to lowercase
        foreach ($headers as $key => $values) {
            $headers[strtolower($key)] = $values;
            unset($headers[$key]);
        }

        // Sort headers by name, ascending
        ksort($headers, SORT_STRING);

        $canonicalizedHeaders = "";
        $canonicalizedHeaderNames = "";
        foreach ($headers as $key => $values) {
            $parsedValues = array_map(function ($val) {
                $trimmed = trim($val);
                $reduced = preg_replace("/(\s+)/", " ", $trimmed);
                return $reduced;
            }, $values);

            $valuesStr = implode(",", $parsedValues);
            $canonicalizedHeaders .= "{$key}:{$valuesStr}\n";
            $canonicalizedHeaderNames .= "{$key};";
        }

        return [
            $canonicalizedHeaders,
            substr($canonicalizedHeaderNames, 0, -1)  // Remove trailing ";"
        ];
    }

    private function createSigningString(string $canonicalRequest): string
    {
        $credentialScope = $this->createCredentialScope();
        $canonHashed = hash("sha256", $canonicalRequest);
        return static::SIGNING_ALGO . "\n{$this->formattedRequestTime()}\n{$credentialScope}\n{$canonHashed}";
    }

    private function createCredentialScope(): string
    {
        $terminator = static::TERMINATION_STR;
        return "{$this->formattedRequestTime(false)}/{$this->region}/" . static::SERVICE_NAME . "/{$terminator}";
    }

    private function createSignature(string $signingString, string $secretKey): string
    {
        $kDate = hash_hmac("sha256", $this->formattedRequestTime(false), "AWS4{$secretKey}", true);
        $kRegion = hash_hmac("sha256", $this->region, $kDate, true);
        $kService = hash_hmac("sha256", self::SERVICE_NAME, $kRegion, true);
        $kSigning = hash_hmac("sha256", static::TERMINATION_STR, $kService, true);

        return hash_hmac("sha256", $signingString, $kSigning);
    }

    private function newToken(?string $scope = null): void
    {
        [$accessToken, $expirationTimestamp] = $this->requestLWAToken($scope);
        $this->populateCredentials($this->awsKey, $this->awsSecret, $accessToken, $expirationTimestamp, $scope !== null);
        if ($scope === null && $this->onUpdateCreds !== null) {
            call_user_func($this->onUpdateCreds, $this->awsCredentials);
        }
    }

    private function setRequestTime(): void
    {
        $this->requestTime = new \DateTime("now", new \DateTimeZone("UTC"));
    }

    /**
     * @param bool|null $withTime
     * @return string|null
     */
    public function formattedRequestTime(?bool $withTime = true): ?string
    {
        $fmt = $withTime ? static::DATETIME_FMT : static::DATE_FMT;
        return $this->requestTime->format($fmt);
    }
}
