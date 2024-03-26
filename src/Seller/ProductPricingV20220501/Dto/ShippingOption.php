<?php

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ShippingOption extends BaseDto
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
