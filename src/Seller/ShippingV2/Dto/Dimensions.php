<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Dimensions extends BaseDto
{
    /**
     * @param  float  $length  The length of the package.
     * @param  float  $width  The width of the package.
     * @param  float  $height  The height of the package.
     * @param  string  $unit  The unit of measurement.
     */
    public function __construct(
        public readonly float $length,
        public readonly float $width,
        public readonly float $height,
        public readonly string $unit,
    ) {
    }
}
