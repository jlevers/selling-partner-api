<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use SellingPartnerApi\Dto;

final class FeaturedOfferExpectedPrice extends Dto
{
    /**
     * @param  MoneyType  $listingPrice  Currency type and monetary value. Schema for demonstrating pricing info.
     * @param  ?Points  $points  The number of Amazon Points offered with the purchase of an item, and their monetary value.
     */
    public function __construct(
        public readonly MoneyType $listingPrice,
        public readonly ?Points $points = null,
    ) {
    }
}
