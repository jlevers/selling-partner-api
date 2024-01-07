<?php

namespace SellingPartnerApi\Seller\ProductFeesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Points extends BaseDto
{
    /**
     * @param  ?int  $pointsNumber
     * @param  ?MoneyType  $pointsMonetaryValue
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?int $pointsNumber = null,
        public readonly ?MoneyType $pointsMonetaryValue = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
