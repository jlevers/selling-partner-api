<?php

namespace SellingPartnerApi\Seller\CatalogItemsV0\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\CatalogItemsV0\Responses\ListCatalogItemsResponse;

/**
 * listCatalogItems
 */
class ListCatalogItems extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $marketplaceId  A marketplace identifier. Specifies the marketplace for which items are returned.
     * @param  ?string  $query  Keyword(s) to use to search for items in the catalog. Example: 'harry potter books'.
     * @param  ?string  $queryContextId  An identifier for the context within which the given search will be performed. A marketplace might provide mechanisms for constraining a search to a subset of potential items. For example, the retail marketplace allows queries to be constrained to a specific category. The QueryContextId parameter specifies such a subset. If it is omitted, the search will be performed using the default context for the marketplace, which will typically contain the largest set of items.
     * @param  ?string  $sellerSku  Used to identify an item in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit.
     * @param  ?string  $upc  A 12-digit bar code used for retail packaging.
     * @param  ?string  $ean  A European article number that uniquely identifies the catalog item, manufacturer, and its attributes.
     * @param  ?string  $isbn  The unique commercial book identifier used to identify books internationally.
     * @param  ?string  $jan  A Japanese article number that uniquely identifies the product, manufacturer, and its attributes.
     */
    public function __construct(
        protected string $marketplaceId,
        protected ?string $query = null,
        protected ?string $queryContextId = null,
        protected ?string $sellerSku = null,
        protected ?string $upc = null,
        protected ?string $ean = null,
        protected ?string $isbn = null,
        protected ?string $jan = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'MarketplaceId' => $this->marketplaceId,
            'Query' => $this->query,
            'QueryContextId' => $this->queryContextId,
            'SellerSKU' => $this->sellerSku,
            'UPC' => $this->upc,
            'EAN' => $this->ean,
            'ISBN' => $this->isbn,
            'JAN' => $this->jan,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return '/catalog/v0/items';
    }

    public function createDtoFromResponse(Response $response): ListCatalogItemsResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 429, 500, 503 => ListCatalogItemsResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
