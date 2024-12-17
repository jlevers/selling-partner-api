<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use SellingPartnerApi\Dto;

final class ImageOffsets extends Dto
{
    /**
     * @param  IntegerWithUnits  $x  A whole number dimension and its unit of measurement. For example, this can represent 100 pixels.
     * @param  IntegerWithUnits  $y  A whole number dimension and its unit of measurement. For example, this can represent 100 pixels.
     */
    public function __construct(
        public IntegerWithUnits $x,
        public IntegerWithUnits $y,
    ) {}
}
