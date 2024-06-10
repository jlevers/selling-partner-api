<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Saloon\Config;
use Saloon\Exceptions\Request\Statuses\UnauthorizedException;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use SellingPartnerApi\Authentication\AccessTokenAuthenticator;
use SellingPartnerApi\Authentication\GetAccessTokenRequest;
use SellingPartnerApi\Authentication\InMemoryTokenCache;
use SellingPartnerApi\Contracts\TokenCache;
use SellingPartnerApi\Enums\Endpoint;
use SellingPartnerApi\Enums\GrantlessScope;
use SellingPartnerApi\Seller\TokensV20210301\Requests\CreateRestrictedDataToken;
use SellingPartnerApi\SellingPartnerApi;

class AuthenticationTest extends TestCase
{
    private TokenCache $cache;

    public function setUp(): void
    {
        MockClient::destroyGlobal();
        Config::preventStrayRequests();
        $this->cache = new InMemoryTokenCache();
        $this->cache->clear();
    }

    public function testFetchesNewAccessToken(): void
    {
        $mockClient = new MockClient([
            GetAccessTokenRequest::class => fn () => MockResponse::make([
                'access_token' => 'access-token',
                'token_type' => 'bearer',
                'expires_in' => 3600,
                'refresh_token' => 'refresh-token',
            ]),
        ]);

        $connector = SellingPartnerApi::seller(
            clientId: 'client-id',
            clientSecret: 'client-secret',
            refreshToken: 'refresh-token',
            endpoint: Endpoint::NA_SANDBOX,
        );
        $connector->withMockClient($mockClient);

        $authenticator = $connector->defaultAuth();

        $this->assertInstanceOf(AccessTokenAuthenticator::class, $authenticator);
        $this->assertEquals('access-token', $authenticator->accessToken);
        $this->assertEquals('refresh-token', $authenticator->refreshToken);
        $this->assertInstanceOf(DateTimeImmutable::class, $authenticator->expiresAt);

        $this->assertEquals(
            [
                'grant_type' => 'refresh_token',
                'refresh_token' => 'refresh-token',
                'client_id' => 'client-id',
                'client_secret' => 'client-secret',
            ],
            $mockClient->getLastPendingRequest()->body()->all()
        );
    }

    public function testThrowsUnauthorizedErrorIfAccessTokenRequestFails(): void
    {
        $mockClient = new MockClient([
            GetAccessTokenRequest::class => fn () => MockResponse::make(status: 401),
        ]);

        $this->expectException(UnauthorizedException::class);

        $connector = SellingPartnerApi::seller(
            clientId: 'client-id',
            clientSecret: 'client_secret',
            refreshToken: 'refresh_token',
            endpoint: Endpoint::NA_SANDBOX,
        );
        $connector->withMockClient($mockClient);
        $connector->defaultAuth();
    }

    public function testFetchesNewGrantlessToken(): void
    {
        $mockClient = new MockClient([
            GetAccessTokenRequest::class => fn () => MockResponse::make([
                'access_token' => 'access-token',
                'token_type' => 'bearer',
                'expires_in' => 3600,
                'scope' => 'sellingpartnerapi::notifications',
            ]),
        ]);

        $connector = SellingPartnerApi::seller(
            clientId: 'client-id',
            clientSecret: 'client-secret',
            refreshToken: 'refresh-token',
            endpoint: Endpoint::NA_SANDBOX,
        );
        $connector->withMockClient($mockClient);
        $authenticator = $connector->grantlessAuth(GrantlessScope::NOTIFICATIONS);

        $this->assertInstanceOf(AccessTokenAuthenticator::class, $authenticator);
        $this->assertEquals('access-token', $authenticator->accessToken);
        $this->assertInstanceOf(DateTimeImmutable::class, $authenticator->expiresAt);

        $this->assertEquals(
            [
                'grant_type' => 'client_credentials',
                'client_id' => 'client-id',
                'client_secret' => 'client-secret',
                'scope' => 'sellingpartnerapi::notifications',
            ],
            $mockClient->getLastPendingRequest()->body()->all()
        );
    }

