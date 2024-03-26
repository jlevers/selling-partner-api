<?php

namespace SellingPartnerApi\Seller\CatalogItemsV20201201;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\CatalogItemsV20201201\Requests\GetCatalogItem;
use SellingPartnerApi\Seller\CatalogItemsV20201201\Requests\SearchCatalogItems;

class Api extends BaseResource
{
    /**
     * @param  array  $keywords  A comma-delimited list of words or item identifiers to search the Amazon catalog for.
     * @param  array  $marketplaceIds  A comma-delimited list of Amazon marketplace identifiers for the request.
     * @param  ?array  $includedData  A comma-delimited list of data sets to include in the response. Default: summaries.
     * @param  ?array  $brandNames  A comma-delimited list of brand names to limit the search to.
     * @param  ?array  $classificationIds  A comma-delimited list of classification identifiers to limit the search to.
     * @param  ?int  $pageSize  Number of results to be returned per page.
     * @param  ?string  $pageToken  A token to fetch a certain page when there are multiple pages worth of results.
     * @param  ?string  $keywordsLocale  The language the keywords are provided in. Defaults to the primary locale of the marketplace.
     * @param  ?string  $locale  Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace.
     */
    public function searchCatalogItems(
        array $keywords,
        array $marketplaceIds,
        ?array $includedData = null,
        ?array $brandNames = null,
        ?array $classificationIds = null,
        ?int $pageSize = null,
        ?string $pageToken = null,
        ?string $keywordsLocale = null,
        ?string $locale = null,
    ): Response {
        $request = new SearchCatalogItems($keywords, $marketplaceIds, $includedData, $brandNames, $classificationIds, $pageSize, $pageToken, $keywordsLocale, $locale);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $asin  The Amazon Standard Identification Number (ASIN) of the item.
     * @param  array  $marketplaceIds  A comma-delimited list of Amazon marketplace identifiers. Data sets in the response contain data only for the specified marketplaces.
     * @param  ?array  $includedData  A comma-delimited list of data sets to include in the response. Default: summaries.
     * @param  ?string  $locale  Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace.
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
