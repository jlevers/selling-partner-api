<?php

namespace SellingPartnerApi\Seller\FBAInboundV0;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\FBAInboundV0\Requests\GetBillOfLading;
use SellingPartnerApi\Seller\FBAInboundV0\Requests\GetLabels;
use SellingPartnerApi\Seller\FBAInboundV0\Requests\GetPrepInstructions;
use SellingPartnerApi\Seller\FBAInboundV0\Requests\GetShipmentItems;
use SellingPartnerApi\Seller\FBAInboundV0\Requests\GetShipmentItemsByShipmentId;
use SellingPartnerApi\Seller\FBAInboundV0\Requests\GetShipments;

class Api extends BaseResource
{
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
     * @param  string  $pageType  The page type to use to print the labels. Submitting a PageType value that is not supported in your marketplace returns an error.
     * @param  string  $labelType  The type of labels requested.
     * @param  ?int  $numberOfPackages  The number of packages in the shipment.
     * @param  ?array  $packageLabelsToPrint  A list of identifiers that specify packages for which you want package labels printed.
     *
     * If you provide box content information with the [FBA Inbound Shipment Carton Information Feed](https://developer-docs.amazon.com/sp-api/docs/fulfillment-by-amazon-feed-type-values#fba-inbound-shipment-carton-information-feed), then `PackageLabelsToPrint` must match the `CartonId` values you provide through that feed. If you provide box content information with the Fulfillment Inbound API v2024-03-20, then `PackageLabelsToPrint` must match the `boxID` values from the [`listShipmentBoxes`](https://developer-docs.amazon.com/sp-api/reference/listshipmentboxes) response. If these values do not match as required, the operation returns the `IncorrectPackageIdentifier` error code.
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
     * @param  ?\DateTimeInterface  $lastUpdatedAfter  A date used for selecting inbound shipments that were last updated after (or at) a specified time. The selection includes updates made by Amazon and by the seller.
     * @param  ?\DateTimeInterface  $lastUpdatedBefore  A date used for selecting inbound shipments that were last updated before (or at) a specified time. The selection includes updates made by Amazon and by the seller.
     * @param  ?string  $nextToken  A string token returned in the response to your previous request.
     */
    public function getShipments(
        string $queryType,
        string $marketplaceId,
        ?array $shipmentStatusList = null,
        ?array $shipmentIdList = null,
        ?\DateTimeInterface $lastUpdatedAfter = null,
        ?\DateTimeInterface $lastUpdatedBefore = null,
        ?string $nextToken = null,
    ): Response {
        $request = new GetShipments($queryType, $marketplaceId, $shipmentStatusList, $shipmentIdList, $lastUpdatedAfter, $lastUpdatedBefore, $nextToken);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $shipmentId  A shipment identifier used for selecting items in a specific inbound shipment.
     * @param  ?string  $marketplaceId  Deprecated. Do not use.
     */
    public function getShipmentItemsByShipmentId(string $shipmentId, ?string $marketplaceId = null): Response
    {
        $request = new GetShipmentItemsByShipmentId($shipmentId, $marketplaceId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $queryType  Indicates whether items are returned using a date range (by providing the LastUpdatedAfter and LastUpdatedBefore parameters), or using NextToken, which continues returning items specified in a previous request.
     * @param  string  $marketplaceId  A marketplace identifier. Specifies the marketplace where the product would be stored.
     * @param  ?\DateTimeInterface  $lastUpdatedAfter  A date used for selecting inbound shipment items that were last updated after (or at) a specified time. The selection includes updates made by Amazon and by the seller.
     * @param  ?\DateTimeInterface  $lastUpdatedBefore  A date used for selecting inbound shipment items that were last updated before (or at) a specified time. The selection includes updates made by Amazon and by the seller.
     * @param  ?string  $nextToken  A string token returned in the response to your previous request.
     */
    public function getShipmentItems(
        string $queryType,
        string $marketplaceId,
        ?\DateTimeInterface $lastUpdatedAfter = null,
        ?\DateTimeInterface $lastUpdatedBefore = null,
        ?string $nextToken = null,
    ): Response {
        $request = new GetShipmentItems($queryType, $marketplaceId, $lastUpdatedAfter, $lastUpdatedBefore, $nextToken);

        return $this->connector->send($request);
    }
}
