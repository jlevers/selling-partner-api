<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use SellingPartnerApi\Dto;

final class Price extends Dto
{
    /**
     * @param  ?MoneyType  $shippingPrice
     * @param  ?Points  $points
     */
    public function __construct(
        public readonly MoneyType $listingPrice,
        public readonly ?MoneyType $shippingPrice = null,
        public readonly ?Points $points = null,
    ) {
    }
}
