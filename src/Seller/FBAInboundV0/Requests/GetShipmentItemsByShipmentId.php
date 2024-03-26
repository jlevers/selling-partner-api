<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\FBAInboundV0\Responses\GetShipmentItemsResponse;

/**
 * getShipmentItemsByShipmentId
 */
class GetShipmentItemsByShipmentId extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $shipmentId  A shipment identifier used for selecting items in a specific inbound shipment.
     * @param  string  $marketplaceId  A marketplace identifier. Specifies the marketplace where the product would be stored.
     */
    public function __construct(
        protected string $shipmentId,
        protected string $marketplaceId,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['MarketplaceId' => $this->marketplaceId]);
    }

    public function resolveEndpoint(): string
    {
        return "/fba/inbound/v0/shipments/{$this->shipmentId}/items";
    }

    public function createDtoFromResponse(Response $response): GetShipmentItemsResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 429, 500, 503 => GetShipmentItemsResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
