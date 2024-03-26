<?php

namespace SellingPartnerApi\Seller\CatalogItemsV20220401\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\CatalogItemsV20220401\Responses\ErrorList;
use SellingPartnerApi\Seller\CatalogItemsV20220401\Responses\ItemSearchResults;

/**
 * searchCatalogItems
 */
class SearchCatalogItems extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  array  $marketplaceIds  A comma-delimited list of Amazon marketplace identifiers for the request.
     * @param  ?array  $identifiers  A comma-delimited list of product identifiers to search the Amazon catalog for. **Note:** Cannot be used with `keywords`.
     * @param  ?string  $identifiersType  Type of product identifiers to search the Amazon catalog for. **Note:** Required when `identifiers` are provided.
     * @param  ?array  $includedData  A comma-delimited list of data sets to include in the response. Default: `summaries`.
     * @param  ?string  $locale  Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace.
     * @param  ?string  $sellerId  A selling partner identifier, such as a seller account or vendor code. **Note:** Required when `identifiersType` is `SKU`.
     * @param  ?array  $keywords  A comma-delimited list of words to search the Amazon catalog for. **Note:** Cannot be used with `identifiers`.
     * @param  ?array  $brandNames  A comma-delimited list of brand names to limit the search for `keywords`-based queries. **Note:** Cannot be used with `identifiers`.
     * @param  ?array  $classificationIds  A comma-delimited list of classification identifiers to limit the search for `keywords`-based queries. **Note:** Cannot be used with `identifiers`.
     * @param  ?int  $pageSize  Number of results to be returned per page.
     * @param  ?string  $pageToken  A token to fetch a certain page when there are multiple pages worth of results.
     * @param  ?string  $keywordsLocale  The language of the keywords provided for `keywords`-based queries. Defaults to the primary locale of the marketplace. **Note:** Cannot be used with `identifiers`.
     */
    public function __construct(
        protected array $marketplaceIds,
        protected ?array $identifiers = null,
        protected ?string $identifiersType = null,
        protected ?array $includedData = null,
        protected ?string $locale = null,
        protected ?string $sellerId = null,
        protected ?array $keywords = null,
        protected ?array $brandNames = null,
        protected ?array $classificationIds = null,
        protected ?int $pageSize = null,
        protected ?string $pageToken = null,
        protected ?string $keywordsLocale = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'marketplaceIds' => $this->marketplaceIds,
            'identifiers' => $this->identifiers,
            'identifiersType' => $this->identifiersType,
            'includedData' => $this->includedData,
            'locale' => $this->locale,
            'sellerId' => $this->sellerId,
            'keywords' => $this->keywords,
            'brandNames' => $this->brandNames,
            'classificationIds' => $this->classificationIds,
            'pageSize' => $this->pageSize,
            'pageToken' => $this->pageToken,
            'keywordsLocale' => $this->keywordsLocale,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return '/catalog/2022-04-01/items';
    }

    public function createDtoFromResponse(Response $response): ItemSearchResults|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => ItemSearchResults::class,
            400, 403, 404, 413, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
