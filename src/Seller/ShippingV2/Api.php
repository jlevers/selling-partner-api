<?php

namespace SellingPartnerApi\Seller\ShippingV2;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\ShippingV2\Dto\CreateClaimRequest;
use SellingPartnerApi\Seller\ShippingV2\Dto\DirectPurchaseRequest;
use SellingPartnerApi\Seller\ShippingV2\Dto\GenerateCollectionFormRequest;
use SellingPartnerApi\Seller\ShippingV2\Dto\GetCarrierAccountsRequest;
use SellingPartnerApi\Seller\ShippingV2\Dto\GetCollectionFormHistoryRequest;
use SellingPartnerApi\Seller\ShippingV2\Dto\GetRatesRequest;
use SellingPartnerApi\Seller\ShippingV2\Dto\GetUnmanifestedShipmentsRequest;
use SellingPartnerApi\Seller\ShippingV2\Dto\LinkCarrierAccountRequest;
use SellingPartnerApi\Seller\ShippingV2\Dto\OneClickShipmentRequest;
use SellingPartnerApi\Seller\ShippingV2\Dto\PurchaseShipmentRequest;
use SellingPartnerApi\Seller\ShippingV2\Dto\SubmitNdrFeedbackRequest;
use SellingPartnerApi\Seller\ShippingV2\Dto\UnlinkCarrierAccountRequest;
use SellingPartnerApi\Seller\ShippingV2\Requests\CancelShipment;
use SellingPartnerApi\Seller\ShippingV2\Requests\CreateClaim;
use SellingPartnerApi\Seller\ShippingV2\Requests\DirectPurchaseShipment;
use SellingPartnerApi\Seller\ShippingV2\Requests\GenerateCollectionForm;
use SellingPartnerApi\Seller\ShippingV2\Requests\GetAccessPoints;
use SellingPartnerApi\Seller\ShippingV2\Requests\GetAdditionalInputs;
use SellingPartnerApi\Seller\ShippingV2\Requests\GetCarrierAccountFormInputs;
use SellingPartnerApi\Seller\ShippingV2\Requests\GetCarrierAccounts;
use SellingPartnerApi\Seller\ShippingV2\Requests\GetCollectionForm;
use SellingPartnerApi\Seller\ShippingV2\Requests\GetCollectionFormHistory;
use SellingPartnerApi\Seller\ShippingV2\Requests\GetRates;
use SellingPartnerApi\Seller\ShippingV2\Requests\GetShipmentDocuments;
use SellingPartnerApi\Seller\ShippingV2\Requests\GetTracking;
use SellingPartnerApi\Seller\ShippingV2\Requests\GetUnmanifestedShipments;
use SellingPartnerApi\Seller\ShippingV2\Requests\LinkCarrierAccount;
use SellingPartnerApi\Seller\ShippingV2\Requests\OneClickShipment;
use SellingPartnerApi\Seller\ShippingV2\Requests\PurchaseShipment;
use SellingPartnerApi\Seller\ShippingV2\Requests\SubmitNdrFeedback;
use SellingPartnerApi\Seller\ShippingV2\Requests\UnlinkCarrierAccount;
use SellingPartnerApi\Seller\ShippingV2\Requests\UpdateLinkedCarrierAccount;

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
     * @param  DirectPurchaseRequest  $directPurchaseRequest  The request schema for the directPurchaseShipment operation. When the channel type is Amazon, the shipTo address is not required and will be ignored.
     * @param  ?string  $xAmznIdempotencyKey  A unique value which the server uses to recognize subsequent retries of the same request.
     * @param  ?string  $locale  The IETF Language Tag. Note that this only supports the primary language subtag with one secondary language subtag (i.e. en-US, fr-CA).
     *                           The secondary language subtag is almost always a regional designation.
     *                           This does not support additional subtags beyond the primary and secondary language subtags.
     * @param  ?string  $xAmznShippingBusinessId  Amazon shipping business to assume for this request. The default is AmazonShipping_UK.
     */
    public function directPurchaseShipment(
        DirectPurchaseRequest $directPurchaseRequest,
        ?string $xAmznIdempotencyKey = null,
        ?string $locale = null,
        ?string $xAmznShippingBusinessId = null,
    ): Response {
        $request = new DirectPurchaseShipment($directPurchaseRequest, $xAmznIdempotencyKey, $locale, $xAmznShippingBusinessId);

        return $this->connector->send($request);
    }

    /**
     * @param  PurchaseShipmentRequest  $purchaseShipmentRequest  The request schema for the purchaseShipment operation.
     * @param  ?string  $xAmznIdempotencyKey  A unique value which the server uses to recognize subsequent retries of the same request.
     * @param  ?string  $xAmznShippingBusinessId  Amazon shipping business to assume for this request. The default is AmazonShipping_UK.
     */
    public function purchaseShipment(
        PurchaseShipmentRequest $purchaseShipmentRequest,
        ?string $xAmznIdempotencyKey = null,
        ?string $xAmznShippingBusinessId = null,
    ): Response {
        $request = new PurchaseShipment($purchaseShipmentRequest, $xAmznIdempotencyKey, $xAmznShippingBusinessId);

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

    /**
     * @param  ?string  $xAmznShippingBusinessId  Amazon shipping business to assume for this request. The default is AmazonShipping_UK.
     */
    public function getCarrierAccountFormInputs(?string $xAmznShippingBusinessId = null): Response
    {
        $request = new GetCarrierAccountFormInputs($xAmznShippingBusinessId);

        return $this->connector->send($request);
    }

    /**
     * @param  GetCarrierAccountsRequest  $getCarrierAccountsRequest  The request schema for the GetCarrierAccounts operation.
     * @param  ?string  $xAmznShippingBusinessId  Amazon shipping business to assume for this request. The default is AmazonShipping_UK.
     */
    public function getCarrierAccounts(
        GetCarrierAccountsRequest $getCarrierAccountsRequest,
        ?string $xAmznShippingBusinessId = null,
    ): Response {
        $request = new GetCarrierAccounts($getCarrierAccountsRequest, $xAmznShippingBusinessId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $carrierId  An identifier for the carrier with which the seller's account is being linked.
     * @param  LinkCarrierAccountRequest  $linkCarrierAccountRequest  The request schema for verify and add the merchant's account with a certain carrier.
     * @param  ?string  $xAmznShippingBusinessId  Amazon shipping business to assume for this request. The default is AmazonShipping_UK.
     */
    public function updateLinkedCarrierAccount(
        string $carrierId,
        LinkCarrierAccountRequest $linkCarrierAccountRequest,
        ?string $xAmznShippingBusinessId = null,
    ): Response {
        $request = new UpdateLinkedCarrierAccount($carrierId, $linkCarrierAccountRequest, $xAmznShippingBusinessId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $carrierId  An identifier for the carrier with which the seller's account is being linked.
     * @param  LinkCarrierAccountRequest  $linkCarrierAccountRequest  The request schema for verify and add the merchant's account with a certain carrier.
     * @param  ?string  $xAmznShippingBusinessId  Amazon shipping business to assume for this request. The default is AmazonShipping_UK.
     */
    public function linkCarrierAccount(
        string $carrierId,
        LinkCarrierAccountRequest $linkCarrierAccountRequest,
        ?string $xAmznShippingBusinessId = null,
    ): Response {
        $request = new LinkCarrierAccount($carrierId, $linkCarrierAccountRequest, $xAmznShippingBusinessId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $carrierId  carrier Id to unlink with merchant.
     * @param  UnlinkCarrierAccountRequest  $unlinkCarrierAccountRequest  The request schema for remove the Carrier Account associated with the provided merchant.
     * @param  ?string  $xAmznShippingBusinessId  Amazon shipping business to assume for this request. The default is AmazonShipping_UK.
     */
    public function unlinkCarrierAccount(
        string $carrierId,
        UnlinkCarrierAccountRequest $unlinkCarrierAccountRequest,
        ?string $xAmznShippingBusinessId = null,
    ): Response {
        $request = new UnlinkCarrierAccount($carrierId, $unlinkCarrierAccountRequest, $xAmznShippingBusinessId);

        return $this->connector->send($request);
    }

    /**
     * @param  GenerateCollectionFormRequest  $generateCollectionFormRequest  The request schema Call to generate the collection form.
     * @param  ?string  $xAmznIdempotencyKey  A unique value which the server uses to recognize subsequent retries of the same request.
     * @param  ?string  $xAmznShippingBusinessId  Amazon shipping business to assume for this request. The default is AmazonShipping_UK.
     */
    public function generateCollectionForm(
        GenerateCollectionFormRequest $generateCollectionFormRequest,
        ?string $xAmznIdempotencyKey = null,
        ?string $xAmznShippingBusinessId = null,
    ): Response {
        $request = new GenerateCollectionForm($generateCollectionFormRequest, $xAmznIdempotencyKey, $xAmznShippingBusinessId);

        return $this->connector->send($request);
    }

    /**
     * @param  GetCollectionFormHistoryRequest  $getCollectionFormHistoryRequest  The request schema to get query collections form history API .
     * @param  ?string  $xAmznShippingBusinessId  Amazon shipping business to assume for this request. The default is AmazonShipping_UK.
     */
    public function getCollectionFormHistory(
        GetCollectionFormHistoryRequest $getCollectionFormHistoryRequest,
        ?string $xAmznShippingBusinessId = null,
    ): Response {
        $request = new GetCollectionFormHistory($getCollectionFormHistoryRequest, $xAmznShippingBusinessId);

        return $this->connector->send($request);
    }

    /**
     * @param  GetUnmanifestedShipmentsRequest  $getUnmanifestedShipmentsRequest  The request schema for the GetUnmanifestedShipmentsRequest operation.
     * @param  ?string  $xAmznShippingBusinessId  Amazon shipping business to assume for this request. The default is AmazonShipping_UK.
     */
    public function getUnmanifestedShipments(
        GetUnmanifestedShipmentsRequest $getUnmanifestedShipmentsRequest,
        ?string $xAmznShippingBusinessId = null,
    ): Response {
        $request = new GetUnmanifestedShipments($getUnmanifestedShipmentsRequest, $xAmznShippingBusinessId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $collectionFormId  collection form Id to reprint a collection.
     * @param  ?string  $xAmznShippingBusinessId  Amazon shipping business to assume for this request. The default is AmazonShipping_UK.
     */
    public function getCollectionForm(string $collectionFormId, ?string $xAmznShippingBusinessId = null): Response
    {
        $request = new GetCollectionForm($collectionFormId, $xAmznShippingBusinessId);

        return $this->connector->send($request);
    }

    /**
     * @param  array  $accessPointTypes  Access point types
     * @param  string  $countryCode  Country code for access point
     * @param  string  $postalCode  postal code for access point
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
     * @param  CreateClaimRequest  $createClaimRequest  The request schema for the CreateClaim operation
     * @param  ?string  $xAmznShippingBusinessId  Amazon shipping business to assume for this request. The default is AmazonShipping_UK.
     */
    public function createClaim(
        CreateClaimRequest $createClaimRequest,
        ?string $xAmznShippingBusinessId = null,
    ): Response {
        $request = new CreateClaim($createClaimRequest, $xAmznShippingBusinessId);

        return $this->connector->send($request);
    }
}
