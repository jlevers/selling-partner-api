<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use SellingPartnerApi\Dto;

final class Weight extends Dto
{
    protected static array $attributeMap = ['value' => 'Value', 'unit' => 'Unit'];

    /**
     * @param  float  $value  Number format that supports decimal.
     * @param  string  $unit  Indicates the unit of weight.
     */
    public function __construct(
        public readonly float $value,
        public readonly string $unit,
    ) {
    }
}
