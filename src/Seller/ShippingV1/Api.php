<?php

namespace SellingPartnerApi\Seller\ShippingV1;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\ShippingV1\Dto\CreateShipmentRequest;
use SellingPartnerApi\Seller\ShippingV1\Dto\GetRatesRequest;
use SellingPartnerApi\Seller\ShippingV1\Dto\PurchaseLabelsRequest;
use SellingPartnerApi\Seller\ShippingV1\Dto\PurchaseShipmentRequest;
use SellingPartnerApi\Seller\ShippingV1\Dto\RetrieveShippingLabelRequest;
use SellingPartnerApi\Seller\ShippingV1\Requests\CancelShipment;
use SellingPartnerApi\Seller\ShippingV1\Requests\CreateShipment;
use SellingPartnerApi\Seller\ShippingV1\Requests\GetAccount;
use SellingPartnerApi\Seller\ShippingV1\Requests\GetRates;
use SellingPartnerApi\Seller\ShippingV1\Requests\GetShipment;
use SellingPartnerApi\Seller\ShippingV1\Requests\GetTrackingInformation;
use SellingPartnerApi\Seller\ShippingV1\Requests\PurchaseLabels;
use SellingPartnerApi\Seller\ShippingV1\Requests\PurchaseShipment;
use SellingPartnerApi\Seller\ShippingV1\Requests\RetrieveShippingLabel;

class Api extends BaseResource
{
    /**
     * @param  CreateShipmentRequest  $createShipmentRequest The request schema for the createShipment operation.
     */
    public function createShipment(CreateShipmentRequest $createShipmentRequest): Response
    {
        return $this->connector->send(new CreateShipment($createShipmentRequest));
    }

    public function getShipment(string $shipmentId): Response
    {
        return $this->connector->send(new GetShipment($shipmentId));
    }

    public function cancelShipment(string $shipmentId): Response
    {
        return $this->connector->send(new CancelShipment($shipmentId));
    }

    /**
     * @param  PurchaseLabelsRequest  $purchaseLabelsRequest The request schema for the purchaseLabels operation.
     */
    public function purchaseLabels(string $shipmentId, PurchaseLabelsRequest $purchaseLabelsRequest): Response
    {
        return $this->connector->send(new PurchaseLabels($shipmentId, $purchaseLabelsRequest));
    }

    /**
     * @param  RetrieveShippingLabelRequest  $retrieveShippingLabelRequest The request schema for the retrieveShippingLabel operation.
     */
    public function retrieveShippingLabel(
        string $shipmentId,
        string $trackingId,
        RetrieveShippingLabelRequest $retrieveShippingLabelRequest,
    ): Response {
        return $this->connector->send(new RetrieveShippingLabel($shipmentId, $trackingId, $retrieveShippingLabelRequest));
    }

    /**
     * @param  PurchaseShipmentRequest  $purchaseShipmentRequest The payload schema for the purchaseShipment operation.
     */
    public function purchaseShipment(PurchaseShipmentRequest $purchaseShipmentRequest): Response
    {
        return $this->connector->send(new PurchaseShipment($purchaseShipmentRequest));
    }

    /**
     * @param  GetRatesRequest  $getRatesRequest The payload schema for the getRates operation.
     */
    public function getRates(GetRatesRequest $getRatesRequest): Response
    {
        return $this->connector->send(new GetRates($getRatesRequest));
    }

    public function getAccount(): Response
    {
        return $this->connector->send(new GetAccount());
    }

    public function getTrackingInformation(string $trackingId): Response
    {
        return $this->connector->send(new GetTrackingInformation($trackingId));
    }
}
