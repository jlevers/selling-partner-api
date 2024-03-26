<?php

namespace SellingPartnerApi\Seller\CatalogItemsV0\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\CatalogItemsV0\Responses\GetCatalogItemResponse;

/**
 * getCatalogItem
 */
class GetCatalogItem extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $asin  The Amazon Standard Identification Number (ASIN) of the item.
     * @param  string  $marketplaceId  A marketplace identifier. Specifies the marketplace for the item.
     */
    public function __construct(
        protected string $asin,
        protected string $marketplaceId,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['MarketplaceId' => $this->marketplaceId]);
    }

    public function resolveEndpoint(): string
    {
        return "/catalog/v0/items/{$this->asin}";
    }

    public function createDtoFromResponse(Response $response): GetCatalogItemResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 429, 500, 503 => GetCatalogItemResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
