<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Vendor\ShipmentsV1\Dto\SubmitShipmentConfirmationsRequest;
use SellingPartnerApi\Vendor\ShipmentsV1\Dto\SubmitShipments as SubmitShipments1;
use SellingPartnerApi\Vendor\ShipmentsV1\Requests\GetShipmentDetails;
use SellingPartnerApi\Vendor\ShipmentsV1\Requests\GetShipmentLabels;
use SellingPartnerApi\Vendor\ShipmentsV1\Requests\SubmitShipmentConfirmations;
use SellingPartnerApi\Vendor\ShipmentsV1\Requests\SubmitShipments;

class Api extends BaseResource
{
	/**
	 * @param SubmitShipmentConfirmationsRequest $submitShipmentConfirmationsRequest The request schema for the SubmitShipmentConfirmations operation.
	 */
	public function submitShipmentConfirmations(
		SubmitShipmentConfirmationsRequest $submitShipmentConfirmationsRequest,
	): Response
	{
		return $this->connector->send(new SubmitShipmentConfirmations($submitShipmentConfirmationsRequest));
	}


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
	public function getShipmentDetails(
		?int $limit = null,
		?string $sortOrder = null,
		?string $nextToken = null,
		?string $createdAfter = null,
		?string $createdBefore = null,
		?string $shipmentConfirmedBefore = null,
		?string $shipmentConfirmedAfter = null,
		?string $packageLabelCreatedBefore = null,
		?string $packageLabelCreatedAfter = null,
		?string $shippedBefore = null,
		?string $shippedAfter = null,
		?string $estimatedDeliveryBefore = null,
		?string $estimatedDeliveryAfter = null,
		?string $shipmentDeliveryBefore = null,
		?string $shipmentDeliveryAfter = null,
		?string $requestedPickUpBefore = null,
		?string $requestedPickUpAfter = null,
		?string $scheduledPickUpBefore = null,
		?string $scheduledPickUpAfter = null,
		?string $currentShipmentStatus = null,
		?string $vendorShipmentIdentifier = null,
		?string $buyerReferenceNumber = null,
		?string $buyerWarehouseCode = null,
		?string $sellerWarehouseCode = null,
	): Response
	{
		return $this->connector->send(new GetShipmentDetails($limit, $sortOrder, $nextToken, $createdAfter, $createdBefore, $shipmentConfirmedBefore, $shipmentConfirmedAfter, $packageLabelCreatedBefore, $packageLabelCreatedAfter, $shippedBefore, $shippedAfter, $estimatedDeliveryBefore, $estimatedDeliveryAfter, $shipmentDeliveryBefore, $shipmentDeliveryAfter, $requestedPickUpBefore, $requestedPickUpAfter, $scheduledPickUpBefore, $scheduledPickUpAfter, $currentShipmentStatus, $vendorShipmentIdentifier, $buyerReferenceNumber, $buyerWarehouseCode, $sellerWarehouseCode));
	}


	/**
	 * @param SubmitShipments $submitShipments The request schema for the SubmitTransportRequestConfirmations operation.
	 */
	public function submitShipments(SubmitShipments1 $submitShipments): Response
	{
		return $this->connector->send(new SubmitShipments($submitShipments));
	}


	/**
	 * @param ?int $limit The limit to the number of records returned. Default value is 50 records.
	 * @param ?string $sortOrder Sort in ascending or descending order by transport label creation date.
	 * @param ?string $nextToken Used for pagination when there are more transport label than the specified result size limit.
	 * @param ?string $labelCreatedAfter transport Labels that became available after this timestamp will be included in the result. Must be in ISO-8601 date/time format.
	 * @param ?string $labelcreatedBefore transport Labels that became available before this timestamp will be included in the result. Must be in ISO-8601 date/time format.
	 * @param ?string $buyerReferenceNumber Get transport labels by passing Buyer Reference Number to retreive the corresponding transport label.
	 * @param ?string $vendorShipmentIdentifier Get transport labels by passing Vendor Shipment ID to retreive the corresponding transport label.
	 * @param ?string $sellerWarehouseCode Get Shipping labels based Vendor Warehouse code. This value should be same as 'shipFromParty.partyId' in the Shipment.
	 */
	public function getShipmentLabels(
		?int $limit = null,
		?string $sortOrder = null,
		?string $nextToken = null,
		?string $labelCreatedAfter = null,
		?string $labelcreatedBefore = null,
		?string $buyerReferenceNumber = null,
		?string $vendorShipmentIdentifier = null,
		?string $sellerWarehouseCode = null,
	): Response
	{
		return $this->connector->send(new GetShipmentLabels($limit, $sortOrder, $nextToken, $labelCreatedAfter, $labelcreatedBefore, $buyerReferenceNumber, $vendorShipmentIdentifier, $sellerWarehouseCode));
	}
}
