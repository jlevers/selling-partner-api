<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\FBAInboundV0\Responses\GetShipmentsResponse;

/**
 * getShipments
 */
class GetShipments extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $queryType  Indicates whether shipments are returned using shipment information (by providing the ShipmentStatusList or ShipmentIdList parameters), using a date range (by providing the LastUpdatedAfter and LastUpdatedBefore parameters), or by using NextToken to continue returning items specified in a previous request.
     * @param  string  $marketplaceId  A marketplace identifier. Specifies the marketplace where the product would be stored.
     * @param  ?array  $shipmentStatusList  A list of ShipmentStatus values. Used to select shipments with a current status that matches the status values that you specify.
     * @param  ?array  $shipmentIdList  A list of shipment IDs used to select the shipments that you want. If both ShipmentStatusList and ShipmentIdList are specified, only shipments that match both parameters are returned.
     * @param  ?DateTime  $lastUpdatedAfter  A date used for selecting inbound shipments that were last updated after (or at) a specified time. The selection includes updates made by Amazon and by the seller.
     * @param  ?DateTime  $lastUpdatedBefore  A date used for selecting inbound shipments that were last updated before (or at) a specified time. The selection includes updates made by Amazon and by the seller.
     * @param  ?string  $nextToken  A string token returned in the response to your previous request.
     */
    public function __construct(
        protected string $queryType,
        protected string $marketplaceId,
        protected ?array $shipmentStatusList = null,
        protected ?array $shipmentIdList = null,
        protected ?\DateTime $lastUpdatedAfter = null,
        protected ?\DateTime $lastUpdatedBefore = null,
        protected ?string $nextToken = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'QueryType' => $this->queryType,
            'MarketplaceId' => $this->marketplaceId,
            'ShipmentStatusList' => $this->shipmentStatusList,
            'ShipmentIdList' => $this->shipmentIdList,
            'LastUpdatedAfter' => $this->lastUpdatedAfter?->format(\DateTime::RFC3339),
            'LastUpdatedBefore' => $this->lastUpdatedBefore?->format(\DateTime::RFC3339),
            'NextToken' => $this->nextToken,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return '/fba/inbound/v0/shipments';
    }

    public function createDtoFromResponse(Response $response): GetShipmentsResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 429, 500, 503 => GetShipmentsResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
