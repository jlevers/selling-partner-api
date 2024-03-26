<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\ProductPricingV0\Responses\GetPricingResponse;

/**
 * getPricing
 */
class GetPricing extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $marketplaceId  A marketplace identifier. Specifies the marketplace for which prices are returned.
     * @param  string  $itemType  Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter.
     * @param  ?array  $asins  A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace.
     * @param  ?array  $skus  A list of up to twenty seller SKU values used to identify items in the given marketplace.
     * @param  ?string  $itemCondition  Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club.
     * @param  ?string  $offerType  Indicates whether to request pricing information for the seller's B2C or B2B offers. Default is B2C.
     */
    public function __construct(
        protected string $marketplaceId,
        protected string $itemType,
        protected ?array $asins = null,
        protected ?array $skus = null,
        protected ?string $itemCondition = null,
        protected ?string $offerType = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'MarketplaceId' => $this->marketplaceId,
            'ItemType' => $this->itemType,
            'Asins' => $this->asins,
            'Skus' => $this->skus,
            'ItemCondition' => $this->itemCondition,
            'OfferType' => $this->offerType,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return '/products/pricing/v0/price';
    }

    public function createDtoFromResponse(Response $response): GetPricingResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 429, 500, 503 => GetPricingResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
