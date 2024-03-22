<?php

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Price extends BaseDto
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
