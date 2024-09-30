<?php

declare(strict_types=1);

namespace SellingPartnerApi;

use DateTimeImmutable;
use GuzzleHttp\Client;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Saloon\Contracts\Authenticator;
use Saloon\Contracts\OAuthAuthenticator;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Helpers\OAuth2\OAuthConfig;
use Saloon\Http\Connector;
use Saloon\Http\PendingRequest;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\OAuth2\ClientCredentialsGrant;
use Saloon\Traits\Plugins\AlwaysThrowOnErrors;
use SellingPartnerApi\Authentication\AccessTokenAuthenticator;
use SellingPartnerApi\Authentication\AuthSender;
use SellingPartnerApi\Authentication\GetAccessTokenRequest;
use SellingPartnerApi\Authentication\InMemoryTokenCache;
use SellingPartnerApi\Contracts\TokenCache;
use SellingPartnerApi\Enums\Endpoint;
use SellingPartnerApi\Enums\GrantlessScope;
use SellingPartnerApi\Generator\Package;
use SellingPartnerApi\Seller\SellerConnector;
use SellingPartnerApi\Seller\TokensV20210301;
use SellingPartnerApi\Seller\TokensV20210301\Dto\CreateRestrictedDataTokenRequest;
use SellingPartnerApi\Seller\TokensV20210301\Dto\RestrictedResource;
use SellingPartnerApi\Vendor\VendorConnector;
use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\Dumper\CliDumper;
use Symfony\Component\VarDumper\VarDumper;

abstract class SellingPartnerApi extends Connector
{
    use AlwaysThrowOnErrors;
    use ClientCredentialsGrant {
        getAccessToken as getClientCredentialsToken;
    }

    protected TokensV20210301\Api $tokensApi;

    protected string $userAgent;

    public function __construct(
        public readonly string $clientId,
        public readonly string $clientSecret,
        public readonly string $refreshToken,
        public readonly Endpoint $endpoint,
        public readonly array $dataElements = [],
        public readonly ?string $delegatee = null,
        public ?Client $authenticationClient = null,
        public ?TokenCache $cache = new InMemoryTokenCache,
    ) {
        $this->oauthConfig()
            ->setClientId($clientId)
            ->setClientSecret($clientSecret)
            ->setTokenEndpoint(OAuth::TOKEN_URL);

        $this->tokensApi = new TokensV20210301\Api($this);
    }

    public static function seller(
        string $clientId,
        string $clientSecret,
        string $refreshToken,
        Endpoint $endpoint,
        array $dataElements = [],
        ?string $delegatee = null,
        ?Client $authenticationClient = null,
        ?TokenCache $cache = new InMemoryTokenCache,
    ): SellerConnector {
        return new SellerConnector(
            $clientId,
            $clientSecret,
            $refreshToken,
            $endpoint,
            $dataElements,
            $delegatee,
            $authenticationClient,
            $cache,
        );
    }

    public static function vendor(
        string $clientId,
        string $clientSecret,
        string $refreshToken,
        Endpoint $endpoint,
        array $dataElements = [],
        ?string $delegatee = null,
        ?Client $authenticationClient = null,
        ?TokenCache $cache = new InMemoryTokenCache,
    ): VendorConnector {
        return new VendorConnector(
            $clientId,
            $clientSecret,
            $refreshToken,
            $endpoint,
            $dataElements,
            $delegatee,
            $authenticationClient,
            $cache,
        );
    }

    public function defaultAuth(): Authenticator
    {
        $authenticator = $this->getCacheableAuthenticator(
            $this->refreshToken,
            fn () => $this->getAccessToken()
        );

        return $authenticator;
    }

    public function resolveBaseUrl(): string
    {
        return $this->endpoint->value;
    }

    public function grantlessAuth(GrantlessScope $scope): AccessTokenAuthenticator
    {
        $cacheKey = "{$this->clientId}.{$scope->value}";

        return $this->getCacheableAuthenticator(
            $cacheKey,
            fn () => $this->getAccessToken([$scope])
        );
    }

