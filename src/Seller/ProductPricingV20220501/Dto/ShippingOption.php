<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use SellingPartnerApi\Dto;

final class ShippingOption extends Dto
{
    /**
     * @param  string  $shippingOptionType  The type of the shipping option.
     * @param  MoneyType  $price  Currency type and monetary value. Schema for demonstrating pricing info.
     */
    public function __construct(
        public readonly string $shippingOptionType,
        public readonly MoneyType $price,
    ) {
    }
}