    public function testFetchesNewRestrictedDataTokenFromGenericEndpointPath(): void
    {
        $mockClient = new MockClient([
            GetAccessTokenRequest::class => fn () => MockResponse::make([
                'access_token' => 'access-token',
                'token_type' => 'bearer',
                'expires_in' => 3600,
                'refresh_token' => 'refresh-token',
            ]),
            CreateRestrictedDataToken::class => MockResponse::make([
                'restrictedDataToken' => 'restricted-data-token',
                'expiresIn' => 3600,
            ]),
        ]);

        $connector = SellingPartnerApi::seller(
            clientId: 'client-id',
            clientSecret: 'client-secret',
            refreshToken: 'refresh-token',
            endpoint: Endpoint::NA_SANDBOX,
        );
        $connector->withMockClient($mockClient);

        // Merchant Fulfillment getShipment operation generates RDTs using the generalized endpoint URL,
        // /mfn/v0/shipments/{shipmentId}, rather than substituting in the specific shipmentId from the request.
        $authenticator = $connector->restrictedAuth(
            '/mfn/v0/shipments/{shipmentId}',
            'GET',
            [],
        );

        $this->assertInstanceOf(AccessTokenAuthenticator::class, $authenticator);
        $this->assertEquals('restricted-data-token', $authenticator->accessToken);
        $this->assertInstanceOf(DateTimeImmutable::class, $authenticator->expiresAt);

        $this->assertEquals(
            [
                'restrictedResources' => [
                    [
                        'method' => 'GET',
                        'path' => '/mfn/v0/shipments/{shipmentId}',
                    ],
                ],
            ],
            $mockClient->getLastPendingRequest()->body()->all()
        );
    }

    public function testCreatesNewRestrictedDataTokenFromSpecificEndpointPath(): void
    {
        $mockClient = new MockClient([
            GetAccessTokenRequest::class => fn () => MockResponse::make([
                'access_token' => 'access-token',
                'token_type' => 'bearer',
                'expires_in' => 3600,
                'refresh_token' => 'refresh-token',
            ]),
            CreateRestrictedDataToken::class => MockResponse::make([
                'restrictedDataToken' => 'restricted-data-token',
                'expiresIn' => 3600,
            ]),
        ]);

        $connector = SellingPartnerApi::seller(
            clientId: 'client-id',
            clientSecret: 'client-secret',
            refreshToken: 'refresh-token',
            endpoint: Endpoint::NA_SANDBOX,
        );
        $connector->withMockClient($mockClient);

        // Reports getReportDocument operation generates RDTs using the specific endpoint URL,
        // /reports/2021-06-30/documents/report-document-id, rather than the generic endpoint
        // URL /reports/2021-06-30/documents/{reportDocumentId}
        $connector->restrictedAuth(
            '/reports/2021-06-30/documents/report-document-id-1',
            'GET',
            [],
        );

        $this->assertEquals(
            [
                'restrictedResources' => [
                    [
                        'method' => 'GET',
                        'path' => '/reports/2021-06-30/documents/report-document-id-1',
                    ],
                ],
            ],
            $mockClient->getLastPendingRequest()->body()->all()
        );
    }

    public function testCreatesNewRestrictedDataTokenWithDataElements(): void
    {
        $mockClient = new MockClient([
            GetAccessTokenRequest::class => fn () => MockResponse::make([
                'access_token' => 'access-token',
                'token_type' => 'bearer',
                'expires_in' => 3600,
                'refresh_token' => 'refresh-token',
            ]),
            CreateRestrictedDataToken::class => MockResponse::make([
                'restrictedDataToken' => 'restricted-data-token',
                'expiresIn' => 3600,
            ]),
        ]);

        $connector = SellingPartnerApi::seller(
            clientId: 'client-id',
            clientSecret: 'client-secret',
            refreshToken: 'refresh-token',
            endpoint: Endpoint::NA_SANDBOX,
            dataElements: ['shippingAddress', 'buyerInfo'],
        );
        $connector->withMockClient($mockClient);

        $authenticator = $connector->restrictedAuth(
            '/orders/v0/orders/{orderId}',
            'GET',
            ['shippingAddress', 'buyerInfo'],
        );

        $this->assertEquals('restricted-data-token', $authenticator->accessToken);

        $this->assertEquals(
            [
                'restrictedResources' => [
                    [
                        'method' => 'GET',
                        'path' => '/orders/v0/orders/{orderId}',
                        'dataElements' => ['shippingAddress', 'buyerInfo'],
                    ],
                ],
            ],
            $mockClient->getLastPendingRequest()->body()->all()
        );
    }

