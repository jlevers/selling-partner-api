<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ImageDimensions extends BaseDto
{
    /**
     * @param  IntegerWithUnits  $width  A whole number dimension and its unit of measurement. For example, this can represent 100 pixels.
     * @param  IntegerWithUnits  $height  A whole number dimension and its unit of measurement. For example, this can represent 100 pixels.
     */
    public function __construct(
        public readonly IntegerWithUnits $width,
        public readonly IntegerWithUnits $height,
    ) {
    }
}
