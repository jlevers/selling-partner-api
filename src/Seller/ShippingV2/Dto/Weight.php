<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Weight extends BaseDto
{
    /**
     * @param  string  $unit  The unit of measurement.
     * @param  float  $value  The measurement value.
     */
    public function __construct(
        public readonly string $unit,
        public readonly float $value,
    ) {
    }
}
