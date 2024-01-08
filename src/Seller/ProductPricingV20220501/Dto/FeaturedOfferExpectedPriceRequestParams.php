<?php

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FeaturedOfferExpectedPriceRequestParams extends BaseDto
{
    /**
     * @param  string  $marketplaceId A marketplace identifier. Specifies the marketplace for which data is returned.
     * @param  string  $sku The seller SKU of the item.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly string $sku,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
