<?php

declare(strict_types=1);

namespace SellingPartnerApi\Tests;

use Faker;
use PHPUnit\Framework\TestCase;
use Saloon\Config;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use SellingPartnerApi\Authentication\GetAccessTokenRequest;
use SellingPartnerApi\Authentication\InMemoryTokenCache;
use SellingPartnerApi\Contracts\TokenCache;
use SellingPartnerApi\Enums\Endpoint;
use SellingPartnerApi\Enums\GrantlessScope;
use SellingPartnerApi\Seller\TokensV20210301\Requests\CreateRestrictedDataToken;
use SellingPartnerApi\SellingPartnerApi;

class TokenCacheTest extends TestCase
{
    private TokenCache $cache;

    public function setUp(): void
    {
        MockClient::destroyGlobal();
        Config::preventStrayRequests();
        $this->cache = new InMemoryTokenCache;
        $this->cache->clear();
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

    public function testMultipleRefreshTokensWithOneClientIdDontCacheTheSameToken(): void
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

        $connector1 = SellingPartnerApi::seller(
            clientId: 'client-id',
            clientSecret: 'client-secret',
            refreshToken: 'refresh-token-1',
            endpoint: Endpoint::NA_SANDBOX,
            dataElements: ['shippingAddress', 'buyerInfo'],
        );
        $connector1->withMockClient($mockClient);

        $connector2 = SellingPartnerApi::seller(
            clientId: 'client-id',
            clientSecret: 'client-secret',
            refreshToken: 'refresh-token-2',
            endpoint: Endpoint::NA_SANDBOX,
            dataElements: ['shippingAddress', 'buyerInfo'],
        );
        $connector2->withMockClient($mockClient);

        $authenticator1 = $connector1->defaultAuth();
        $authenticator2 = $connector2->defaultAuth();

        $this->assertNotEquals($authenticator1->accessToken, $authenticator2->accessToken);

        $rdtAuthenticator1 = $connector1->restrictedAuth(
            '/mfn/v0/shipments/{shipmentId}',
            'GET',
            [],
        );
        $rdtAuthenticator2 = $connector2->restrictedAuth(
            '/mfn/v0/shipments/{shipmentId}',
            'GET',
            [],
        );

        $this->assertNotEquals($rdtAuthenticator1->accessToken, $rdtAuthenticator2->accessToken);
    }

    public function testMultipleRefreshTokensWithOneClientIdCachesTheSameGrantlessToken(): void
    {
        $faker = Faker\Factory::create();
        $mockClient = new MockClient([
            GetAccessTokenRequest::class => fn () => MockResponse::make([
                'access_token' => $faker->unique()->asciify('********************************************'),
                'token_type' => 'bearer',
                'expires_in' => 3600,
                'refresh_token' => 'refresh-token',
            ]),
        ]);

        $connector1 = SellingPartnerApi::seller(
            clientId: 'client-id',
            clientSecret: 'client-secret',
            refreshToken: 'refresh-token-1',
            endpoint: Endpoint::NA_SANDBOX,
            dataElements: ['shippingAddress', 'buyerInfo'],
        );
        $connector1->withMockClient($mockClient);

        $connector2 = SellingPartnerApi::seller(
            clientId: 'client-id',
            clientSecret: 'client-secret',
            refreshToken: 'refresh-token-2',
            endpoint: Endpoint::NA_SANDBOX,
            dataElements: ['shippingAddress', 'buyerInfo'],
        );
        $connector2->withMockClient($mockClient);

        $authenticator1 = $connector1->grantlessAuth(GrantlessScope::NOTIFICATIONS);
        $authenticator2 = $connector2->grantlessAuth(GrantlessScope::NOTIFICATIONS);

        $this->assertEquals($authenticator1->accessToken, $authenticator2->accessToken);
    }

    public function testWorksWithNoCache(): void
    {
        $faker = Faker\Factory::create();
        $mockClient = new MockClient([
            GetAccessTokenRequest::class => fn () => MockResponse::make([
                'access_token' => $faker->unique()->asciify('********************************************'),
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
            cache: null,
        );
        $connector->withMockClient($mockClient);

        $authenticator1 = $connector->defaultAuth();
        $authenticator2 = $connector->defaultAuth();

        $this->assertNotEquals($authenticator1->accessToken, $authenticator2->accessToken);
    }
}
