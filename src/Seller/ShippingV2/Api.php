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
     * @param  ?string  $xAmznShippingBusinessId  Amazon shipping business to assume for this request. The default is AmazonShipping_UK.
     */
    public function getRates(GetRatesRequest $getRatesRequest, ?string $xAmznShippingBusinessId = null): Response
    {
        $request = new GetRates($getRatesRequest, $xAmznShippingBusinessId);

        return $this->connector->send($request);
    }

    /**
     * @param  PurchaseShipmentRequest  $purchaseShipmentRequest  The request schema for the purchaseShipment operation.
     * @param  ?string  $xAmznShippingBusinessId  Amazon shipping business to assume for this request. The default is AmazonShipping_UK.
     */
    public function purchaseShipment(
        PurchaseShipmentRequest $purchaseShipmentRequest,
        ?string $xAmznShippingBusinessId = null,
    ): Response {
        $request = new PurchaseShipment($purchaseShipmentRequest, $xAmznShippingBusinessId);

        return $this->connector->send($request);
    }

    /**
     * @param  OneClickShipmentRequest  $oneClickShipmentRequest  The request schema for the OneClickShipment operation. When the channelType is not Amazon, shipTo is required and when channelType is Amazon shipTo is ignored.
     * @param  ?string  $xAmznShippingBusinessId  Amazon shipping business to assume for this request. The default is AmazonShipping_UK.
     */
    public function oneClickShipment(
        OneClickShipmentRequest $oneClickShipmentRequest,
        ?string $xAmznShippingBusinessId = null,
    ): Response {
        $request = new OneClickShipment($oneClickShipmentRequest, $xAmznShippingBusinessId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $trackingId  A carrier-generated tracking identifier originally returned by the purchaseShipment operation.
     * @param  string  $carrierId  A carrier identifier originally returned by the getRates operation for the selected rate.
     * @param  ?string  $xAmznShippingBusinessId  Amazon shipping business to assume for this request. The default is AmazonShipping_UK.
     */
    public function getTracking(string $trackingId, string $carrierId, ?string $xAmznShippingBusinessId = null): Response
    {
        $request = new GetTracking($trackingId, $carrierId, $xAmznShippingBusinessId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $shipmentId  The shipment identifier originally returned by the purchaseShipment operation.
     * @param  string  $packageClientReferenceId  The package client reference identifier originally provided in the request body parameter for the getRates operation.
     * @param  ?string  $format  The file format of the document. Must be one of the supported formats returned by the getRates operation.
     * @param  ?float  $dpi  The resolution of the document (for example, 300 means 300 dots per inch). Must be one of the supported resolutions returned in the response to the getRates operation.
     * @param  ?string  $xAmznShippingBusinessId  Amazon shipping business to assume for this request. The default is AmazonShipping_UK.
     */
    public function getShipmentDocuments(
        string $shipmentId,
        string $packageClientReferenceId,
        ?string $format = null,
        ?float $dpi = null,
        ?string $xAmznShippingBusinessId = null,
    ): Response {
        $request = new GetShipmentDocuments($shipmentId, $packageClientReferenceId, $format, $dpi, $xAmznShippingBusinessId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $shipmentId  The shipment identifier originally returned by the purchaseShipment operation.
     * @param  ?string  $xAmznShippingBusinessId  Amazon shipping business to assume for this request. The default is AmazonShipping_UK.
     */
    public function cancelShipment(string $shipmentId, ?string $xAmznShippingBusinessId = null): Response
    {
        $request = new CancelShipment($shipmentId, $xAmznShippingBusinessId);

        return $this->connector->send($request);
    }

    /**
     * @param  ?string  $xAmznShippingBusinessId  Amazon shipping business to assume for this request. The default is AmazonShipping_UK.
     */
    public function getAccessPoints(
        array $accessPointTypes,
        string $countryCode,
        string $postalCode,
        ?string $xAmznShippingBusinessId = null,
    ): Response {
        $request = new GetAccessPoints($accessPointTypes, $countryCode, $postalCode, $xAmznShippingBusinessId);

        return $this->connector->send($request);
    }

    /**
     * @param  SubmitNdrFeedbackRequest  $submitNdrFeedbackRequest  The request schema for the NdrFeedback operation
     * @param  ?string  $xAmznShippingBusinessId  Amazon shipping business to assume for this request. The default is AmazonShipping_UK.
     */
    public function submitNdrFeedback(
        SubmitNdrFeedbackRequest $submitNdrFeedbackRequest,
        ?string $xAmznShippingBusinessId = null,
    ): Response {
        $request = new SubmitNdrFeedback($submitNdrFeedbackRequest, $xAmznShippingBusinessId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $requestToken  The request token returned in the response to the getRates operation.
     * @param  string  $rateId  The rate identifier for the shipping offering (rate) returned in the response to the getRates operation.
     * @param  ?string  $xAmznShippingBusinessId  Amazon shipping business to assume for this request. The default is AmazonShipping_UK.
     */
    public function getAdditionalInputs(
        string $requestToken,
        string $rateId,
        ?string $xAmznShippingBusinessId = null,
    ): Response {
        $request = new GetAdditionalInputs($requestToken, $rateId, $xAmznShippingBusinessId);

        return $this->connector->send($request);
    }
}
