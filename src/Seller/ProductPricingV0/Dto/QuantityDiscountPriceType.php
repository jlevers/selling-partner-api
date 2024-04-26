<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use SellingPartnerApi\Dto;

final class QuantityDiscountPriceType extends Dto
{
    /**
     * @param  int  $quantityTier  Indicates at what quantity this price becomes active.
     */
    public function __construct(
        public readonly int $quantityTier,
        public readonly string $quantityDiscountType,
        public readonly MoneyType $listingPrice,
    ) {
    }
}
