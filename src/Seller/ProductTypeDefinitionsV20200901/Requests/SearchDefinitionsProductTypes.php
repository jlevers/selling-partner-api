<?php

namespace SellingPartnerApi\Seller\ProductTypeDefinitionsV20200901\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\ProductTypeDefinitionsV20200901\Responses\ErrorList;
use SellingPartnerApi\Seller\ProductTypeDefinitionsV20200901\Responses\ProductTypeList;

/**
 * searchDefinitionsProductTypes
 */
class SearchDefinitionsProductTypes extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  array  $marketplaceIds  A comma-delimited list of Amazon marketplace identifiers for the request.
     * @param  ?array  $keywords  A comma-delimited list of keywords to search product types. **Note:** Cannot be used with `itemName`.
     * @param  ?string  $itemName  The title of the ASIN to get the product type recommendation. **Note:** Cannot be used with `keywords`.
     * @param  ?string  $locale  The locale for the display names in the response. Defaults to the primary locale of the marketplace.
     * @param  ?string  $searchLocale  The locale used for the `keywords` and `itemName` parameters. Defaults to the primary locale of the marketplace.
     */
    public function __construct(
        protected array $marketplaceIds,
        protected ?array $keywords = null,
        protected ?string $itemName = null,
        protected ?string $locale = null,
        protected ?string $searchLocale = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'marketplaceIds' => $this->marketplaceIds,
            'keywords' => $this->keywords,
            'itemName' => $this->itemName,
            'locale' => $this->locale,
            'searchLocale' => $this->searchLocale,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return '/definitions/2020-09-01/productTypes';
    }

    public function createDtoFromResponse(Response $response): ProductTypeList|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => ProductTypeList::class,
            400, 403, 404, 413, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
