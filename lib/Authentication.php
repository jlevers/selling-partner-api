<?php

namespace SellingPartnerApi;

use Aws\Sts\StsClient;
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

    private $lwaClientId;
    private $lwaClientSecret;
    private $lwaRefreshToken = null;
    private $endpoint;

    private $onUpdateCreds;
    private $roleArn;

    private $requestTime;
    private $signingScope = null;

    private $client = null;
    private $awsCredentials = null;
    private $grantlessAwsCredentials = null;
    private $grantlessCredentialsScope = null;
    private $roleCredentials = null;
    private $restrictedDataTokens = [];

    /**
     * @var string
     */
    private $awsAccessKeyId;
    /**
     * @var string
     */
    private $awsSecretAccessKey;

    /**
     * Authentication constructor.
     * @param array $configurationOptions
     * @throws RuntimeException
     */
    public function __construct(array $configurationOptions)
    {
        $this->client = new Client();

        $this->lwaRefreshToken = $configurationOptions['lwaRefreshToken'] ?? null;
        $this->onUpdateCreds = $configurationOptions['onUpdateCredentials'];
        $this->lwaClientId = $configurationOptions['lwaClientId'];
        $this->lwaClientSecret = $configurationOptions['lwaClientSecret'];
        $this->endpoint = $configurationOptions['endpoint'];

        $accessToken = $configurationOptions['accessToken'];
        $accessTokenExpiration = $configurationOptions['accessTokenExpiration'];

        $this->awsAccessKeyId = $configurationOptions['awsAccessKeyId'];
        $this->awsSecretAccessKey = $configurationOptions['awsSecretAccessKey'];

        $this->roleArn = $configurationOptions['roleArn'];

        if ($accessToken !== null && $accessTokenExpiration !== null) {
            $this->populateCredentials($this->awsAccessKeyId, $this->awsSecretAccessKey, $accessToken, $accessTokenExpiration);
        }
    }

    /**
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException|\RuntimeException
     */
    public function requestLWAToken(): array
    {
        $jsonData = [
            "grant_type" => $this->signingScope ? "client_credentials" : "refresh_token",
            "client_id" => $this->lwaClientId,
            "client_secret" => $this->lwaClientSecret,
        ];

        // Only pass one of `scope` and `refresh_token`
        // https://github.com/amzn/selling-partner-api-docs/blob/main/guides/developer-guide/SellingPartnerApiDeveloperGuide.md#step-1-request-a-login-with-amazon-access-token
        if ($this->signingScope) {
            $jsonData["scope"] = $this->signingScope;
        } else {
            if ($this->lwaRefreshToken === null) {
                throw new RuntimeException('lwaRefreshToken must be specified when calling non-grantless API operations');
            }
            $jsonData["refresh_token"] = $this->lwaRefreshToken;
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

    public function populateCredentials($key, $secret, ?string $token = null, ?int $expires = null): void
    {
        $creds = null;
        if ($token !== null && $expires !== null) {
            $creds = new Credentials($key, $secret, $token, $expires);
        } else {
            $creds = new Credentials($key, $secret);
        }

        if ($this->signingScope) {
            $this->grantlessAwsCredentials = $creds;
        } else {
            $this->awsCredentials = $creds;
        }
    }

    /**
     * Signs the given request using Amazon Signature V4.
     *
     * @param \Guzzle\Psr7\Request $request The request to sign
     * @param ?string $scope If the request is to a grantless operation endpoint, the scope for the grantless token
     * @param ?string $restrictedPath The absolute (generic) path for the endpoint that the request is using if it's an endpoint that requires
     *      a restricted data token
     * @return \Guzzle\Psr7\Request The signed request
     */
    public function signRequest(Psr7\Request $request, ?string $scope = null, ?string $restrictedPath = null, ?string $operation = null): Psr7\Request
    {
        // This allows us to know if we're signing a grantless operation without passing $scope all over the place
        $this->signingScope = $scope;

        // Check if the relevant AWS creds haven't been fetched or are expiring soon
        $relevantCreds = null;
        $params = [];

        parse_str($request->getUri()->getQuery(), $params);
        $dataElements = [];
        if (isset($params['dataElements'])) {
            $dataElements = explode(',', $params['dataElements']);
        }

        if (!$this->signingScope && ($restrictedPath === null || $dataElements === [])) {
            $relevantCreds = $this->getAwsCredentials();
        } else if ($this->signingScope) {  // There is no overlap between grantless and restricted operations
            $relevantCreds = $this->getGrantlessAwsCredentials($scope);
        } else if ($restrictedPath !== null) {
            $needRdt = true;

            // Not all getReportDocument calls need an RDT
            if ($operation === 'getReportDocument') {
                // We added a reportType query parameter that isn't in the official models, so that we can
                // determine if the getReportDocument call requires an RDT
                $constantPath = isset($params['reportType']) ? 'SellingPartnerApi\ReportType::' . $params['reportType'] : null;

                if ($constantPath === null || !defined($constantPath) || !constant($constantPath)['restricted']) {
                    $needRdt = false;
                    $relevantCreds = $this->getAwsCredentials();
                }

                // Remove the extra 'reportType' query parameter
                $newUri = Psr7\Uri::withoutQueryValue($request->getUri(), 'reportType');
                $request = $request->withUri($newUri);
            } else if (isset($params['dataElements'])) {
                // Remove the extra 'dataElements' query parameter
                $newUri = Psr7\Uri::withoutQueryValue($request->getUri(), 'dataElements');
                $request = $request->withUri($newUri);
            }

            if ($needRdt) {
                $relevantCreds = $this->getRestrictedDataToken($restrictedPath, $request->getMethod(), true, $dataElements);
            }
        }

        $accessToken = $relevantCreds->getSecurityToken();

        if ($this->roleArn !== null) {
            $relevantCreds = $this->getRoleCredentials();
        }

        $this->setRequestTime();
        
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


        $this->signingScope = null;

        return $signedRequest;
    }

    /**
     * Get credentials for standard API operations.
     *
     * @return \SellingPartnerApi\Credentials A set of access credentials for making calls to the SP API
     */
    public function getAwsCredentials(): Credentials
    {
        if ($this->needNewCredentials($this->awsCredentials)) {
            $this->newToken();
        }
        return $this->awsCredentials;
    }

    /**
     * Get credentials for grantless operations with the given scope.
     *
     * @return \SellingPartnerApi\Credentials The grantless credentials
     */
    public function getGrantlessAwsCredentials(): Credentials
    {
        if ($this->needNewCredentials($this->grantlessAwsCredentials) || $this->signingScope !== $this->grantlessCredentialsScope) {
            $this->newToken();
            $this->grantlessCredentialsScope = $this->signingScope;
        }
        return $this->grantlessAwsCredentials;
    }

    /**
     * Get a security token using a role ARN.
     *
     * @return \SellingPartnerApi\Credentials A set of STS credentials
     */
    public function getRoleCredentials(): Credentials
    {
        $originalCreds = $this->signingScope ? $this->getGrantlessAwsCredentials() : $this->getAwsCredentials();
        if ($this->needNewCredentials($this->roleCredentials)) {
            $client = new StsClient([
                'sts_regional_endpoints' => 'regional',
                'region' => $this->endpoint['region'],
                'version' => '2011-06-15',
                'credentials' => [
                    'key' => $originalCreds->getAccessKeyId(),
                    'secret' => $originalCreds->getSecretKey(),
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

        return $this->roleCredentials;
    }

    /**
     * Get a restricted data token for the operation corresponding to $path and $method.
     *
     * @param string $path The generic or specific path for the restricted operation
     * @param string $method The HTTP method of the restricted operation
     * @param ?bool $generic Whether or not $path is a generic URL or a specific one. Default true
     * @param ?array $dataElements The restricted data elements to request access to, if any.
     *      Only applies to getOrder, getOrders, and getOrderItems. Default empty array.
     * @return \SellingPartnerApi\Credentials A Credentials object holding the RDT
     */
    public function getRestrictedDataToken(string $path, string $method, ?bool $generic = true, ?array $dataElements = []): Credentials
    {
        // Grab any pre-existing RDT for this operation
        $existingCreds = null;
        if (
            $generic &&  // Don't try to find a pre-existing token for a non-generic restricted path
            isset($this->restrictedDataTokens[$path]) &&
            strtoupper($this->restrictedDataTokens[$path]['method']) === strtoupper($method)
        ) {
            $existingCreds = $this->restrictedDataTokens[$path]['credentials'];
        }

        $rdtCreds = $existingCreds;
        // Create a new RDT if no matching one exists or if the matching one is expired
        if ($this->needNewCredentials($existingCreds)) {
            $standardCredentials = $this->getAwsCredentials();
            $config = new Configuration([
                "lwaClientId" => $this->lwaClientId,
                "lwaClientSecret" => $this->lwaClientSecret,
                "lwaRefreshToken" => $this->lwaRefreshToken,
                "awsAccessKeyId" => $this->awsAccessKeyId,
                "awsSecretAccessKey" => $this->awsSecretAccessKey,
                "accessToken" => $standardCredentials->getSecurityToken(),
                "accessTokenExpiration" => $standardCredentials->getExpiration(),
                "roleArn" => $this->roleArn,
                "endpoint" => $this->endpoint,
            ]);
            $tokensApi = new Api\TokensApi($config);

            $restrictedResource = new Model\Tokens\RestrictedResource([
                "method" => $method,
                "path" => $path,
            ]);
            if ($dataElements !== []) {
                $restrictedResource->setDataElements($dataElements);
            }

            $body = new Model\Tokens\CreateRestrictedDataTokenRequest([
                "restricted_resources" => [$restrictedResource],
            ]);
            $rdtData = $tokensApi->createRestrictedDataToken($body);

            $rdtCreds = new Credentials(
                $this->awsAccessKeyId,
                $this->awsSecretAccessKey,
                $rdtData->getRestrictedDataToken(),
                time() + intval($rdtData->getExpiresIn())
            );

            // Save new RDT, if it's generic
            if ($generic) {
                $this->restrictedDataTokens[$path] = [
                    "method" => $method,
                    "credentials" => $rdtCreds,
                ];
            }
        }

        return $rdtCreds;
    }

    /**
     * Get LWA client ID.
     * 
     * @return string
     */
    public function getLwaClientId(): ?string
    {
        return $this->lwaClientId;
    }

    /**
     * Set LWA client ID.
     * 
     * @param string $lwaClientId
     * @return void
     */
    public function setLwaClientId(string $lwaClientId): void
    {
        $this->lwaClientId = $lwaClientId;
    }

    /**
     * Get LWA client secret.
     * 
     * @return string
     */
    public function getLwaClientSecret(): ?string
    {
        return $this->lwaClientSecret;
    }

    /**
     * Set LWA client secret.
     * 
     * @param string $lwaClientSecret
     * @return void
     */
    public function setLwaClientSecret(string $lwaClientSecret): void
    {
        $this->lwaClientSecret = $lwaClientSecret;
    }

    /**
     * Get LWA refresh token.
     * 
     * @return string|null
     */
    public function getLwaRefreshToken(): ?string
    {
        return $this->lwaRefreshToken;
    }

    /**
     * Set LWA refresh token.
     * 
     * @param string|null $lwaRefreshToken
     * @return void
     */
    public function setLwaRefreshToken(?string $lwaRefreshToken = null): void
    {
        $this->lwaRefreshToken = $lwaRefreshToken;
    }

    /**
     * Get AWS access key ID.
     * 
     * @return string
     */
    public function getAwsAccessKeyId(): ?string
    {
        return $this->awsAccessKeyId;
    }

    /**
     * Set AWS access key ID.
     * 
     * @param string $awsAccessKeyId
     * @return void
     */
    public function setAwsAccessKeyId(string $awsAccessKeyId): void
    {
        $this->awsAccessKeyId = $awsAccessKeyId;
    }

    /**
     * Get AWS secret access key.
     * 
     * @return string|null
     */
    public function getAwsSecretAccessKey(): ?string
    {
        return $this->awsSecretAccessKey;
    }

    /**
     * Set AWS secret access key.
     * 
     * @param string $awsSecretAccessKey
     * @return void
     */
    public function setAwsSecretAccessKey(string $awsSecretAccessKey): void
    {
        $this->awsSecretAccessKey = $awsSecretAccessKey;
    }

    /**
     * Get current SP API endpoint.
     *
     * @return array
     */
    public function getEndpoint(): array
    {
        return $this->endpoint;
    }

    /**
     * Set SP API endpoint. $endpoint should be one of the constants from Endpoint.php.
     * 
     * @param array $endpoint
     * @return void
     * @throws RuntimeException
     */
    public function setEndpoint(array $endpoint): void
    {
        if (!array_key_exists('url', $endpoint) || !array_key_exists('region', $endpoint)) {
            throw new RuntimeException('$endpoint must contain `url` and `region` keys');
        }

        $this->endpoint = $endpoint;
    }

    /**
     * Check if the given credentials need to be created/renewed.
     *
     * @param ?\SellingPartnerApi\Credentials $creds The credentials to check
     * @return bool True if the credentials need to be updated, false otherwise
     */
    private function needNewCredentials(?Credentials $creds = null): bool
    {
        return $creds === null || $creds->getSecurityToken() === null || $creds->expiresSoon();
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
        return "{$this->formattedRequestTime(false)}/{$this->endpoint['region']}/" . static::SERVICE_NAME . "/{$terminator}";
    }

    private function createSignature(string $signingString, string $secretKey): string
    {
        $kDate = hash_hmac("sha256", $this->formattedRequestTime(false), "AWS4{$secretKey}", true);
        $kRegion = hash_hmac("sha256", $this->endpoint['region'], $kDate, true);
        $kService = hash_hmac("sha256", self::SERVICE_NAME, $kRegion, true);
        $kSigning = hash_hmac("sha256", static::TERMINATION_STR, $kService, true);

        return hash_hmac("sha256", $signingString, $kSigning);
    }

    private function newToken(): void
    {
        [$accessToken, $expirationTimestamp] = $this->requestLWAToken();
        $this->populateCredentials($this->awsAccessKeyId, $this->awsSecretAccessKey, $accessToken, $expirationTimestamp);
        if (!$this->signingScope && $this->onUpdateCreds !== null) {
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
