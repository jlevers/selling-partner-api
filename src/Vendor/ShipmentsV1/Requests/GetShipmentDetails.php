<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Vendor\ShipmentsV1\Responses\GetShipmentDetailsResponse;

/**
 * GetShipmentDetails
 */
class GetShipmentDetails extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  ?int  $limit  The limit to the number of records returned. Default value is 50 records.
     * @param  ?string  $sortOrder  Sort in ascending or descending order by purchase order creation date.
     * @param  ?string  $nextToken  Used for pagination when there are more shipments than the specified result size limit.
     * @param  ?DateTime  $createdAfter  Get Shipment Details that became available after this timestamp will be included in the result. Must be in ISO-8601 date/time format.
     * @param  ?DateTime  $createdBefore  Get Shipment Details that became available before this timestamp will be included in the result. Must be in ISO-8601 date/time format.
     * @param  ?DateTime  $shipmentConfirmedBefore  Get Shipment Details by passing Shipment confirmed create Date Before. Must be in ISO-8601 date/time format.
     * @param  ?DateTime  $shipmentConfirmedAfter  Get Shipment Details by passing Shipment confirmed create Date After. Must be in ISO-8601 date/time format.
     * @param  ?DateTime  $packageLabelCreatedBefore  Get Shipment Details by passing Package label create Date by buyer. Must be in ISO-8601 date/time format.
     * @param  ?DateTime  $packageLabelCreatedAfter  Get Shipment Details by passing Package label create Date After by buyer. Must be in ISO-8601 date/time format.
     * @param  ?DateTime  $shippedBefore  Get Shipment Details by passing Shipped Date Before. Must be in ISO-8601 date/time format.
     * @param  ?DateTime  $shippedAfter  Get Shipment Details by passing Shipped Date After. Must be in ISO-8601 date/time format.
     * @param  ?DateTime  $estimatedDeliveryBefore  Get Shipment Details by passing Estimated Delivery Date Before. Must be in ISO-8601 date/time format.
     * @param  ?DateTime  $estimatedDeliveryAfter  Get Shipment Details by passing Estimated Delivery Date Before. Must be in ISO-8601 date/time format.
     * @param  ?DateTime  $shipmentDeliveryBefore  Get Shipment Details by passing Shipment Delivery Date Before. Must be in ISO-8601 date/time format.
     * @param  ?DateTime  $shipmentDeliveryAfter  Get Shipment Details by passing Shipment Delivery Date After. Must be in ISO-8601 date/time format.
     * @param  ?DateTime  $requestedPickUpBefore  Get Shipment Details by passing Before Requested pickup date. Must be in ISO-8601 date/time format.
     * @param  ?DateTime  $requestedPickUpAfter  Get Shipment Details by passing After Requested pickup date. Must be in ISO-8601 date/time format.
     * @param  ?DateTime  $scheduledPickUpBefore  Get Shipment Details by passing Before scheduled pickup date. Must be in ISO-8601 date/time format.
     * @param  ?DateTime  $scheduledPickUpAfter  Get Shipment Details by passing After Scheduled pickup date. Must be in ISO-8601 date/time format.
     * @param  ?string  $currentShipmentStatus  Get Shipment Details by passing Current shipment status.
     * @param  ?string  $vendorShipmentIdentifier  Get Shipment Details by passing Vendor Shipment ID
     * @param  ?string  $buyerReferenceNumber  Get Shipment Details by passing buyer Reference ID
     * @param  ?string  $buyerWarehouseCode  Get Shipping Details based on buyer warehouse code. This value should be same as 'shipToParty.partyId' in the Shipment.
     * @param  ?string  $sellerWarehouseCode  Get Shipping Details based on vendor warehouse code. This value should be same as 'sellingParty.partyId' in the Shipment.
     */
    public function __construct(
        protected ?int $limit = null,
        protected ?string $sortOrder = null,
        protected ?string $nextToken = null,
        protected ?\DateTime $createdAfter = null,
        protected ?\DateTime $createdBefore = null,
        protected ?\DateTime $shipmentConfirmedBefore = null,
        protected ?\DateTime $shipmentConfirmedAfter = null,
        protected ?\DateTime $packageLabelCreatedBefore = null,
        protected ?\DateTime $packageLabelCreatedAfter = null,
        protected ?\DateTime $shippedBefore = null,
        protected ?\DateTime $shippedAfter = null,
        protected ?\DateTime $estimatedDeliveryBefore = null,
        protected ?\DateTime $estimatedDeliveryAfter = null,
        protected ?\DateTime $shipmentDeliveryBefore = null,
        protected ?\DateTime $shipmentDeliveryAfter = null,
        protected ?\DateTime $requestedPickUpBefore = null,
        protected ?\DateTime $requestedPickUpAfter = null,
        protected ?\DateTime $scheduledPickUpBefore = null,
        protected ?\DateTime $scheduledPickUpAfter = null,
        protected ?string $currentShipmentStatus = null,
        protected ?string $vendorShipmentIdentifier = null,
        protected ?string $buyerReferenceNumber = null,
        protected ?string $buyerWarehouseCode = null,
        protected ?string $sellerWarehouseCode = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'limit' => $this->limit,
            'sortOrder' => $this->sortOrder,
            'nextToken' => $this->nextToken,
            'createdAfter' => $this->createdAfter?->format(\DateTime::RFC3339),
            'createdBefore' => $this->createdBefore?->format(\DateTime::RFC3339),
            'shipmentConfirmedBefore' => $this->shipmentConfirmedBefore?->format(\DateTime::RFC3339),
            'shipmentConfirmedAfter' => $this->shipmentConfirmedAfter?->format(\DateTime::RFC3339),
            'packageLabelCreatedBefore' => $this->packageLabelCreatedBefore?->format(\DateTime::RFC3339),
            'packageLabelCreatedAfter' => $this->packageLabelCreatedAfter?->format(\DateTime::RFC3339),
            'shippedBefore' => $this->shippedBefore?->format(\DateTime::RFC3339),
            'shippedAfter' => $this->shippedAfter?->format(\DateTime::RFC3339),
            'estimatedDeliveryBefore' => $this->estimatedDeliveryBefore?->format(\DateTime::RFC3339),
            'estimatedDeliveryAfter' => $this->estimatedDeliveryAfter?->format(\DateTime::RFC3339),
            'shipmentDeliveryBefore' => $this->shipmentDeliveryBefore?->format(\DateTime::RFC3339),
            'shipmentDeliveryAfter' => $this->shipmentDeliveryAfter?->format(\DateTime::RFC3339),
            'requestedPickUpBefore' => $this->requestedPickUpBefore?->format(\DateTime::RFC3339),
            'requestedPickUpAfter' => $this->requestedPickUpAfter?->format(\DateTime::RFC3339),
            'scheduledPickUpBefore' => $this->scheduledPickUpBefore?->format(\DateTime::RFC3339),
            'scheduledPickUpAfter' => $this->scheduledPickUpAfter?->format(\DateTime::RFC3339),
            'currentShipmentStatus' => $this->currentShipmentStatus,
            'vendorShipmentIdentifier' => $this->vendorShipmentIdentifier,
            'buyerReferenceNumber' => $this->buyerReferenceNumber,
            'buyerWarehouseCode' => $this->buyerWarehouseCode,
            'sellerWarehouseCode' => $this->sellerWarehouseCode,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return '/vendor/shipping/v1/shipments';
    }

    public function createDtoFromResponse(Response $response): GetShipmentDetailsResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 415, 429, 500, 503 => GetShipmentDetailsResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
