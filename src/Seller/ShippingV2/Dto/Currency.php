<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Currency extends BaseDto
{
    /**
     * @param  float  $value  The monetary value.
     * @param  string  $unit  The ISO 4217 format 3-character currency code.
     */
    public function __construct(
        public readonly float $value,
        public readonly string $unit,
    ) {
    }
}
