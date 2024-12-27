<?php

namespace SellingPartnerApi\Seller\ListingsItemsV20210801;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\ListingsItemsV20210801\Dto\ListingsItemPatchRequest;
use SellingPartnerApi\Seller\ListingsItemsV20210801\Dto\ListingsItemPutRequest;
use SellingPartnerApi\Seller\ListingsItemsV20210801\Requests\DeleteListingsItem;
use SellingPartnerApi\Seller\ListingsItemsV20210801\Requests\GetListingsItem;
use SellingPartnerApi\Seller\ListingsItemsV20210801\Requests\PatchListingsItem;
use SellingPartnerApi\Seller\ListingsItemsV20210801\Requests\PutListingsItem;
use SellingPartnerApi\Seller\ListingsItemsV20210801\Requests\SearchListingsItems;

class Api extends BaseResource
{
    /**
     * @param  string  $sellerId  A selling partner identifier, such as a merchant account or vendor code.
     * @param  string  $sku  A selling partner provided identifier for an Amazon listing.
     * @param  array  $marketplaceIds  A comma-delimited list of Amazon marketplace identifiers for the request.
     * @param  ?string  $issueLocale  A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: `en_US`, `fr_CA`, `fr_FR`. Localized messages default to `en_US` when a localization is not available in the specified locale.
     * @param  ?array  $includedData  A comma-delimited list of data sets to include in the response. Default: `summaries`.
     */
    public function getListingsItem(
        string $sellerId,
        string $sku,
        array $marketplaceIds,
        ?string $issueLocale = null,
        ?array $includedData = null,
    ): Response {
        $request = new GetListingsItem($sellerId, $sku, $marketplaceIds, $issueLocale, $includedData);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $sellerId  A selling partner identifier, such as a merchant account or vendor code.
     * @param  string  $sku  A selling partner provided identifier for an Amazon listing.
     * @param  ListingsItemPutRequest  $listingsItemPutRequest  The request body schema for the `putListingsItem` operation.
     * @param  array  $marketplaceIds  A comma-delimited list of Amazon marketplace identifiers for the request.
     * @param  ?array  $includedData  A comma-delimited list of data sets to include in the response. Default: `issues`.
     * @param  ?string  $mode  The mode of operation for the request.
     * @param  ?string  $issueLocale  A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: `en_US`, `fr_CA`, `fr_FR`. Localized messages default to `en_US` when a localization is not available in the specified locale.
     */
    public function putListingsItem(
        string $sellerId,
        string $sku,
        ListingsItemPutRequest $listingsItemPutRequest,
        array $marketplaceIds,
        ?array $includedData = null,
        ?string $mode = null,
        ?string $issueLocale = null,
    ): Response {
        $request = new PutListingsItem($sellerId, $sku, $listingsItemPutRequest, $marketplaceIds, $includedData, $mode, $issueLocale);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $sellerId  A selling partner identifier, such as a merchant account or vendor code.
     * @param  string  $sku  A selling partner provided identifier for an Amazon listing.
     * @param  array  $marketplaceIds  A comma-delimited list of Amazon marketplace identifiers for the request.
     * @param  ?string  $issueLocale  A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: `en_US`, `fr_CA`, `fr_FR`. Localized messages default to `en_US` when a localization is not available in the specified locale.
     */
    public function deleteListingsItem(
        string $sellerId,
        string $sku,
        array $marketplaceIds,
        ?string $issueLocale = null,
    ): Response {
        $request = new DeleteListingsItem($sellerId, $sku, $marketplaceIds, $issueLocale);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $sellerId  A selling partner identifier, such as a merchant account or vendor code.
     * @param  string  $sku  A selling partner provided identifier for an Amazon listing.
     * @param  ListingsItemPatchRequest  $listingsItemPatchRequest  The request body schema for the `patchListingsItem` operation.
     * @param  array  $marketplaceIds  A comma-delimited list of Amazon marketplace identifiers for the request.
     * @param  ?array  $includedData  A comma-delimited list of data sets to include in the response. Default: `issues`.
     * @param  ?string  $mode  The mode of operation for the request.
     * @param  ?string  $issueLocale  A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: `en_US`, `fr_CA`, `fr_FR`. Localized messages default to `en_US` when a localization is not available in the specified locale.
     */
    public function patchListingsItem(
        string $sellerId,
        string $sku,
        ListingsItemPatchRequest $listingsItemPatchRequest,
        array $marketplaceIds,
        ?array $includedData = null,
        ?string $mode = null,
        ?string $issueLocale = null,
    ): Response {
        $request = new PatchListingsItem($sellerId, $sku, $listingsItemPatchRequest, $marketplaceIds, $includedData, $mode, $issueLocale);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $sellerId  A selling partner identifier, such as a merchant account or vendor code.
     * @param  array  $marketplaceIds  A comma-delimited list of Amazon marketplace identifiers for the request.
     * @param  ?string  $issueLocale  A locale that is used to localize issues. When not provided, the default language code of the first marketplace is used. Examples: "en_US", "fr_CA", "fr_FR". When a localization is not available in the specified locale, localized messages default to "en_US".
     * @param  ?array  $includedData  A comma-delimited list of datasets that you want to include in the response. Default: `summaries`.
     * @param  ?array  $identifiers  A comma-delimited list of product identifiers that you can use to search for listings items.
     *
     * **Note**:
     * 1. This is required when you specify `identifiersType`.
     * 2. You cannot use 'identifiers' if you specify `variationParentSku` or `packageHierarchySku`.
     * @param  ?string  $identifiersType  A type of product identifiers that you can use to search for listings items.
     *
     * **Note**:
     * This is required when `identifiers` is provided.
     * @param  ?string  $variationParentSku  Filters results to include listing items that are variation children of the specified SKU.
     *
     * **Note**: You cannot use `variationParentSku` if you include `identifiers` or `packageHierarchySku` in your request.
     * @param  ?string  $packageHierarchySku  Filter results to include listing items that contain or are contained by the specified SKU.
     *
     * **Note**: You cannot use `packageHierarchySku` if you include `identifiers` or `variationParentSku` in your request.
     * @param  ?\DateTimeInterface  $createdAfter  A date-time that is used to filter listing items. The response includes listings items that were created at or after this time. Values are in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format.
     * @param  ?\DateTimeInterface  $createdBefore  A date-time that is used to filter listing items. The response includes listings items that were created at or before this time. Values are in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format.
     * @param  ?\DateTimeInterface  $lastUpdatedAfter  A date-time that is used to filter listing items. The response includes listings items that were last updated at or after this time. Values are in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format.
     * @param  ?\DateTimeInterface  $lastUpdatedBefore  A date-time that is used to filter listing items. The response includes listings items that were last updated at or before this time. Values are in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format.
     * @param  ?array  $withIssueSeverity  Filter results to include only listing items that have issues that match one or more of the specified severity levels.
     * @param  ?array  $withStatus  Filter results to include only listing items that have the specified status.
     * @param  ?array  $withoutStatus  Filter results to include only listing items that don't contain the specified statuses.
     * @param  ?string  $sortBy  An attribute by which to sort the returned listing items.
     * @param  ?string  $sortOrder  The order in which to sort the result items.
     * @param  ?int  $pageSize  The number of results that you want to include on each page.
     * @param  ?string  $pageToken  A token that you can use to fetch a specific page when there are multiple pages of results.
     */
    public function searchListingsItems(
        string $sellerId,
        array $marketplaceIds,
        ?string $issueLocale = null,
        ?array $includedData = null,
        ?array $identifiers = null,
        ?string $identifiersType = null,
        ?string $variationParentSku = null,
        ?string $packageHierarchySku = null,
        ?\DateTimeInterface $createdAfter = null,
        ?\DateTimeInterface $createdBefore = null,
        ?\DateTimeInterface $lastUpdatedAfter = null,
        ?\DateTimeInterface $lastUpdatedBefore = null,
        ?array $withIssueSeverity = null,
        ?array $withStatus = null,
        ?array $withoutStatus = null,
        ?string $sortBy = null,
        ?string $sortOrder = null,
        ?int $pageSize = null,
        ?string $pageToken = null,
    ): Response {
        $request = new SearchListingsItems($sellerId, $marketplaceIds, $issueLocale, $includedData, $identifiers, $identifiersType, $variationParentSku, $packageHierarchySku, $createdAfter, $createdBefore, $lastUpdatedAfter, $lastUpdatedBefore, $withIssueSeverity, $withStatus, $withoutStatus, $sortBy, $sortOrder, $pageSize, $pageToken);

        return $this->connector->send($request);
    }
}
