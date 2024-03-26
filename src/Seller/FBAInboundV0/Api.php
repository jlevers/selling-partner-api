<?php

namespace SellingPartnerApi\Seller\FBAInboundV0;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\FBAInboundV0\Dto\CreateInboundShipmentPlanRequest;
use SellingPartnerApi\Seller\FBAInboundV0\Dto\InboundShipmentRequest;
use SellingPartnerApi\Seller\FBAInboundV0\Dto\PutTransportDetailsRequest;
use SellingPartnerApi\Seller\FBAInboundV0\Requests\ConfirmPreorder;
use SellingPartnerApi\Seller\FBAInboundV0\Requests\ConfirmTransport;
use SellingPartnerApi\Seller\FBAInboundV0\Requests\CreateInboundShipment;
use SellingPartnerApi\Seller\FBAInboundV0\Requests\CreateInboundShipmentPlan;
use SellingPartnerApi\Seller\FBAInboundV0\Requests\EstimateTransport;
use SellingPartnerApi\Seller\FBAInboundV0\Requests\GetBillOfLading;
use SellingPartnerApi\Seller\FBAInboundV0\Requests\GetInboundGuidance;
use SellingPartnerApi\Seller\FBAInboundV0\Requests\GetLabels;
use SellingPartnerApi\Seller\FBAInboundV0\Requests\GetPreorderInfo;
use SellingPartnerApi\Seller\FBAInboundV0\Requests\GetPrepInstructions;
use SellingPartnerApi\Seller\FBAInboundV0\Requests\GetShipmentItems;
use SellingPartnerApi\Seller\FBAInboundV0\Requests\GetShipmentItemsByShipmentId;
use SellingPartnerApi\Seller\FBAInboundV0\Requests\GetShipments;
use SellingPartnerApi\Seller\FBAInboundV0\Requests\GetTransportDetails;
use SellingPartnerApi\Seller\FBAInboundV0\Requests\PutTransportDetails;
use SellingPartnerApi\Seller\FBAInboundV0\Requests\UpdateInboundShipment;
use SellingPartnerApi\Seller\FBAInboundV0\Requests\VoidTransport;

class Api extends BaseResource
{
    /**
     * @param  string  $marketplaceId  A marketplace identifier. Specifies the marketplace where the product would be stored.
     * @param  ?array  $sellerSkuList  A list of SellerSKU values. Used to identify items for which you want inbound guidance for shipment to Amazon's fulfillment network. Note: SellerSKU is qualified by the SellerId, which is included with every Selling Partner API operation that you submit. If you specify a SellerSKU that identifies a variation parent ASIN, this operation returns an error. A variation parent ASIN represents a generic product that cannot be sold. Variation child ASINs represent products that have specific characteristics (such as size and color) and can be sold.
     * @param  ?array  $asinList  A list of ASIN values. Used to identify items for which you want inbound guidance for shipment to Amazon's fulfillment network. Note: If you specify a ASIN that identifies a variation parent ASIN, this operation returns an error. A variation parent ASIN represents a generic product that cannot be sold. Variation child ASINs represent products that have specific characteristics (such as size and color) and can be sold.
     */
    public function getInboundGuidance(
        string $marketplaceId,
        ?array $sellerSkuList = null,
        ?array $asinList = null,
    ): Response {
        $request = new GetInboundGuidance($marketplaceId, $sellerSkuList, $asinList);

        return $this->connector->send($request);
    }

