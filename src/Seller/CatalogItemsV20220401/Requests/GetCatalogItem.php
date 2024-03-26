<?php

namespace SellingPartnerApi\Seller\CatalogItemsV20220401\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\CatalogItemsV20220401\Responses\ErrorList;
use SellingPartnerApi\Seller\CatalogItemsV20220401\Responses\Item;

/**
 * getCatalogItem
 */
class GetCatalogItem extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $asin  The Amazon Standard Identification Number (ASIN) of the item.
     * @param  array  $marketplaceIds  A comma-delimited list of Amazon marketplace identifiers. Data sets in the response contain data only for the specified marketplaces.
     * @param  ?array  $includedData  A comma-delimited list of data sets to include in the response. Default: `summaries`.
     * @param  ?string  $locale  Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace.
     */
    public function __construct(
        protected string $asin,
        protected array $marketplaceIds,
        protected ?array $includedData = null,
        protected ?string $locale = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['marketplaceIds' => $this->marketplaceIds, 'includedData' => $this->includedData, 'locale' => $this->locale]);
    }

    public function resolveEndpoint(): string
    {
        return "/catalog/2022-04-01/items/{$this->asin}";
    }

    public function createDtoFromResponse(Response $response): Item|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => Item::class,
            400, 403, 404, 413, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
