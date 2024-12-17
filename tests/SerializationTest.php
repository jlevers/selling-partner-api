<?php

declare(strict_types=1);

namespace SellingPartnerApi\Tests;

use DateTimeImmutable;
use PHPUnit\Framework\TestCase;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use SellingPartnerApi\Authentication\GetAccessTokenRequest;
use SellingPartnerApi\Enums\Endpoint;
use SellingPartnerApi\Seller\FBAInventoryV1\Requests\GetInventorySummaries;
use SellingPartnerApi\Seller\OrdersV0\Dto\ConfirmShipmentRequest;
use SellingPartnerApi\Seller\OrdersV0\Dto\PackageDetail;
use SellingPartnerApi\Seller\OrdersV0\Requests\ConfirmShipment;
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
                uri: '/products/pricing/v0/items/TESTASIN1/offers',
                method: 'GET',
                marketplaceId: 'marketplace-id',
                itemCondition: 'New',
                customerType: 'Consumer',
            ),
            new ItemOffersRequest(
                uri: '/products/pricing/v0/items/TESTASIN2/offers',
                method: 'GET',
                marketplaceId: 'marketplace-id',
                itemCondition: 'New',
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

    public function testDatesInQueryParametersAreSerializedInZuluFormat(): void
    {
        $mockClient = new MockClient([
            GetAccessTokenRequest::class => MockResponse::make(
                body: [
                    'access_token' => 'access-token',
                    'refresh_token' => 'refresh-token',
                    'expires_in' => 3600,
                    'token_type' => 'bearer',
                ],
            ),
            GetInventorySummaries::class => MockResponse::make(),
        ]);

        $connector = SellingPartnerApi::seller(
            clientId: 'client-id',
            clientSecret: 'client-secret',
            refreshToken: 'refresh-token',
            endpoint: Endpoint::NA_SANDBOX,
        );
        $connector->withMockClient($mockClient);

        $api = $connector->fbaInventoryV1();
        $api->getInventorySummaries(
            granularityType: 'Marketplace',
            granularityId: 'marketplace-id',
            marketplaceIds: ['marketplace-id'],
            startDateTime: new DateTimeImmutable('2024-01-01')
        );

        $query = $mockClient->getLastPendingRequest()->query();

        $this->assertEquals('2024-01-01T00:00:00Z', $query->get('startDateTime'));
    }

    public function testDatesInBodyParametersAreSerializedInZuluFormat(): void
    {
        $mockClient = new MockClient([
            GetAccessTokenRequest::class => MockResponse::make(
                body: [
                    'access_token' => 'access-token',
                    'refresh_token' => 'refresh-token',
                    'expires_in' => 3600,
                    'token_type' => 'bearer',
                ],
            ),
            ConfirmShipment::class => MockResponse::make(),
        ]);

        $connector = SellingPartnerApi::seller(
            clientId: 'client-id',
            clientSecret: 'client-secret',
            refreshToken: 'refresh-token',
            endpoint: Endpoint::NA_SANDBOX,
        );
        $connector->withMockClient($mockClient);

        $api = $connector->ordersV0();
        $api->confirmShipment(
            'order-id',
            new ConfirmShipmentRequest(
                new PackageDetail(
                    packageReferenceId: 'package-reference-id',
                    carrierCode: 'carrier-code',
                    trackingNumber: 'tracking-number',
                    shipDate: new DateTimeImmutable('2024-01-01'),
                    orderItems: [],
                ),
                'marketplace-id',
            )
        );

        $body = $mockClient->getLastPendingRequest()->body()->all();

        $this->assertEquals('2024-01-01T00:00:00Z', $body['packageDetail']['shipDate']);
    }
}
