<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class QuantityDiscountPriceType extends BaseDto
{
    /**
     * @param  int  $quantityTier Indicates at what quantity this price becomes active.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly int $quantityTier,
        public readonly string $quantityDiscountType,
        public readonly MoneyType $listingPrice,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
