<?php

namespace SellingPartnerApi\Seller\CatalogItemsV0\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\CatalogItemsV0\Responses\ListCatalogCategoriesResponse;

/**
 * listCatalogCategories
 */
class ListCatalogCategories extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $marketplaceId  A marketplace identifier. Specifies the marketplace for the item.
     * @param  ?string  $asin  The Amazon Standard Identification Number (ASIN) of the item.
     * @param  ?string  $sellerSku  Used to identify items in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit.
     */
    public function __construct(
        protected string $marketplaceId,
        protected ?string $asin = null,
        protected ?string $sellerSku = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['MarketplaceId' => $this->marketplaceId, 'ASIN' => $this->asin, 'SellerSKU' => $this->sellerSku]);
    }

    public function resolveEndpoint(): string
    {
        return '/catalog/v0/categories';
    }

    public function createDtoFromResponse(Response $response): ListCatalogCategoriesResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 429, 500, 503 => ListCatalogCategoriesResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
