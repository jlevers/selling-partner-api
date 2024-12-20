<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

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
     * @param  float  $length  Number format that supports decimal.
     * @param  float  $width  Number format that supports decimal.
     * @param  float  $height  Number format that supports decimal.
     * @param  string  $unit  Indicates the unit of measurement.
     */
    public function __construct(
        public float $length,
        public float $width,
        public float $height,
        public string $unit,
    ) {}
}