    public function testCreatesNewDelegatedRestrictedDataToken(): void
    {
        $mockClient = new MockClient([
            GetAccessTokenRequest::class => fn () => MockResponse::make([
                'access_token' => 'access-token',
                'token_type' => 'bearer',
                'expires_in' => 3600,
                'refresh_token' => 'refresh-token',
            ]),
            CreateRestrictedDataToken::class => MockResponse::make([
                'restrictedDataToken' => 'restricted-data-token',
                'expiresIn' => 3600,
            ]),
        ]);

        $connector = SellingPartnerApi::seller(
            clientId: 'client-id',
            clientSecret: 'client-secret',
            refreshToken: 'refresh-token',
            endpoint: Endpoint::NA_SANDBOX,
            delegatee: 'app-id',
        );
        $connector->withMockClient($mockClient);

        $connector->restrictedAuth(
            '/mfn/v0/shipments/{shipmentId}',
            'GET',
            [],
        );

        $this->assertEquals(
            [
                'restrictedResources' => [
                    [
                        'method' => 'GET',
                        'path' => '/mfn/v0/shipments/{shipmentId}',
                    ],
                ],
                'targetApplication' => 'app-id',
            ],
            $mockClient->getLastPendingRequest()->body()->all()
        );
    }

    public function testFetchesTokenFromCache(): void
    {
        $faker = Faker\Factory::create();
        $mockClient = new MockClient([
            GetAccessTokenRequest::class => fn () => MockResponse::make([
                'access_token' => $faker->unique()->asciify('********************************************'),
                'token_type' => 'bearer',
                'expires_in' => 3600,
                'refresh_token' => 'refresh-token',
            ]),
            CreateRestrictedDataToken::class => fn () => MockResponse::make([
                'restrictedDataToken' => $faker->unique()->asciify('********************************************'),
                'expiresIn' => 3600,
            ]),
        ]);

        $connector = SellingPartnerApi::seller(
            clientId: 'client-id',
            clientSecret: 'client-secret',
            refreshToken: 'refresh-token',
            endpoint: Endpoint::NA_SANDBOX,
            dataElements: ['shippingAddress', 'buyerInfo'],
        );
        $connector->withMockClient($mockClient);

        $authenticator = $connector->defaultAuth();
        $accessToken1 = $authenticator->accessToken;

        $authenticator2 = $connector->defaultAuth();
        $accessToken2 = $authenticator2->accessToken;

        $this->assertEquals($accessToken1, $accessToken2);

        $grantlessAuthenticator1 = $connector->grantlessAuth(GrantlessScope::NOTIFICATIONS);
        $grantlessAuthenticator2 = $connector->grantlessAuth(GrantlessScope::NOTIFICATIONS);

        $this->assertEquals($grantlessAuthenticator1->accessToken, $grantlessAuthenticator2->accessToken);

        $rdtAuthenticator1 = $connector->restrictedAuth(
            '/mfn/v0/shipments/{shipmentId}',
            'GET',
            [],
        );

        $rdtAuthenticator2 = $connector->restrictedAuth(
            '/mfn/v0/shipments/{shipmentId}',
            'GET',
            [],
        );

        $rdtAuthenticator3 = $connector->restrictedAuth(
            '/mfn/v0/shipments/{shipmentId}',
            'DELETE',
            [],
        );

        $this->assertEquals($rdtAuthenticator1->accessToken, $rdtAuthenticator2->accessToken);
        // Make sure different RDTs are generated if the same endpoint URL is used with a different method
        $this->assertNotEquals($rdtAuthenticator1->accessToken, $rdtAuthenticator3->accessToken);

        $dataElementsRdtAuthenticator1 = $connector->restrictedAuth(
            '/orders/v0/orders/{orderId}',
            'GET',
            ['shippingAddress', 'buyerInfo'],
        );

        // Make sure different RDTs are generated if dataElements are/are not included
        $this->assertNotEquals($rdtAuthenticator1->accessToken, $dataElementsRdtAuthenticator1->accessToken);

        $connector2 = SellingPartnerApi::seller(
            clientId: 'client-id',
            clientSecret: 'client-secret',
            refreshToken: 'refresh-token',
            endpoint: Endpoint::NA_SANDBOX,
            dataElements: ['shippingAddress'],
        );
        $connector2->withMockClient($mockClient);

        $dataElementsRdtAuthenticator2 = $connector2->restrictedAuth(
            '/orders/v0/orders/{orderId}',
            'GET',
            ['shippingAddress', 'buyerInfo'],
        );

        // Make sure different dataElements sets result in different RDTs
        $this->assertNotEquals($dataElementsRdtAuthenticator1->accessToken, $dataElementsRdtAuthenticator2->accessToken);
    }
}
