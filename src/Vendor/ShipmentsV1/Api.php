<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Vendor\ShipmentsV1\Dto\SubmitShipmentConfirmationsRequest;
use SellingPartnerApi\Vendor\ShipmentsV1\Dto\SubmitShipments as SubmitShipments1;
use SellingPartnerApi\Vendor\ShipmentsV1\Requests\GetShipmentDetails;
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
     * @param  ?\DateTimeInterface  $createdAfter  Get Shipment Details that became available after this timestamp will be included in the result. Must be in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> format.
     * @param  ?\DateTimeInterface  $createdBefore  Get Shipment Details that became available before this timestamp will be included in the result. Must be in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> format.
     * @param  ?\DateTimeInterface  $shipmentConfirmedBefore  Get Shipment Details by passing Shipment confirmed create Date Before. Must be in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> format.
     * @param  ?\DateTimeInterface  $shipmentConfirmedAfter  Get Shipment Details by passing Shipment confirmed create Date After. Must be in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> format.
     * @param  ?\DateTimeInterface  $packageLabelCreatedBefore  Get Shipment Details by passing Package label create Date by buyer. Must be in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> format.
     * @param  ?\DateTimeInterface  $packageLabelCreatedAfter  Get Shipment Details by passing Package label create Date After by buyer. Must be in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> format.
     * @param  ?\DateTimeInterface  $shippedBefore  Get Shipment Details by passing Shipped Date Before. Must be in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> format.
     * @param  ?\DateTimeInterface  $shippedAfter  Get Shipment Details by passing Shipped Date After. Must be in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> format.
     * @param  ?\DateTimeInterface  $estimatedDeliveryBefore  Get Shipment Details by passing Estimated Delivery Date Before. Must be in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> format.
     * @param  ?\DateTimeInterface  $estimatedDeliveryAfter  Get Shipment Details by passing Estimated Delivery Date Before. Must be in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> format.
     * @param  ?\DateTimeInterface  $shipmentDeliveryBefore  Get Shipment Details by passing Shipment Delivery Date Before. Must be in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> format.
     * @param  ?\DateTimeInterface  $shipmentDeliveryAfter  Get Shipment Details by passing Shipment Delivery Date After. Must be in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> format.
     * @param  ?\DateTimeInterface  $requestedPickUpBefore  Get Shipment Details by passing Before Requested pickup date. Must be in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> format.
     * @param  ?\DateTimeInterface  $requestedPickUpAfter  Get Shipment Details by passing After Requested pickup date. Must be in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> format.
     * @param  ?\DateTimeInterface  $scheduledPickUpBefore  Get Shipment Details by passing Before scheduled pickup date. Must be in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> format.
     * @param  ?\DateTimeInterface  $scheduledPickUpAfter  Get Shipment Details by passing After Scheduled pickup date. Must be in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> format.
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
        ?\DateTimeInterface $createdAfter = null,
        ?\DateTimeInterface $createdBefore = null,
        ?\DateTimeInterface $shipmentConfirmedBefore = null,
        ?\DateTimeInterface $shipmentConfirmedAfter = null,
        ?\DateTimeInterface $packageLabelCreatedBefore = null,
        ?\DateTimeInterface $packageLabelCreatedAfter = null,
        ?\DateTimeInterface $shippedBefore = null,
        ?\DateTimeInterface $shippedAfter = null,
        ?\DateTimeInterface $estimatedDeliveryBefore = null,
        ?\DateTimeInterface $estimatedDeliveryAfter = null,
        ?\DateTimeInterface $shipmentDeliveryBefore = null,
        ?\DateTimeInterface $shipmentDeliveryAfter = null,
        ?\DateTimeInterface $requestedPickUpBefore = null,
        ?\DateTimeInterface $requestedPickUpAfter = null,
        ?\DateTimeInterface $scheduledPickUpBefore = null,
        ?\DateTimeInterface $scheduledPickUpAfter = null,
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
     * @param  SubmitShipments  $submitShipments  The request schema for the SubmitShipments operation.
     */
    public function submitShipments(SubmitShipments1 $submitShipments): Response
    {
        $request = new SubmitShipments($submitShipments);

        return $this->connector->send($request);
    }
}
