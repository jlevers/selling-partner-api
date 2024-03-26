<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\ProductPricingV0\Responses\GetOffersResponse;

/**
 * getListingOffers
 */
class GetListingOffers extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $sellerSku  Identifies an item in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit.
     * @param  string  $marketplaceId  A marketplace identifier. Specifies the marketplace for which prices are returned.
     * @param  string  $itemCondition  Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club.
     * @param  ?string  $customerType  Indicates whether to request Consumer or Business offers. Default is Consumer.
     */
    public function __construct(
        protected string $sellerSku,
        protected string $marketplaceId,
        protected string $itemCondition,
        protected ?string $customerType = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'MarketplaceId' => $this->marketplaceId,
            'ItemCondition' => $this->itemCondition,
            'CustomerType' => $this->customerType,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return "/products/pricing/v0/listings/{$this->sellerSku}/offers";
    }

    public function createDtoFromResponse(Response $response): GetOffersResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 429, 500, 503 => GetOffersResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
