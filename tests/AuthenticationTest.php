<?php

declare(strict_types=1);

namespace SellingPartnerApi\Tests;

use DateTimeImmutable;
use PHPUnit\Framework\TestCase;
use Saloon\Config;
use Saloon\Exceptions\Request\Statuses\UnauthorizedException;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use SellingPartnerApi\Authentication\AccessTokenAuthenticator;
use SellingPartnerApi\Authentication\GetAccessTokenRequest;
use SellingPartnerApi\Enums\Endpoint;
use SellingPartnerApi\Enums\GrantlessScope;
use SellingPartnerApi\Seller\TokensV20210301\Requests\CreateRestrictedDataToken;
use SellingPartnerApi\SellingPartnerApi;

class AuthenticationTest extends TestCase
{
    public function setUp(): void
    {
        MockClient::destroyGlobal();
        Config::preventStrayRequests();
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
}
