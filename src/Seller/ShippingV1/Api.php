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
     * @param  CreateShipmentRequest  $createShipmentRequest  The request schema for the createShipment operation.
     */
    public function createShipment(CreateShipmentRequest $createShipmentRequest): Response
    {
        $request = new CreateShipment($createShipmentRequest);

        return $this->connector->send($request);
    }

    public function getShipment(string $shipmentId): Response
    {
        $request = new GetShipment($shipmentId);

        return $this->connector->send($request);
    }

    public function cancelShipment(string $shipmentId): Response
    {
        $request = new CancelShipment($shipmentId);

        return $this->connector->send($request);
    }

    /**
     * @param  PurchaseLabelsRequest  $purchaseLabelsRequest  The request schema for the purchaseLabels operation.
     */
    public function purchaseLabels(string $shipmentId, PurchaseLabelsRequest $purchaseLabelsRequest): Response
    {
        $request = new PurchaseLabels($shipmentId, $purchaseLabelsRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  RetrieveShippingLabelRequest  $retrieveShippingLabelRequest  The request schema for the retrieveShippingLabel operation.
     */
    public function retrieveShippingLabel(
        string $shipmentId,
        string $trackingId,
        RetrieveShippingLabelRequest $retrieveShippingLabelRequest,
    ): Response {
        $request = new RetrieveShippingLabel($shipmentId, $trackingId, $retrieveShippingLabelRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  PurchaseShipmentRequest  $purchaseShipmentRequest  The payload schema for the purchaseShipment operation.
     */
    public function purchaseShipment(PurchaseShipmentRequest $purchaseShipmentRequest): Response
    {
        $request = new PurchaseShipment($purchaseShipmentRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  GetRatesRequest  $getRatesRequest  The payload schema for the getRates operation.
     */
    public function getRates(GetRatesRequest $getRatesRequest): Response
    {
        $request = new GetRates($getRatesRequest);

        return $this->connector->send($request);
    }

    public function getAccount(): Response
    {
        $request = new GetAccount;

        return $this->connector->send($request);
    }

    public function getTrackingInformation(string $trackingId): Response
    {
        $request = new GetTrackingInformation($trackingId);

        return $this->connector->send($request);
    }
}