    public function restrictedAuth(
        string $path,
        string $method,
        array $knownDataElements,
    ): AccessTokenAuthenticator {
        $cacheKey = "{$this->refreshToken}.{$method}.{$path}";

        if ($this->delegatee) {
            $cacheKey = "{$this->delegatee}.{$cacheKey}";
        }

        // Only use data elements that are known to be valid for this particular endpoint
        $dataElements = array_intersect($this->dataElements, $knownDataElements);
        if ($dataElements) {
            $cacheKey .= ':'.implode(',', $dataElements);
        }

        // Using $this in closures doesn't work well
        $dataElements = $this->dataElements;
        $delegatee = $this->delegatee;
        $tokensApi = $this->tokensApi;
        $authenticator = $this->getCacheableAuthenticator(
            $cacheKey,
            function () use ($method, $path, $dataElements, $delegatee, $tokensApi): AccessTokenAuthenticator {
                try {
                    // Using a Tokens API instance created for this specific connector instance ensures that
                    // that instance uses all the same configuration details as the connector that initiated
                    // the restricted request, such as the sender, the HTTP client (important for mocking), etc.
                    $response = $tokensApi->createRestrictedDataToken(
                        new CreateRestrictedDataTokenRequest(
                            [
                                new RestrictedResource(
                                    $method,
                                    $path,
                                    $dataElements ?: null,
                                ),
                            ],
                            $delegatee
                        )
                    )->dto();
                } catch (RequestException $e) {
                    throw new RequestException(
                        $e->getResponse(),
                        "Failed to create restricted data token: {$e->getMessage()}",
                        $e->getCode(),
                        $e->getPrevious()
                    );
                }

                return new AccessTokenAuthenticator(
                    $response->restrictedDataToken,
                    expiresAt: new DateTimeImmutable("+{$response->expiresIn} seconds")
                );
            }
        );

        return $authenticator;
    }

    public function getUserAgent(): string
    {
        if (isset($this->userAgent)) {
            return $this->userAgent;
        }

        $version = Package::version();
        $this->userAgent = "jlevers/selling-partner-api/v$version/php";

        return $this->userAgent;
    }

    public function setUserAgent(string $userAgent): static
    {
        $this->userAgent = $userAgent;

        return $this;
    }

    /**
     * I couldn't find any great way of reusing the original Debugger::symfonyRequestDebugger() method from
     * the Saloon package, so I'm just going to copy and paste the code here, but with the VarDumper
     * configured to dump to a file.
     */
    public function debugRequestToFile(string $outputPath, bool $die = false): static
    {
        return $this->debugRequest(
            function (PendingRequest $pendingRequest, RequestInterface $psrRequest) use ($outputPath) {
                $headers = [];
                foreach ($psrRequest->getHeaders() as $headerName => $value) {
                    $headers[$headerName] = implode(';', $value);
                }

                $className = explode('\\', $pendingRequest->getRequest()::class);
                $label = end($className);

                VarDumper::setHandler(function ($var) use ($outputPath, $label) {
                    $file = fopen($outputPath, 'a');

                    $cloner = new VarCloner;
                    $dumper = new CliDumper($file);
                    $cloned = $cloner->cloneVar($var)
                        ->withContext(['label' => 'Saloon Request('.$label.') ->']);
                    $dumper->dump($cloned);

                    fclose($file);
                });
                VarDumper::dump([
                    'connector' => $pendingRequest->getConnector()::class,
                    'request' => $pendingRequest->getRequest()::class,
                    'method' => $psrRequest->getMethod(),
                    'uri' => (string) $psrRequest->getUri(),
                    'headers' => $headers,
                    'body' => (string) $psrRequest->getBody(),
                ]);
            },
            die: $die,
        );
    }