    /**
     * @param  CreateInboundShipmentPlanRequest  $createInboundShipmentPlanRequest  The request schema for the createInboundShipmentPlan operation.
     */
    public function createInboundShipmentPlan(
        CreateInboundShipmentPlanRequest $createInboundShipmentPlanRequest,
    ): Response {
        $request = new CreateInboundShipmentPlan($createInboundShipmentPlanRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $shipmentId  A shipment identifier originally returned by the createInboundShipmentPlan operation.
     * @param  InboundShipmentRequest  $inboundShipmentRequest  The request schema for an inbound shipment.
     */
    public function updateInboundShipment(string $shipmentId, InboundShipmentRequest $inboundShipmentRequest): Response
    {
        $request = new UpdateInboundShipment($shipmentId, $inboundShipmentRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $shipmentId  A shipment identifier originally returned by the createInboundShipmentPlan operation.
     * @param  InboundShipmentRequest  $inboundShipmentRequest  The request schema for an inbound shipment.
     */
    public function createInboundShipment(string $shipmentId, InboundShipmentRequest $inboundShipmentRequest): Response
    {
        $request = new CreateInboundShipment($shipmentId, $inboundShipmentRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $shipmentId  A shipment identifier originally returned by the createInboundShipmentPlan operation.
     * @param  string  $marketplaceId  A marketplace identifier. Specifies the marketplace the shipment is tied to.
     */
    public function getPreorderInfo(string $shipmentId, string $marketplaceId): Response
    {
        $request = new GetPreorderInfo($shipmentId, $marketplaceId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $shipmentId  A shipment identifier originally returned by the createInboundShipmentPlan operation.
     * @param  DateTime  $needByDate  Date that the shipment must arrive at the Amazon fulfillment center to avoid delivery promise breaks for pre-ordered items. Must be in YYYY-MM-DD format. The response to the getPreorderInfo operation returns this value.
     * @param  string  $marketplaceId  A marketplace identifier. Specifies the marketplace the shipment is tied to.
     */
    public function confirmPreorder(string $shipmentId, \DateTime $needByDate, string $marketplaceId): Response
    {
        $request = new ConfirmPreorder($shipmentId, $needByDate, $marketplaceId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $shipToCountryCode  The country code of the country to which the items will be shipped. Note that labeling requirements and item preparation instructions can vary by country.
     * @param  ?array  $sellerSkuList  A list of SellerSKU values. Used to identify items for which you want labeling requirements and item preparation instructions for shipment to Amazon's fulfillment network. The SellerSKU is qualified by the Seller ID, which is included with every call to the Seller Partner API.
     *
     * Note: Include seller SKUs that you have used to list items on Amazon's retail website. If you include a seller SKU that you have never used to list an item on Amazon's retail website, the seller SKU is returned in the InvalidSKUList property in the response.
     * @param  ?array  $asinList  A list of ASIN values. Used to identify items for which you want item preparation instructions to help with item sourcing decisions.
     *
     * Note: ASINs must be included in the product catalog for at least one of the marketplaces that the seller  participates in. Any ASIN that is not included in the product catalog for at least one of the marketplaces that the seller participates in is returned in the InvalidASINList property in the response. You can find out which marketplaces a seller participates in by calling the getMarketplaceParticipations operation in the Selling Partner API for Sellers.
     */
    public function getPrepInstructions(
        string $shipToCountryCode,
        ?array $sellerSkuList = null,
        ?array $asinList = null,
    ): Response {
        $request = new GetPrepInstructions($shipToCountryCode, $sellerSkuList, $asinList);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $shipmentId  A shipment identifier originally returned by the createInboundShipmentPlan operation.
     */
    public function getTransportDetails(string $shipmentId): Response
    {
        $request = new GetTransportDetails($shipmentId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $shipmentId  A shipment identifier originally returned by the createInboundShipmentPlan operation.
     * @param  PutTransportDetailsRequest  $putTransportDetailsRequest  The request schema for a putTransportDetails operation.
     */
    public function putTransportDetails(
        string $shipmentId,
        PutTransportDetailsRequest $putTransportDetailsRequest,
    ): Response {
        $request = new PutTransportDetails($shipmentId, $putTransportDetailsRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $shipmentId  A shipment identifier originally returned by the createInboundShipmentPlan operation.
     */
    public function voidTransport(string $shipmentId): Response
    {
        $request = new VoidTransport($shipmentId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $shipmentId  A shipment identifier originally returned by the createInboundShipmentPlan operation.
     */
    public function estimateTransport(string $shipmentId): Response
    {
        $request = new EstimateTransport($shipmentId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $shipmentId  A shipment identifier originally returned by the createInboundShipmentPlan operation.
     */
    public function confirmTransport(string $shipmentId): Response
    {
        $request = new ConfirmTransport($shipmentId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $shipmentId  A shipment identifier originally returned by the createInboundShipmentPlan operation.
     * @param  string  $pageType  The page type to use to print the labels. Submitting a PageType value that is not supported in your marketplace returns an error.
     * @param  string  $labelType  The type of labels requested.
     * @param  ?int  $numberOfPackages  The number of packages in the shipment.
     * @param  ?array  $packageLabelsToPrint  A list of identifiers that specify packages for which you want package labels printed.
     *
     * Must match CartonId values previously passed using the FBA Inbound Shipment Carton Information Feed. If not, the operation returns the IncorrectPackageIdentifier error code.
     * @param  ?int  $numberOfPallets  The number of pallets in the shipment. This returns four identical labels for each pallet.
     * @param  ?int  $pageSize  The page size for paginating through the total packages' labels. This is a required parameter for Non-Partnered LTL Shipments. Max value:1000.
     * @param  ?int  $pageStartIndex  The page start index for paginating through the total packages' labels. This is a required parameter for Non-Partnered LTL Shipments.
     */
    public function getLabels(
        string $shipmentId,
        string $pageType,
        string $labelType,
        ?int $numberOfPackages = null,
        ?array $packageLabelsToPrint = null,
        ?int $numberOfPallets = null,
        ?int $pageSize = null,
        ?int $pageStartIndex = null,
    ): Response {
        $request = new GetLabels($shipmentId, $pageType, $labelType, $numberOfPackages, $packageLabelsToPrint, $numberOfPallets, $pageSize, $pageStartIndex);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $shipmentId  A shipment identifier originally returned by the createInboundShipmentPlan operation.
     */
    public function getBillOfLading(string $shipmentId): Response
    {
        $request = new GetBillOfLading($shipmentId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $queryType  Indicates whether shipments are returned using shipment information (by providing the ShipmentStatusList or ShipmentIdList parameters), using a date range (by providing the LastUpdatedAfter and LastUpdatedBefore parameters), or by using NextToken to continue returning items specified in a previous request.
     * @param  string  $marketplaceId  A marketplace identifier. Specifies the marketplace where the product would be stored.
     * @param  ?array  $shipmentStatusList  A list of ShipmentStatus values. Used to select shipments with a current status that matches the status values that you specify.
     * @param  ?array  $shipmentIdList  A list of shipment IDs used to select the shipments that you want. If both ShipmentStatusList and ShipmentIdList are specified, only shipments that match both parameters are returned.
     * @param  ?DateTime  $lastUpdatedAfter  A date used for selecting inbound shipments that were last updated after (or at) a specified time. The selection includes updates made by Amazon and by the seller.
     * @param  ?DateTime  $lastUpdatedBefore  A date used for selecting inbound shipments that were last updated before (or at) a specified time. The selection includes updates made by Amazon and by the seller.
     * @param  ?string  $nextToken  A string token returned in the response to your previous request.
     */
    public function getShipments(
        string $queryType,
        string $marketplaceId,
        ?array $shipmentStatusList = null,
        ?array $shipmentIdList = null,
        ?\DateTime $lastUpdatedAfter = null,
        ?\DateTime $lastUpdatedBefore = null,
        ?string $nextToken = null,
    ): Response {
        $request = new GetShipments($queryType, $marketplaceId, $shipmentStatusList, $shipmentIdList, $lastUpdatedAfter, $lastUpdatedBefore, $nextToken);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $shipmentId  A shipment identifier used for selecting items in a specific inbound shipment.
     * @param  string  $marketplaceId  A marketplace identifier. Specifies the marketplace where the product would be stored.
     */
    public function getShipmentItemsByShipmentId(string $shipmentId, string $marketplaceId): Response
    {
        $request = new GetShipmentItemsByShipmentId($shipmentId, $marketplaceId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $queryType  Indicates whether items are returned using a date range (by providing the LastUpdatedAfter and LastUpdatedBefore parameters), or using NextToken, which continues returning items specified in a previous request.
     * @param  string  $marketplaceId  A marketplace identifier. Specifies the marketplace where the product would be stored.
     * @param  ?DateTime  $lastUpdatedAfter  A date used for selecting inbound shipment items that were last updated after (or at) a specified time. The selection includes updates made by Amazon and by the seller.
     * @param  ?DateTime  $lastUpdatedBefore  A date used for selecting inbound shipment items that were last updated before (or at) a specified time. The selection includes updates made by Amazon and by the seller.
     * @param  ?string  $nextToken  A string token returned in the response to your previous request.
     */
    public function getShipmentItems(
        string $queryType,
        string $marketplaceId,
        ?\DateTime $lastUpdatedAfter = null,
        ?\DateTime $lastUpdatedBefore = null,
        ?string $nextToken = null,
    ): Response {
        $request = new GetShipmentItems($queryType, $marketplaceId, $lastUpdatedAfter, $lastUpdatedBefore, $nextToken);

        return $this->connector->send($request);
    }
}
