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
     * @param  SubmitShipmentConfirmationsRequest  $submitShipmentConfirmationsRequest  The request schema for the SubmitShipmentConfirmations operation.
     */
    public function submitShipmentConfirmations(
        SubmitShipmentConfirmationsRequest $submitShipmentConfirmationsRequest,
    ): Response {
        $request = new SubmitShipmentConfirmations($submitShipmentConfirmationsRequest);

        return $this->connector->send($request);
    }

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
    public function getShipmentDetails(
        ?int $limit = null,
        ?string $sortOrder = null,
        ?string $nextToken = null,
        ?\DateTime $createdAfter = null,
        ?\DateTime $createdBefore = null,
        ?\DateTime $shipmentConfirmedBefore = null,
        ?\DateTime $shipmentConfirmedAfter = null,
        ?\DateTime $packageLabelCreatedBefore = null,
        ?\DateTime $packageLabelCreatedAfter = null,
        ?\DateTime $shippedBefore = null,
        ?\DateTime $shippedAfter = null,
        ?\DateTime $estimatedDeliveryBefore = null,
        ?\DateTime $estimatedDeliveryAfter = null,
        ?\DateTime $shipmentDeliveryBefore = null,
        ?\DateTime $shipmentDeliveryAfter = null,
        ?\DateTime $requestedPickUpBefore = null,
        ?\DateTime $requestedPickUpAfter = null,
        ?\DateTime $scheduledPickUpBefore = null,
        ?\DateTime $scheduledPickUpAfter = null,
        ?string $currentShipmentStatus = null,
        ?string $vendorShipmentIdentifier = null,
        ?string $buyerReferenceNumber = null,
        ?string $buyerWarehouseCode = null,
        ?string $sellerWarehouseCode = null,
    ): Response {
        $request = new GetShipmentDetails($limit, $sortOrder, $nextToken, $createdAfter, $createdBefore, $shipmentConfirmedBefore, $shipmentConfirmedAfter, $packageLabelCreatedBefore, $packageLabelCreatedAfter, $shippedBefore, $shippedAfter, $estimatedDeliveryBefore, $estimatedDeliveryAfter, $shipmentDeliveryBefore, $shipmentDeliveryAfter, $requestedPickUpBefore, $requestedPickUpAfter, $scheduledPickUpBefore, $scheduledPickUpAfter, $currentShipmentStatus, $vendorShipmentIdentifier, $buyerReferenceNumber, $buyerWarehouseCode, $sellerWarehouseCode);

        return $this->connector->send($request);
    }

    /**
     * @param  SubmitShipments  $submitShipments  The request schema for the SubmitTransportRequestConfirmations operation.
     */
    public function submitShipments(SubmitShipments1 $submitShipments): Response
    {
        $request = new SubmitShipments($submitShipments);

        return $this->connector->send($request);
    }

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
    public function getShipmentLabels(
        ?int $limit = null,
        ?string $sortOrder = null,
        ?string $nextToken = null,
        ?\DateTime $labelCreatedAfter = null,
        ?\DateTime $labelcreatedBefore = null,
        ?string $buyerReferenceNumber = null,
        ?string $vendorShipmentIdentifier = null,
        ?string $sellerWarehouseCode = null,
    ): Response {
        $request = new GetShipmentLabels($limit, $sortOrder, $nextToken, $labelCreatedAfter, $labelcreatedBefore, $buyerReferenceNumber, $vendorShipmentIdentifier, $sellerWarehouseCode);

        return $this->connector->send($request);
    }
}