    /**
     * I couldn't find any great way of reusing the original Debugger::symfonyResponseDebugger() method from
     * the Saloon package, so I'm just going to copy and paste the code here, but with the VarDumper
     * configured to dump to a file.
     */
    public function debugResponseToFile(string $outputPath, bool $die = false): static
    {
        return $this->debugResponse(
            function (Response $response, ResponseInterface $psrResponse) use ($outputPath) {
                $headers = [];
                foreach ($psrResponse->getHeaders() as $headerName => $value) {
                    $headers[$headerName] = implode(';', $value);
                }

                $className = explode('\\', $response->getRequest()::class);
                $label = end($className);

                VarDumper::setHandler(function ($var) use ($outputPath, $label) {
                    $file = fopen($outputPath, 'a');

                    $cloner = new VarCloner;
                    $dumper = new CliDumper($file);
                    $cloned = $cloner->cloneVar($var)
                        ->withContext(['label' => 'Saloon Response('.$label.') ->']);
                    $dumper->dump($cloned);

                    fclose($file);
                });
                VarDumper::dump([
                    'status' => $response->status(),
                    'headers' => $headers,
                    'body' => $response->body(),
                ]);
            },
            die: $die,
        );
    }

    public function debugToFile(string $outputPath, bool $die = false): static
    {
        return $this->debugRequestToFile($outputPath)->debugResponseToFile($outputPath, $die);
    }

    public function getAccessToken(
        array $scopes = [],
        string $scopeSeparator = ' ',
        bool $returnResponse = false,
        ?callable $requestModifier = null
    ): OAuthAuthenticator|Response {
        $originalSender = $this->sender ?? $this->defaultSender();
        // Make sure we use the authentication client for any access token related requests
        if ($this->authenticationClient) {
            $this->sender = new AuthSender($this->authenticationClient);
        }

        $result = $this->getClientCredentialsToken($scopes, $scopeSeparator, $returnResponse, $requestModifier);

        if ($this->authenticationClient) {
            $this->sender = $originalSender;
        }

        return $result;
    }

    protected function resolveAccessTokenRequest(OAuthConfig $oauthConfig, array $scopes = []): Request
    {
        $scope = $scopes ? $scopes[0] : null;

        return new GetAccessTokenRequest($oauthConfig, $this->refreshToken, $scope);
    }

    protected function createOAuthAuthenticator(string $accessToken, ?DateTimeImmutable $expiresAt = null): OAuthAuthenticator
    {
        return new AccessTokenAuthenticator($accessToken, $this->refreshToken, $expiresAt);
    }

    protected function getCacheableAuthenticator(string $key, callable $refetch): AccessTokenAuthenticator
    {
        if ($this->cache) {
            $cached = $this->cache->get($key);
            if ($cached) {
                return $cached;
            }
        }

        $fetched = $refetch();

        if ($this->cache) {
            $this->cache->set($key, $fetched);
        }

        return $fetched;
    }

    public function handlePsrRequest(RequestInterface $request, PendingRequest $pendingRequest): RequestInterface
    {
        // Saloon's default query string builder (which is Guzzle) encodes arrays like key[0]=value0&key[1]=value1,
        // but Amazon expects key=value0,value1
        $query = $pendingRequest->query()->all();

        $csvQuery = [];
        foreach ($query as $key => $value) {
            if (is_array($value)) {
                $stringified = array_map(fn ($v) => urlencode((string) $v), $value);
                $csvQuery[$key] = implode(',', $stringified);
            } elseif (is_bool($value)) {
                $csvQuery[$key] = $value ? 'true' : 'false';
            } else {
                $csvQuery[$key] = urlencode((string) $value);
            }
        }
        $implodeableQuery = [];
        foreach ($csvQuery as $key => $value) {
            $implodeableQuery[] = "$key=$value";
        }
        $implodedQuery = implode('&', $implodeableQuery);

        $uri = $request->getUri()->withQuery($implodedQuery);
        $request = $request->withUri($uri);

        return $request;
    }

    protected function defaultHeaders(): array
    {
        return [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'X-AMZ-Date' => gmdate('Ymd\THis\Z'),
            'User-Agent' => $this->getUserAgent(),
            'Host' => Endpoint::host($this->endpoint),
        ];
    }
}
