<?php

namespace SellingPartnerApi\Seller\CatalogItemsV20220401;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\CatalogItemsV20220401\Requests\GetCatalogItem;
use SellingPartnerApi\Seller\CatalogItemsV20220401\Requests\SearchCatalogItems;

class Api extends BaseResource
{
    /**
     * @param  array  $marketplaceIds  A comma-delimited list of Amazon marketplace identifiers. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     * @param  ?array  $identifiers  A comma-delimited list of product identifiers that you can use to search the Amazon catalog. **Note:** You cannot include `identifiers` and `keywords` in the same request.
     * @param  ?string  $identifiersType  The type of product identifiers that you can use to search the Amazon catalog. **Note:** `identifiersType` is required when `identifiers` is in the request.
     * @param  ?array  $includedData  A comma-delimited list of datasets to include in the response.
     * @param  ?string  $locale  The locale for which you want to retrieve localized summaries. Defaults to the primary locale of the marketplace.
     * @param  ?string  $sellerId  A selling partner identifier, such as a seller account or vendor code. **Note:** Required when `identifiersType` is `SKU`.
     * @param  ?array  $keywords  A comma-delimited list of keywords that you can use to search the Amazon catalog. **Note:** You cannot include `keywords` and `identifiers` in the same request.
     * @param  ?array  $brandNames  A comma-delimited list of brand names that you can use to limit the search in queries based on `keywords`. **Note:** Cannot be used with `identifiers`.
     * @param  ?array  $classificationIds  A comma-delimited list of classification identifiers that you can use to limit the search in queries based on `keywords`. **Note:** Cannot be used with `identifiers`.
     * @param  ?int  $pageSize  The number of results to include on each page.
     * @param  ?string  $pageToken  A token that you can use to fetch a specific page when there are multiple pages of results.
     * @param  ?string  $keywordsLocale  The language of the keywords that are included in queries based on `keywords`. Defaults to the primary locale of the marketplace. **Note:** Cannot be used with `identifiers`.
     */
    public function searchCatalogItems(
        array $marketplaceIds,
        ?array $identifiers = null,
        ?string $identifiersType = null,
        ?array $includedData = null,
        ?string $locale = null,
        ?string $sellerId = null,
        ?array $keywords = null,
        ?array $brandNames = null,
        ?array $classificationIds = null,
        ?int $pageSize = null,
        ?string $pageToken = null,
        ?string $keywordsLocale = null,
    ): Response {
        $request = new SearchCatalogItems($marketplaceIds, $identifiers, $identifiersType, $includedData, $locale, $sellerId, $keywords, $brandNames, $classificationIds, $pageSize, $pageToken, $keywordsLocale);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $asin  The Amazon Standard Identification Number (ASIN) of the item.
     * @param  array  $marketplaceIds  A comma-delimited list of Amazon marketplace identifiers. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     * @param  ?array  $includedData  A comma-delimited list of datasets to include in the response.
     * @param  ?string  $locale  The locale for which you want to retrieve localized summaries. Defaults to the primary locale of the marketplace.
     */
    public function getCatalogItem(
        string $asin,
        array $marketplaceIds,
        ?array $includedData = null,
        ?string $locale = null,
    ): Response {
        $request = new GetCatalogItem($asin, $marketplaceIds, $includedData, $locale);

        return $this->connector->send($request);
    }
}
