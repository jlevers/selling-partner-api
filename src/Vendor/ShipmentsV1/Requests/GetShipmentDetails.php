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
	 * @param ?int $limit The limit to the number of records returned. Default value is 50 records.
	 * @param ?string $sortOrder Sort in ascending or descending order by purchase order creation date.
	 * @param ?string $nextToken Used for pagination when there are more shipments than the specified result size limit.
	 * @param ?string $createdAfter Get Shipment Details that became available after this timestamp will be included in the result. Must be in ISO-8601 date/time format.
	 * @param ?string $createdBefore Get Shipment Details that became available before this timestamp will be included in the result. Must be in ISO-8601 date/time format.
	 * @param ?string $shipmentConfirmedBefore Get Shipment Details by passing Shipment confirmed create Date Before. Must be in ISO-8601 date/time format.
	 * @param ?string $shipmentConfirmedAfter Get Shipment Details by passing Shipment confirmed create Date After. Must be in ISO-8601 date/time format.
	 * @param ?string $packageLabelCreatedBefore Get Shipment Details by passing Package label create Date by buyer. Must be in ISO-8601 date/time format.
	 * @param ?string $packageLabelCreatedAfter Get Shipment Details by passing Package label create Date After by buyer. Must be in ISO-8601 date/time format.
	 * @param ?string $shippedBefore Get Shipment Details by passing Shipped Date Before. Must be in ISO-8601 date/time format.
	 * @param ?string $shippedAfter Get Shipment Details by passing Shipped Date After. Must be in ISO-8601 date/time format.
	 * @param ?string $estimatedDeliveryBefore Get Shipment Details by passing Estimated Delivery Date Before. Must be in ISO-8601 date/time format.
	 * @param ?string $estimatedDeliveryAfter Get Shipment Details by passing Estimated Delivery Date Before. Must be in ISO-8601 date/time format.
	 * @param ?string $shipmentDeliveryBefore Get Shipment Details by passing Shipment Delivery Date Before. Must be in ISO-8601 date/time format.
	 * @param ?string $shipmentDeliveryAfter Get Shipment Details by passing Shipment Delivery Date After. Must be in ISO-8601 date/time format.
	 * @param ?string $requestedPickUpBefore Get Shipment Details by passing Before Requested pickup date. Must be in ISO-8601 date/time format.
	 * @param ?string $requestedPickUpAfter Get Shipment Details by passing After Requested pickup date. Must be in ISO-8601 date/time format.
	 * @param ?string $scheduledPickUpBefore Get Shipment Details by passing Before scheduled pickup date. Must be in ISO-8601 date/time format.
	 * @param ?string $scheduledPickUpAfter Get Shipment Details by passing After Scheduled pickup date. Must be in ISO-8601 date/time format.
	 * @param ?string $currentShipmentStatus Get Shipment Details by passing Current shipment status.
	 * @param ?string $vendorShipmentIdentifier Get Shipment Details by passing Vendor Shipment ID
	 * @param ?string $buyerReferenceNumber Get Shipment Details by passing buyer Reference ID
	 * @param ?string $buyerWarehouseCode Get Shipping Details based on buyer warehouse code. This value should be same as 'shipToParty.partyId' in the Shipment.
	 * @param ?string $sellerWarehouseCode Get Shipping Details based on vendor warehouse code. This value should be same as 'sellingParty.partyId' in the Shipment.
	 */
	public function __construct(
		protected ?int $limit = null,
		protected ?string $sortOrder = null,
		protected ?string $nextToken = null,
		protected ?string $createdAfter = null,
		protected ?string $createdBefore = null,
		protected ?string $shipmentConfirmedBefore = null,
		protected ?string $shipmentConfirmedAfter = null,
		protected ?string $packageLabelCreatedBefore = null,
		protected ?string $packageLabelCreatedAfter = null,
		protected ?string $shippedBefore = null,
		protected ?string $shippedAfter = null,
		protected ?string $estimatedDeliveryBefore = null,
		protected ?string $estimatedDeliveryAfter = null,
		protected ?string $shipmentDeliveryBefore = null,
		protected ?string $shipmentDeliveryAfter = null,
		protected ?string $requestedPickUpBefore = null,
		protected ?string $requestedPickUpAfter = null,
		protected ?string $scheduledPickUpBefore = null,
		protected ?string $scheduledPickUpAfter = null,
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
			'createdAfter' => $this->createdAfter,
			'createdBefore' => $this->createdBefore,
			'shipmentConfirmedBefore' => $this->shipmentConfirmedBefore,
			'shipmentConfirmedAfter' => $this->shipmentConfirmedAfter,
			'packageLabelCreatedBefore' => $this->packageLabelCreatedBefore,
			'packageLabelCreatedAfter' => $this->packageLabelCreatedAfter,
			'shippedBefore' => $this->shippedBefore,
			'shippedAfter' => $this->shippedAfter,
			'estimatedDeliveryBefore' => $this->estimatedDeliveryBefore,
			'estimatedDeliveryAfter' => $this->estimatedDeliveryAfter,
			'shipmentDeliveryBefore' => $this->shipmentDeliveryBefore,
			'shipmentDeliveryAfter' => $this->shipmentDeliveryAfter,
			'requestedPickUpBefore' => $this->requestedPickUpBefore,
			'requestedPickUpAfter' => $this->requestedPickUpAfter,
			'scheduledPickUpBefore' => $this->scheduledPickUpBefore,
			'scheduledPickUpAfter' => $this->scheduledPickUpAfter,
			'currentShipmentStatus' => $this->currentShipmentStatus,
			'vendorShipmentIdentifier' => $this->vendorShipmentIdentifier,
			'buyerReferenceNumber' => $this->buyerReferenceNumber,
			'buyerWarehouseCode' => $this->buyerWarehouseCode,
			'sellerWarehouseCode' => $this->sellerWarehouseCode,
		]);
	}


	public function resolveEndpoint(): string
	{
		return "/vendor/shipping/v1/shipments";
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
