<?php

namespace SellingPartnerApi\Seller\ShippingV2;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\ShippingV2\Dto\GetRatesRequest;
use SellingPartnerApi\Seller\ShippingV2\Dto\OneClickShipmentRequest;
use SellingPartnerApi\Seller\ShippingV2\Dto\PurchaseShipmentRequest;
use SellingPartnerApi\Seller\ShippingV2\Dto\SubmitNdrFeedbackRequest;
use SellingPartnerApi\Seller\ShippingV2\Requests\CancelShipment;
use SellingPartnerApi\Seller\ShippingV2\Requests\GetAccessPoints;
use SellingPartnerApi\Seller\ShippingV2\Requests\GetAdditionalInputs;
use SellingPartnerApi\Seller\ShippingV2\Requests\GetRates;
use SellingPartnerApi\Seller\ShippingV2\Requests\GetShipmentDocuments;
use SellingPartnerApi\Seller\ShippingV2\Requests\GetTracking;
use SellingPartnerApi\Seller\ShippingV2\Requests\OneClickShipment;
use SellingPartnerApi\Seller\ShippingV2\Requests\PurchaseShipment;
use SellingPartnerApi\Seller\ShippingV2\Requests\SubmitNdrFeedback;

class Api extends BaseResource
{
    /**
     * @param  GetRatesRequest  $getRatesRequest  The request schema for the getRates operation. When the channelType is Amazon, the shipTo address is not required and will be ignored.
     */
    public function getRates(GetRatesRequest $getRatesRequest): Response
    {
        $request = new GetRates($getRatesRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  PurchaseShipmentRequest  $purchaseShipmentRequest  The request schema for the purchaseShipment operation.
     */
    public function purchaseShipment(PurchaseShipmentRequest $purchaseShipmentRequest): Response
    {
        $request = new PurchaseShipment($purchaseShipmentRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  OneClickShipmentRequest  $oneClickShipmentRequest  The request schema for the OneClickShipment operation. When the channelType is not Amazon, shipTo is required and when channelType is Amazon shipTo is ignored.
     */
    public function oneClickShipment(OneClickShipmentRequest $oneClickShipmentRequest): Response
    {
        $request = new OneClickShipment($oneClickShipmentRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $trackingId  A carrier-generated tracking identifier originally returned by the purchaseShipment operation.
     * @param  string  $carrierId  A carrier identifier originally returned by the getRates operation for the selected rate.
     */
    public function getTracking(string $trackingId, string $carrierId): Response
    {
        $request = new GetTracking($trackingId, $carrierId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $shipmentId  The shipment identifier originally returned by the purchaseShipment operation.
     * @param  string  $packageClientReferenceId  The package client reference identifier originally provided in the request body parameter for the getRates operation.
     * @param  ?string  $format  The file format of the document. Must be one of the supported formats returned by the getRates operation.
     * @param  ?float  $dpi  The resolution of the document (for example, 300 means 300 dots per inch). Must be one of the supported resolutions returned in the response to the getRates operation.
     */
    public function getShipmentDocuments(
        string $shipmentId,
        string $packageClientReferenceId,
        ?string $format = null,
        ?float $dpi = null,
    ): Response {
        $request = new GetShipmentDocuments($shipmentId, $packageClientReferenceId, $format, $dpi);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $shipmentId  The shipment identifier originally returned by the purchaseShipment operation.
     */
    public function cancelShipment(string $shipmentId): Response
    {
        $request = new CancelShipment($shipmentId);

        return $this->connector->send($request);
    }

    public function getAccessPoints(array $accessPointTypes, string $countryCode, string $postalCode): Response
    {
        $request = new GetAccessPoints($accessPointTypes, $countryCode, $postalCode);

        return $this->connector->send($request);
    }

    /**
     * @param  SubmitNdrFeedbackRequest  $submitNdrFeedbackRequest  The request schema for the NdrFeedback operation
     */
    public function submitNdrFeedback(SubmitNdrFeedbackRequest $submitNdrFeedbackRequest): Response
    {
        $request = new SubmitNdrFeedback($submitNdrFeedbackRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $requestToken  The request token returned in the response to the getRates operation.
     * @param  string  $rateId  The rate identifier for the shipping offering (rate) returned in the response to the getRates operation.
     */
    public function getAdditionalInputs(string $requestToken, string $rateId): Response
    {
        $request = new GetAdditionalInputs($requestToken, $rateId);

        return $this->connector->send($request);
    }
}
