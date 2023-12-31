<?php

namespace SellingPartnerApi\Seller\CatalogItemsV20220401;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\CatalogItemsV20220401\Requests\GetCatalogItem;
use SellingPartnerApi\Seller\CatalogItemsV20220401\Requests\SearchCatalogItems;

class Api extends BaseResource
{
    /**
     * @param  array  $marketplaceIds A comma-delimited list of Amazon marketplace identifiers for the request.
     * @param  array|null  $identifiers A comma-delimited list of product identifiers to search the Amazon catalog for. **Note:** Cannot be used with `keywords`.
     * @param  string|null  $identifiersType Type of product identifiers to search the Amazon catalog for. **Note:** Required when `identifiers` are provided.
     * @param  array|null  $includedData A comma-delimited list of data sets to include in the response. Default: `summaries`.
     * @param  string|null  $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace.
     * @param  string|null  $sellerId A selling partner identifier, such as a seller account or vendor code. **Note:** Required when `identifiersType` is `SKU`.
     * @param  array|null  $keywords A comma-delimited list of words to search the Amazon catalog for. **Note:** Cannot be used with `identifiers`.
     * @param  array|null  $brandNames A comma-delimited list of brand names to limit the search for `keywords`-based queries. **Note:** Cannot be used with `identifiers`.
     * @param  array|null  $classificationIds A comma-delimited list of classification identifiers to limit the search for `keywords`-based queries. **Note:** Cannot be used with `identifiers`.
     * @param  int|null  $pageSize Number of results to be returned per page.
     * @param  string|null  $pageToken A token to fetch a certain page when there are multiple pages worth of results.
     * @param  string|null  $keywordsLocale The language of the keywords provided for `keywords`-based queries. Defaults to the primary locale of the marketplace. **Note:** Cannot be used with `identifiers`.
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
        return $this->connector->send(new SearchCatalogItems($marketplaceIds, $identifiers, $identifiersType, $includedData, $locale, $sellerId, $keywords, $brandNames, $classificationIds, $pageSize, $pageToken, $keywordsLocale));
    }

    /**
     * @param  string  $asin The Amazon Standard Identification Number (ASIN) of the item.
     * @param  array  $marketplaceIds A comma-delimited list of Amazon marketplace identifiers. Data sets in the response contain data only for the specified marketplaces.
     * @param  array|null  $includedData A comma-delimited list of data sets to include in the response. Default: `summaries`.
     * @param  string|null  $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace.
     */
    public function getCatalogItem(
        string $asin,
        array $marketplaceIds,
        ?array $includedData = null,
        ?string $locale = null,
    ): Response {
        return $this->connector->send(new GetCatalogItem($asin, $marketplaceIds, $includedData, $locale));
    }
}
