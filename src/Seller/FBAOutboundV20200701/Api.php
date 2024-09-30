<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Dto\CreateFulfillmentOrderRequest;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Dto\CreateFulfillmentReturnRequest;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Dto\GetDeliveryOffersRequest;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Dto\GetFulfillmentPreviewRequest;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Dto\SubmitFulfillmentOrderStatusUpdateRequest;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Dto\UpdateFulfillmentOrderRequest;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Requests\CancelFulfillmentOrder;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Requests\CreateFulfillmentOrder;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Requests\CreateFulfillmentReturn;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Requests\DeliveryOffers;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Requests\GetFeatureInventory;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Requests\GetFeatures;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Requests\GetFeatureSku;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Requests\GetFulfillmentOrder;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Requests\GetFulfillmentPreview;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Requests\GetPackageTrackingDetails;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Requests\ListAllFulfillmentOrders;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Requests\ListReturnReasonCodes;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Requests\SubmitFulfillmentOrderStatusUpdate;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Requests\UpdateFulfillmentOrder;

class Api extends BaseResource
{
    /**
     * @param  GetFulfillmentPreviewRequest  $getFulfillmentPreviewRequest  The request body schema for the `getFulfillmentPreview` operation.
     */
    public function getFulfillmentPreview(GetFulfillmentPreviewRequest $getFulfillmentPreviewRequest): Response
    {
        $request = new GetFulfillmentPreview($getFulfillmentPreviewRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  GetDeliveryOffersRequest  $getDeliveryOffersRequest  The request body schema for the getDeliveryOffers operation.
     */
    public function deliveryOffers(GetDeliveryOffersRequest $getDeliveryOffersRequest): Response
    {
        $request = new DeliveryOffers($getDeliveryOffersRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  ?\DateTimeInterface  $queryStartDate  A date used to select fulfillment orders that were last updated after (or at) a specified time. An update is defined as any change in fulfillment order status, including the creation of a new fulfillment order.
     * @param  ?string  $nextToken  A string token returned in the response to your previous request.
     */
    public function listAllFulfillmentOrders(
        ?\DateTimeInterface $queryStartDate = null,
        ?string $nextToken = null,
    ): Response {
        $request = new ListAllFulfillmentOrders($queryStartDate, $nextToken);

        return $this->connector->send($request);
    }

    /**
     * @param  CreateFulfillmentOrderRequest  $createFulfillmentOrderRequest  The request body schema for the `createFulfillmentOrder` operation.
     */
    public function createFulfillmentOrder(CreateFulfillmentOrderRequest $createFulfillmentOrderRequest): Response
    {
        $request = new CreateFulfillmentOrder($createFulfillmentOrderRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  int  $packageNumber  The unencrypted package identifier returned by the `getFulfillmentOrder` operation.
     */
    public function getPackageTrackingDetails(int $packageNumber): Response
    {
        $request = new GetPackageTrackingDetails($packageNumber);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $sellerSku  The seller SKU for which return reason codes are required.
     * @param  ?string  $marketplaceId  The marketplace for which the seller wants return reason codes.
     * @param  ?string  $sellerFulfillmentOrderId  The identifier assigned to the item by the seller when the fulfillment order was created. The service uses this value to determine the marketplace for which the seller wants return reason codes.
     * @param  ?string  $language  The language that the `TranslatedDescription` property of the `ReasonCodeDetails` response object should be translated into.
     */
    public function listReturnReasonCodes(
        string $sellerSku,
        ?string $marketplaceId = null,
        ?string $sellerFulfillmentOrderId = null,
        ?string $language = null,
    ): Response {
        $request = new ListReturnReasonCodes($sellerSku, $marketplaceId, $sellerFulfillmentOrderId, $language);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $sellerFulfillmentOrderId  An identifier assigned by the seller to the fulfillment order at the time it was created. The seller uses their own records to find the correct `SellerFulfillmentOrderId` value based on the buyer's request to return items.
     * @param  CreateFulfillmentReturnRequest  $createFulfillmentReturnRequest  The `createFulfillmentReturn` operation creates a fulfillment return for items that were fulfilled using the `createFulfillmentOrder` operation. For calls to `createFulfillmentReturn`, you must include `ReturnReasonCode` values returned by a previous call to the `listReturnReasonCodes` operation.
     */
    public function createFulfillmentReturn(
        string $sellerFulfillmentOrderId,
        CreateFulfillmentReturnRequest $createFulfillmentReturnRequest,
    ): Response {
        $request = new CreateFulfillmentReturn($sellerFulfillmentOrderId, $createFulfillmentReturnRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $sellerFulfillmentOrderId  The identifier assigned to the item by the seller when the fulfillment order was created.
     */
    public function getFulfillmentOrder(string $sellerFulfillmentOrderId): Response
    {
        $request = new GetFulfillmentOrder($sellerFulfillmentOrderId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $sellerFulfillmentOrderId  The identifier assigned to the item by the seller when the fulfillment order was created.
     * @param  UpdateFulfillmentOrderRequest  $updateFulfillmentOrderRequest  The request body schema for the `updateFulfillmentOrder` operation.
     */
    public function updateFulfillmentOrder(
        string $sellerFulfillmentOrderId,
        UpdateFulfillmentOrderRequest $updateFulfillmentOrderRequest,
    ): Response {
        $request = new UpdateFulfillmentOrder($sellerFulfillmentOrderId, $updateFulfillmentOrderRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $sellerFulfillmentOrderId  The identifier assigned to the item by the seller when the fulfillment order was created.
     */
    public function cancelFulfillmentOrder(string $sellerFulfillmentOrderId): Response
    {
        $request = new CancelFulfillmentOrder($sellerFulfillmentOrderId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $sellerFulfillmentOrderId  The identifier assigned to the item by the seller when the fulfillment order was created.
     * @param  SubmitFulfillmentOrderStatusUpdateRequest  $submitFulfillmentOrderStatusUpdateRequest  The request body schema for the `submitFulfillmentOrderStatusUpdate` operation.
     */
    public function submitFulfillmentOrderStatusUpdate(
        string $sellerFulfillmentOrderId,
        SubmitFulfillmentOrderStatusUpdateRequest $submitFulfillmentOrderStatusUpdateRequest,
    ): Response {
        $request = new SubmitFulfillmentOrderStatusUpdate($sellerFulfillmentOrderId, $submitFulfillmentOrderStatusUpdateRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $marketplaceId  The marketplace for which to return the list of features.
     */
    public function getFeatures(string $marketplaceId): Response
    {
        $request = new GetFeatures($marketplaceId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $featureName  The name of the feature for which to return a list of eligible inventory.
     * @param  string  $marketplaceId  The marketplace for which to return a list of the inventory that is eligible for the specified feature.
     * @param  ?string  $nextToken  A string token returned in the response to your previous request that is used to return the next response page. A value of null will return the first page.
     * @param  ?\DateTimeInterface  $queryStartDate  A date that you can use to select inventory that has been updated since a specified date. An update is defined as any change in feature-enabled inventory availability. The date must be in the format yyyy-MM-ddTHH:mm:ss.sssZ
     */
    public function getFeatureInventory(
        string $featureName,
        string $marketplaceId,
        ?string $nextToken = null,
        ?\DateTimeInterface $queryStartDate = null,
    ): Response {
        $request = new GetFeatureInventory($featureName, $marketplaceId, $nextToken, $queryStartDate);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $featureName  The name of the feature.
     * @param  string  $sellerSku  Used to identify an item in the given marketplace. `SellerSKU` is qualified by the seller's `SellerId`, which is included with every operation that you submit.
     * @param  string  $marketplaceId  The marketplace for which to return the count.
     */
    public function getFeatureSku(string $featureName, string $sellerSku, string $marketplaceId): Response
    {
        $request = new GetFeatureSku($featureName, $sellerSku, $marketplaceId);

        return $this->connector->send($request);
    }
}
