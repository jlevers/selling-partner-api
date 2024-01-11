<?php

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Measurement extends BaseDto
{
    /**
     * @param  string  $unit The unit of measure for this measurement.
     * @param  float  $value The value of the measurement.
     */
    public function __construct(
        public readonly string $unit,
        public readonly float $value,
    ) {
    }
}
