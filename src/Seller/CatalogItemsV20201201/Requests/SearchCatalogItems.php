<?php

namespace SellingPartnerApi\Seller\CatalogItemsV20201201\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\CatalogItemsV20201201\Responses\ErrorList;
use SellingPartnerApi\Seller\CatalogItemsV20201201\Responses\ItemSearchResults;

/**
 * searchCatalogItems
 */
class SearchCatalogItems extends Request
{
    protected Method $method = Method::GET;

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
    public function __construct(
        protected array $keywords,
        protected array $marketplaceIds,
        protected ?array $includedData = null,
        protected ?array $brandNames = null,
        protected ?array $classificationIds = null,
        protected ?int $pageSize = null,
        protected ?string $pageToken = null,
        protected ?string $keywordsLocale = null,
        protected ?string $locale = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'keywords' => $this->keywords,
            'marketplaceIds' => $this->marketplaceIds,
            'includedData' => $this->includedData,
            'brandNames' => $this->brandNames,
            'classificationIds' => $this->classificationIds,
            'pageSize' => $this->pageSize,
            'pageToken' => $this->pageToken,
            'keywordsLocale' => $this->keywordsLocale,
            'locale' => $this->locale,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return '/catalog/2020-12-01/items';
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
