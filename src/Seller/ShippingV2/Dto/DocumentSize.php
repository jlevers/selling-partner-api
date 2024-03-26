<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class DocumentSize extends BaseDto
{
    /**
     * @param  float  $width  The width of the document measured in the units specified.
     * @param  float  $length  The length of the document measured in the units specified.
     * @param  string  $unit  The unit of measurement.
     */
    public function __construct(
        public readonly float $width,
        public readonly float $length,
        public readonly string $unit,
    ) {
    }
}
