<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ImageOffsets extends BaseDto
{
    /**
     * @param  IntegerWithUnits  $x  A whole number dimension and its unit of measurement. For example, this can represent 100 pixels.
     * @param  IntegerWithUnits  $y  A whole number dimension and its unit of measurement. For example, this can represent 100 pixels.
     */
    public function __construct(
        public readonly IntegerWithUnits $x,
        public readonly IntegerWithUnits $y,
    ) {
    }
}
