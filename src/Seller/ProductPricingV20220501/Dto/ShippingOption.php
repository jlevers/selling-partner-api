<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use SellingPartnerApi\Dto;

final class ShippingOption extends Dto
{
    /**
     * @param  string  $shippingOptionType  The type of the shipping option.
     */
    public function __construct(
        public readonly string $shippingOptionType,
        public readonly MoneyType $price,
    ) {
    }
}
