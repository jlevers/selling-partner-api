<?php

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Points extends BaseDto
{
    /**
     * @param  ?int  $pointsNumber  The number of points.
     * @param  ?MoneyType  $pointsMonetaryValue
     */
    public function __construct(
        public readonly ?int $pointsNumber = null,
        public readonly ?MoneyType $pointsMonetaryValue = null,
    ) {
    }
}
