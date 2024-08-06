<?php

declare(strict_types=1);

namespace SellingPartnerApi\Tests\Seller\ShippingV2\Requests;

use PHPUnit\Framework\TestCase;
use Saloon\Config;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use SellingPartnerApi\Authentication\GetAccessTokenRequest;
use SellingPartnerApi\Enums\Endpoint;
use SellingPartnerApi\Seller\ShippingV2\Requests\GetTracking;
use SellingPartnerApi\SellingPartnerApi;

final class GetTrackingTest extends TestCase
{
    public function setUp(): void
    {
        MockClient::destroyGlobal();
        Config::preventStrayRequests();
    }

    public function testAddsHeaderParametersToRequest(): void
    {
        $mockClient = new MockClient([
            GetAccessTokenRequest::class => fn () => MockResponse::make([
                'access_token' => 'access-token',
                'token_type' => 'bearer',
                'expires_in' => 3600,
                'refresh_token' => 'refresh-token',
            ]),
            GetTracking::class => MockResponse::make(),
        ]);

        $connector = SellingPartnerApi::seller(
            clientId: 'client-id',
            clientSecret: 'client-secret',
            refreshToken: 'refresh-token',
            endpoint: Endpoint::NA_SANDBOX,
        );
        $connector->withMockClient($mockClient);

        $api = $connector->shippingV2();
        $api->getTracking('tracking-id', 'carrier-id', xAmznShippingBusinessId: 'AmazonShipping_US');

        $lastRequest = $mockClient->getLastPendingRequest();

        $this->assertArrayHasKey('x-amzn-shipping-business-id', $lastRequest->headers()->all());
        $this->assertSame('AmazonShipping_US', $lastRequest->headers()->get('x-amzn-shipping-business-id'));
    }
}
