<?php

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Dimensions extends BaseDto
{
    /**
     * @param  float  $length  The length of the container.
     * @param  float  $width  The width of the container.
     * @param  float  $height  The height of the container.
     * @param  string  $unit  The unit of these measurements.
     */
    public function __construct(
        public readonly float $length,
        public readonly float $width,
        public readonly float $height,
        public readonly string $unit,
    ) {
    }
}
