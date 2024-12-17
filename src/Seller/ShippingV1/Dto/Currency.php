<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use SellingPartnerApi\Dto;

final class Currency extends Dto
{
    /**
     * @param  float  $value  The amount of currency.
     * @param  string  $unit  A 3-character currency code.
     */
    public function __construct(
        public float $value,
        public string $unit,
    ) {}
}
