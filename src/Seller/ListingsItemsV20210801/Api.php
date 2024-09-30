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
     * @param  ?array  $identifiers  A comma-delimited list of product identifiers to search for listings items by.
     *
     * **Note**:
     * 1. Required when `identifiersType` is provided.
     * @param  ?string  $identifiersType  Type of product identifiers to search for listings items by.
     *
     * **Note**:
     * 1. Required when `identifiers` is provided.
     * @param  ?int  $pageSize  Number of results to be returned per page.
     * @param  ?string  $pageToken  A token to fetch a certain page when there are multiple pages worth of results.
     * @param  ?array  $includedData  A comma-delimited list of data sets to include in the response. Default: summaries.
     * @param  ?string  $issueLocale  A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: "en_US", "fr_CA", "fr_FR". Localized messages default to "en_US" when a localization is not available in the specified locale.
     */
    public function searchListingsItems(
        string $sellerId,
        array $marketplaceIds,
        ?array $identifiers = null,
        ?string $identifiersType = null,
        ?int $pageSize = null,
        ?string $pageToken = null,
        ?array $includedData = null,
        ?string $issueLocale = null,
    ): Response {
        $request = new SearchListingsItems($sellerId, $marketplaceIds, $identifiers, $identifiersType, $pageSize, $pageToken, $includedData, $issueLocale);

        return $this->connector->send($request);
    }
}
