<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Dimensions extends BaseDto
{
    protected static array $attributeMap = [
        'length' => 'Length',
        'width' => 'Width',
        'height' => 'Height',
        'unit' => 'Unit',
    ];

    /**
     * @param  string  $unit  Indicates the unit of measurement.
     */
    public function __construct(
        public readonly float $length,
        public readonly float $width,
        public readonly float $height,
        public readonly string $unit,
    ) {
    }
}
