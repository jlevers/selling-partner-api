<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class IntegerWithUnits extends BaseDto
{
    /**
     * @param  int  $value  The dimension value.
     * @param  string  $units  The unit of measurement.
     */
    public function __construct(
        public readonly int $value,
        public readonly string $units,
    ) {
    }
}
