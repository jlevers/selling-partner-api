<?php

namespace Evers\SellingPartnerApi;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7;

class Authentication
{
    public const DATETIME_FMT = "Ymd\THis\Z";
    private const DATE_FMT = "Ymd";
    private const SIGNING_ALGO = "AWS4-HMAC-SHA256";
    private const SERVICE_NAME = "execute-api";
    private const TERMINATION_STR = "aws4_request";

    private $refreshToken;
    private $onUpdateCreds;

    private $client = null;
    private $awsCredentials = null;
    private $grantlessAwsCredentials = null;

    public function __construct(
        ?string $refreshToken = null,
        ?string $accessToken = null,
        ?int $accessTokenExpiration = null,
        ?callable $onUpdateCreds = null
    ) {
        $this->client = new Client();
        loadDotenv();

        $this->refreshToken = $refreshToken ?? $_ENV["LWA_REFRESH_TOKEN"];
        $this->onUpdateCreds = $onUpdateCreds;

        if (
            $accessToken === null && $accessTokenExpiration !== null
            || $accessToken !== null && $accessTokenExpiration === null
        ) {
            throw new \Exception('If one of `$accessToken` or `$accessTokenExpiration` is provided, the other must be provided as well');
        }

        if ($accessToken !== null && $accessTokenExpiration !== null) {
            $this->populateCredentials($accessToken, $accessTokenExpiration);
            if ($this->awsCredentials->expiresSoon()) {
                $this->newToken();
            }
        } else {
            $this->newToken();
        }
    }

    public function getAuthToken(?string $scope = null) {
        if ($scope !== null) {
            if ($this->grantlessAwsCredentials === null) {
                $this->newToken($scope);
            }
            return $this->grantlessAwsCredentials->getSecurityToken();
        }
        return $this->awsCredentials->getSecurityToken();
    }

    public function requestLWAToken(?string $scope = null) : array {
        $jsonData = [
            "grant_type" => $scope === null ? "refresh_token" : "client_credentials",
            "client_id" => $_ENV["LWA_CLIENT_ID"],
            "client_secret" => $_ENV["LWA_CLIENT_SECRET"],
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
        $expirationDate = $this->datetimeForApi();
        $expirationDate->add(new \DateInterval("PT" . strval($body["expires_in"]) . "S"));
        return [$accessToken, $expirationDate->getTimestamp()];
    }

    public function populateCredentials(?string $token = null, ?int $expires = null, bool $grantless = false) : void {
        $key = $_ENV["AWS_ACCESS_KEY"];
        $secret = $_ENV["AWS_SECRET_KEY"];
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

    public function signRequest(Psr7\Request $request, ?string $scope = null) : Psr7\Request {
        // Check if the relevant AWS creds haven't been fetched or are expiring soon
        $relevantCreds = $scope === null ? $this->awsCredentials : $this->grantlessAwsCredentials;
        if ($relevantCreds === null || $relevantCreds->expiresSoon()) {
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
        $authHeaderVal = static::SIGNING_ALGO . " " . implode([$credsForHeader, $headersForHeader, $sigForHeader], ", ");

        return $request->withHeader("Authorization", $authHeaderVal);
    }

    private function createCanonicalRequest(Psr7\Request $request) : string {
        $method = $request->getMethod();
        $uri = $request->getUri();
        $path = $this->createCanonicalizedPath($uri->getPath());
        $query = $this->createCanonicalizedQuery($uri->getQuery());
        [$headers, $headerNames] = $this->createCanonicalizedHeaders($request->getHeaders());
        $hashedPayload = hash("sha256", $request->getBody());

        $canonicalRequest = "{$method}\n{$path}\n{$query}\n{$headers}\n{$headerNames}\n{$hashedPayload}";
        return $canonicalRequest;
    }

    private function createCanonicalizedPath(string $path) : string {
        // Remove leading slash
        $trimmed = ltrim($path, "/");
        // URL encode an already URL-encoded path
        $doubleEncoded = rawurlencode($trimmed);
        // Add a leading slash, and convert all encoded slashes back to normal slashes
        return "/" . str_replace("%2F", "/", $doubleEncoded);
    }

    private function createCanonicalizedQuery(string $query) : string {
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

        // Generate encoded list of query params
        $sortedEncoded = [];
        foreach ($paramsMap as $key => $value) {
            if (is_array($value)) {
                foreach ($value as $paramVal) {
                    $sortedEncoded[] = rawurlencode("{$key}") . "=" . rawurlencode("{$paramVal}");
                }
            } else {
                $sortedEncoded[] = rawurlencode("{$key}") . "=" . rawurlencode("{$value}");
            }
        }

        $canonicalized = implode($sortedEncoded, "&");
        return $canonicalized;
    }

    private function createCanonicalizedHeaders(array $headers) : array {
        // Convert all header names to lowercase
        foreach ($headers as $key => $values) {
            $headers[strtolower($key)] = $values;
            unset($headers[$key]);
        }

        // Sort headers by name, ascending
        ksort($headers, SORT_STRING);

        $canonicalizedHeaders = "";
        $canonicalizedHeaderNames="";
        foreach ($headers as $key => $values) {
            $parsedValues = array_map(function($val) {
                $trimmed = trim($val);
                $reduced = preg_replace("/(\s+)/", " ", $trimmed);
                return $reduced;
            }, $values);

            $valuesStr = implode($parsedValues, ",");
            $canonicalizedHeaders .= "{$key}:{$valuesStr}\n";
            $canonicalizedHeaderNames .= "{$key};";
        }

        return [
            $canonicalizedHeaders,
            substr($canonicalizedHeaderNames, 0, -1)  // Remove trailing ";"
        ];
    }

    private function createSigningString(string $canonicalRequest) : string {
        $dt = $this->datetimeForApi();
        $datetime = $dt->format(static::DATETIME_FMT);
        $credentialScope = $this->createCredentialScope($dt);
        $canonHashed = hash("sha256", $canonicalRequest);
        return static::SIGNING_ALGO . "\n{$datetime}\n{$credentialScope}\n{$canonHashed}";
    }

    private function createCredentialScope() : string {
        $dt = $this->datetimeForApi();
        $date = $dt->format(static::DATE_FMT);
        $region = $_ENV["AWS_REGION"];
        $terminator = static::TERMINATION_STR;
        return "{$date}/{$region}/" . static::SERVICE_NAME . "/{$terminator}";
    }

    private function createSignature(string $signingString, string $secretKey) : string {
        $dt = $this->datetimeForApi();
        $kDate = hash_hmac("sha256", $dt->format(static::DATE_FMT), "AWS4{$secretKey}", true);
        $kRegion = hash_hmac("sha256", $_ENV["AWS_REGION"], $kDate, true);
        $kService = hash_hmac("sha256", self::SERVICE_NAME, $kRegion, true);
        $kSigning = hash_hmac("sha256", static::TERMINATION_STR, $kService, true);

        $signature = hash_hmac("sha256", $signingString, $kSigning);
        return $signature;
    }

    private function newToken(?string $scope = null) : void {
        [$accessToken, $expirationTimestamp] = $this->requestLWAToken($scope);
        $this->populateCredentials($accessToken, $expirationTimestamp, $scope !== null);
        if ($scope === null && $this->onUpdateCreds !== null) {
            call_user_func($this->onUpdateCreds, $this->awsCredentials);
        }
    }

    public function datetimeForApi() : \DateTime {
        return new \DateTime("now", new \DateTimeZone("UTC"));
    }
}

// $auth = new Authentication();
// $auth->request("/sellers/v1/marketplaceParticipations");
