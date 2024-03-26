<?php

namespace SellingPartnerApi\Seller\ListingsItemsV20200901;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\ListingsItemsV20200901\Dto\ListingsItemPatchRequest;
use SellingPartnerApi\Seller\ListingsItemsV20200901\Dto\ListingsItemPutRequest;
use SellingPartnerApi\Seller\ListingsItemsV20200901\Requests\DeleteListingsItem;
use SellingPartnerApi\Seller\ListingsItemsV20200901\Requests\PatchListingsItem;
use SellingPartnerApi\Seller\ListingsItemsV20200901\Requests\PutListingsItem;

class Api extends BaseResource
{
    /**
     * @param  string  $sellerId  A selling partner identifier, such as a merchant account or vendor code.
     * @param  string  $sku  A selling partner provided identifier for an Amazon listing.
     * @param  ListingsItemPutRequest  $listingsItemPutRequest  The request body schema for the putListingsItem operation.
     * @param  array  $marketplaceIds  A comma-delimited list of Amazon marketplace identifiers for the request.
     * @param  ?string  $issueLocale  A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: "en_US", "fr_CA", "fr_FR". Localized messages default to "en_US" when a localization is not available in the specified locale.
     */
    public function putListingsItem(
        string $sellerId,
        string $sku,
        ListingsItemPutRequest $listingsItemPutRequest,
        array $marketplaceIds,
        ?string $issueLocale = null,
    ): Response {
        $request = new PutListingsItem($sellerId, $sku, $listingsItemPutRequest, $marketplaceIds, $issueLocale);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $sellerId  A selling partner identifier, such as a merchant account or vendor code.
     * @param  string  $sku  A selling partner provided identifier for an Amazon listing.
     * @param  array  $marketplaceIds  A comma-delimited list of Amazon marketplace identifiers for the request.
     * @param  ?string  $issueLocale  A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: "en_US", "fr_CA", "fr_FR". Localized messages default to "en_US" when a localization is not available in the specified locale.
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
     * @param  ListingsItemPatchRequest  $listingsItemPatchRequest  The request body schema for the patchListingsItem operation.
     * @param  array  $marketplaceIds  A comma-delimited list of Amazon marketplace identifiers for the request.
     * @param  ?string  $issueLocale  A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: "en_US", "fr_CA", "fr_FR". Localized messages default to "en_US" when a localization is not available in the specified locale.
     */
    public function patchListingsItem(
        string $sellerId,
        string $sku,
        ListingsItemPatchRequest $listingsItemPatchRequest,
        array $marketplaceIds,
        ?string $issueLocale = null,
    ): Response {
        $request = new PatchListingsItem($sellerId, $sku, $listingsItemPatchRequest, $marketplaceIds, $issueLocale);

        return $this->connector->send($request);
    }
}
