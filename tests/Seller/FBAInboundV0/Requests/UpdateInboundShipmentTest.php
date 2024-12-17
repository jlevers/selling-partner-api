<?php

declare(strict_types=1);

namespace SellingPartnerApi\Tests\Seller\FBAInboundV0\Requests;

use DateTime;
use PHPUnit\Framework\TestCase;
use Saloon\Config;
use Saloon\Enums\Method;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use Saloon\Http\PendingRequest;
use SellingPartnerApi\Authentication\GetAccessTokenRequest;
use SellingPartnerApi\Enums\Endpoint;
use SellingPartnerApi\Seller\FBAInboundV0\Dto\Address;
use SellingPartnerApi\Seller\FBAInboundV0\Dto\InboundShipmentHeader;
use SellingPartnerApi\Seller\FBAInboundV0\Dto\InboundShipmentItem;
use SellingPartnerApi\Seller\FBAInboundV0\Dto\InboundShipmentRequest;
use SellingPartnerApi\Seller\FBAInboundV0\Dto\PrepDetails;
use SellingPartnerApi\Seller\FBAInboundV0\Requests\UpdateInboundShipment;
use SellingPartnerApi\Seller\FBAInboundV0\Responses\InboundShipmentResponse;
use SellingPartnerApi\SellingPartnerApi;

final class UpdateInboundShipmentTest extends TestCase
{
    public function setUp(): void
    {
        MockClient::destroyGlobal();
        Config::preventStrayRequests();
    }

    public function testHasJsonBody(): void
    {
        $mockClient = new MockClient([
            GetAccessTokenRequest::class => fn () => MockResponse::make([
                'access_token' => 'access-token',
                'token_type' => 'bearer',
                'expires_in' => 3600,
                'refresh_token' => 'refresh-token',
            ]),
            '/fba/inbound/v0/shipments/*' => function (PendingRequest $pendingRequest) {
                $this->assertSame(Method::PUT, $pendingRequest->getMethod());
                $this->assertSame($pendingRequest->getUri()->getPath(), '/fba/inbound/v0/shipments/123456');
                $this->assertSame($pendingRequest->headers()->get('Content-Type'), 'application/json');
                $this->assertTrue($pendingRequest->body()?->isNotEmpty());

                return MockResponse::make(
                    body: [
                        'payload' => [
                            'ShipmentId' => 'FBA15DJCQ1ZF',
                        ],
                    ],
                    headers: ['Content-Type' => 'application/json'],
                );
            },
        ]);

        $connector = SellingPartnerApi::seller(
            clientId: 'client-id',
            clientSecret: 'client-secret',
            refreshToken: 'refresh-token',
            endpoint: Endpoint::NA_SANDBOX,
        );
        $connector->withMockClient($mockClient);

        $dto = $connector->fbaInboundV0()->updateInboundShipment('123456', new InboundShipmentRequest(
            inboundShipmentHeader: new InboundShipmentHeader(
                shipmentName: 'shipment-name',
                shipFromAddress: new Address(
                    name: 'name',
                    addressLine1: 'address-line-1',
                    city: 'city',
                    stateOrProvinceCode: 'state-or-province-code',
                    countryCode: 'country-code',
                    postalCode: 'postal-code',
                ),
                destinationFulfillmentCenterId: 'destination-fulfillment-center-id',
                shipmentStatus: 'WORKING',
                labelPrepPreference: 'SELLER_LABEL',
            ),
            inboundShipmentItems: [
                new InboundShipmentItem(
                    sellerSku: 'seller-sku',
                    quantityShipped: 1,
                    shipmentId: 'shipment-id',
                    quantityReceived: 1,
                    quantityInCase: 1,
                    releaseDate: new DateTime,
                    prepDetailsList: [
                        new PrepDetails(
                            prepInstruction: 'prep-instruction',
                            prepOwner: 'prep-owner',
                        ),
                    ],
                ),
            ],
            marketplaceId: 'marketplace-id',
        ))->dtoOrFail();

        $this->assertInstanceOf(InboundShipmentResponse::class, $dto);
        $this->assertSame('FBA15DJCQ1ZF', $dto->payload->shipmentId);
        $mockClient->assertSent(UpdateInboundShipment::class);
    }
}
