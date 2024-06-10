<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use SellingPartnerApi\Authentication\GetAccessTokenRequest;
use SellingPartnerApi\Enums\Endpoint;
use SellingPartnerApi\Seller\ProductPricingV0\Dto\GetItemOffersBatchRequest;
use SellingPartnerApi\Seller\ProductPricingV0\Dto\ItemOffersRequest;
use SellingPartnerApi\Seller\ProductPricingV0\Requests\GetItemOffersBatch;
use SellingPartnerApi\Seller\SellerConnector;
use SellingPartnerApi\SellingPartnerApi;

class SerializationTest extends TestCase
{
    private SellerConnector $connector;

    public function setUp(): void
    {
        MockClient::destroyGlobal();
        $this->connector = SellingPartnerApi::seller(
            clientId: 'client-id',
            clientSecret: 'client-secret',
            refreshToken: 'refresh-token',
            endpoint: Endpoint::NA_SANDBOX,
        );
    }

    public function testNullValuesAreRemovedFromSerialization(): void
    {
        $mockClient = new MockClient([
            GetAccessTokenRequest::class => fn () => MockResponse::make([
                'access_token' => 'access-token',
                'token_type' => 'bearer',
                'expires_in' => 3600,
                'refresh_token' => 'refresh-token',
            ]),
            GetItemOffersBatch::class => MockResponse::make(status: 200),
        ]);

        $this->connector->withMockClient($mockClient);

        $body = new GetItemOffersBatchRequest([
            new ItemOffersRequest(
                uri: "/products/pricing/v0/items/TESTASIN1/offers",
                method: 'GET',
                itemCondition: 'New',
                marketplaceId: 'marketplace-id',
                customerType: 'Consumer',
            ),
            new ItemOffersRequest(
                uri: "/products/pricing/v0/items/TESTASIN2/offers",
                method: 'GET',
                itemCondition: 'New',
                marketplaceId: 'marketplace-id',
                customerType: null,
            ),
        ]);

        $api = $this->connector->productPricingV0();
        $api->getItemOffersBatch($body);

        $this->assertEquals(
            [
                'requests' => [
                        [
                        'uri' => '/products/pricing/v0/items/TESTASIN1/offers',
                        'method' => 'GET',
                        'ItemCondition' => 'New',
                        'MarketplaceId' => 'marketplace-id',
                        'CustomerType' => 'Consumer',
                    ],
                    [
                        'uri' => '/products/pricing/v0/items/TESTASIN2/offers',
                        'method' => 'GET',
                        'ItemCondition' => 'New',
                        'MarketplaceId' => 'marketplace-id',
                    ],
                ],
            ],
            $mockClient->getLastPendingRequest()->body()->all()
        );
    }
}
