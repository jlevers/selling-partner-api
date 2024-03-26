<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Vendor\ShipmentsV1\Responses\GetShipmentLabels as GetShipmentLabels1;

/**
 * GetShipmentLabels
 */
class GetShipmentLabels extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  ?int  $limit  The limit to the number of records returned. Default value is 50 records.
     * @param  ?string  $sortOrder  Sort in ascending or descending order by transport label creation date.
     * @param  ?string  $nextToken  Used for pagination when there are more transport label than the specified result size limit.
     * @param  ?DateTime  $labelCreatedAfter  transport Labels that became available after this timestamp will be included in the result. Must be in ISO-8601 date/time format.
     * @param  ?DateTime  $labelcreatedBefore  transport Labels that became available before this timestamp will be included in the result. Must be in ISO-8601 date/time format.
     * @param  ?string  $buyerReferenceNumber  Get transport labels by passing Buyer Reference Number to retreive the corresponding transport label.
     * @param  ?string  $vendorShipmentIdentifier  Get transport labels by passing Vendor Shipment ID to retreive the corresponding transport label.
     * @param  ?string  $sellerWarehouseCode  Get Shipping labels based Vendor Warehouse code. This value should be same as 'shipFromParty.partyId' in the Shipment.
     */
    public function __construct(
        protected ?int $limit = null,
        protected ?string $sortOrder = null,
        protected ?string $nextToken = null,
        protected ?\DateTime $labelCreatedAfter = null,
        protected ?\DateTime $labelcreatedBefore = null,
        protected ?string $buyerReferenceNumber = null,
        protected ?string $vendorShipmentIdentifier = null,
        protected ?string $sellerWarehouseCode = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'limit' => $this->limit,
            'sortOrder' => $this->sortOrder,
            'nextToken' => $this->nextToken,
            'labelCreatedAfter' => $this->labelCreatedAfter?->format(\DateTime::RFC3339),
            'labelcreatedBefore' => $this->labelcreatedBefore?->format(\DateTime::RFC3339),
            'buyerReferenceNumber' => $this->buyerReferenceNumber,
            'vendorShipmentIdentifier' => $this->vendorShipmentIdentifier,
            'sellerWarehouseCode' => $this->sellerWarehouseCode,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return '/vendor/shipping/v1/transportLabels';
    }

    public function createDtoFromResponse(Response $response): GetShipmentLabels1
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 415, 429, 500, 503 => GetShipmentLabels1::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
