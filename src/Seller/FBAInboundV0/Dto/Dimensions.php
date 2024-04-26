<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use SellingPartnerApi\Dto;

final class Dimensions extends Dto
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
