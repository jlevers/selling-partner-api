<?php

namespace SellingPartnerApi\Seller\EasyShipV20220323\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Dimensions extends BaseDto
{
    /**
     * @param  ?float  $length  The numerical value of the specified dimension.
     * @param  ?float  $width  The numerical value of the specified dimension.
     * @param  ?float  $height  The numerical value of the specified dimension.
     * @param  ?string  $unit  The unit of measurement used to measure the length.
     * @param  ?string  $identifier  A string of up to 255 characters.
     */
    public function __construct(
        public readonly ?float $length = null,
        public readonly ?float $width = null,
        public readonly ?float $height = null,
        public readonly ?string $unit = null,
        public readonly ?string $identifier = null,
    ) {
    }
}
