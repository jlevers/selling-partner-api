<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use SellingPartnerApi\Dto;

final class Points extends Dto
{
    /**
     * @param  ?int  $pointsNumber  The number of points.
     * @param  ?MoneyType  $pointsMonetaryValue  Currency type and monetary value. Schema for demonstrating pricing info.
     */
    public function __construct(
        public readonly ?int $pointsNumber = null,
        public readonly ?MoneyType $pointsMonetaryValue = null,
    ) {
    }
}
