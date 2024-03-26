<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\ProductPricingV0\Responses\GetPricingResponse;

/**
 * getCompetitivePricing
 */
class GetCompetitivePricing extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $marketplaceId  A marketplace identifier. Specifies the marketplace for which prices are returned.
     * @param  string  $itemType  Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. Possible values: Asin, Sku.
     * @param  ?array  $asins  A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace.
     * @param  ?array  $skus  A list of up to twenty seller SKU values used to identify items in the given marketplace.
     * @param  ?string  $customerType  Indicates whether to request pricing information from the point of view of Consumer or Business buyers. Default is Consumer.
     */
    public function __construct(
        protected string $marketplaceId,
        protected string $itemType,
        protected ?array $asins = null,
        protected ?array $skus = null,
        protected ?string $customerType = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'MarketplaceId' => $this->marketplaceId,
            'ItemType' => $this->itemType,
            'Asins' => $this->asins,
            'Skus' => $this->skus,
            'CustomerType' => $this->customerType,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return '/products/pricing/v0/competitivePrice';
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
