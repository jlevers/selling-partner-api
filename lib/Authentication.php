<?php

namespace SellingPartnerApi;

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

    private $client = null;
    private $awsCredentials = null;
    private $grantlessAwsCredentials = null;
    private $grantlessCredentialsScope = null;
    private $requestTime;

//    public function __construct(?array $options = []) {
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

    public function startRequestGeneration(): void
    {
        // We need to use the same exact DateTime throughout the signing process *and* in the
        // x-amz-date header (see HeaderSelector.php), because Amazon will reject any request
        // where all times do not match down to the second
        $this->setRequestTime();
    }

    public function endRequestGeneration(): void
    {
        $this->requestTime = null;
    }

    public function getAuthToken(?string $scope = null)
    {
        if ($scope !== null) {
            // If the scope for this grantless request doesn't match $this->grantlessCredentialsScope, we
            // need a new set of grantless credentials that provide access to the new scope
            if ($this->grantlessAwsCredentials === null || $this->grantlessCredentialsScope !== $scope) {
                $this->newToken($scope);
            }
            return $this->grantlessAwsCredentials->getSecurityToken();
        }

        if ($this->awsCredentials === null || $this->awsCredentials->getSecurityToken() === null) {
            $this->newToken();
        }
        return $this->awsCredentials->getSecurityToken();
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
        // Check if the relevant AWS creds haven't been fetched or are expiring soon
        $relevantCreds = $scope === null ? $this->awsCredentials : $this->grantlessAwsCredentials;
        if ($relevantCreds === null || $relevantCreds->getSecurityToken() === null || $relevantCreds->expiresSoon()) {
            $this->newToken($scope);
            // Reassign $relevantCreds to the correct set of credentials, since that set of creds has been updated
            $relevantCreds = $scope === null ? $this->awsCredentials : $this->grantlessAwsCredentials;
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

        return $request->withHeader("Authorization", $authHeaderVal);
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
