<?php

declare(strict_types=1);

namespace SellingPartnerApi;

use DateTimeImmutable;
use GuzzleHttp\Client;
use Psr\Http\Message\RequestInterface;
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
use SellingPartnerApi\Seller\TokensV20210301\Dto\CreateRestrictedDataTokenRequest;
use SellingPartnerApi\Seller\TokensV20210301\Dto\RestrictedResource;
use SellingPartnerApi\Vendor\VendorConnector;

abstract class SellingPartnerApi extends Connector
{
    use AlwaysThrowOnErrors;
    use ClientCredentialsGrant {
        getAccessToken as getClientCredentialsToken;
    }

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
            ->setTokenEndpoint('https://api.amazon.com/auth/o2/token');
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
        // Only use data elements that are known to be valid for this particular endpoint
        $dataElements = array_intersect($this->dataElements, $knownDataElements);

        $cacheKey = "{$this->clientId}.{$path}.{$method}";
        if ($dataElements) {
            $cacheKey .= '.'.implode('.', $dataElements);
        }

        // Using $this in closures doesn't work well
        $dataElements = $this->dataElements;
        $delegatee = $this->delegatee;
        $authenticator = $this->getCacheableAuthenticator(
            $cacheKey,
            function () use ($method, $path, $dataElements, $delegatee): AccessTokenAuthenticator {
                try {
                    $tokensApi = self::seller(
                        $this->clientId,
                        $this->clientSecret,
                        $this->refreshToken,
                        $this->endpoint,
                    )->tokensV20210301();
                } catch (RequestException $e) {
                    throw new RequestException(
                        $e->getResponse(),
                        "Failed to create restricted data token: {$e->getMessage()}",
                        $e->getCode(),
                        $e->getPrevious()
                    );
                }

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
        $version = Package::version();

        return "jlevers/selling-partner-api/v$version/php";
    }

    public function getAccessToken(
        array $scopes = [],
        string $scopeSeparator = ' ',
        bool $returnResponse = false,
        ?callable $requestModifier = null
    ): OAuthAuthenticator|Response {
        // Make sure we use the authentication client for any access token related requests
        if ($this->authenticationClient) {
            $this->sender = new AuthSender($this->authenticationClient);
        }

        $result = $this->getClientCredentialsToken($scopes, $scopeSeparator, $returnResponse, $requestModifier);

        if ($this->authenticationClient) {
            $this->sender = $this->defaultSender();
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
        $cached = $this->cache->get($key);
        if ($cached) {
            return $cached;
        }

        $fetched = $refetch();
        $this->cache->set($key, $fetched);

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
