<?php

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Currency extends BaseDto
{
    /**
     * @param  float  $value  The amount of currency.
     * @param  string  $unit  A 3-character currency code.
     */
    public function __construct(
        public readonly float $value,
        public readonly string $unit,
    ) {
    }
}
