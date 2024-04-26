<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use SellingPartnerApi\Dto;

final class Measurement extends Dto
{
    protected static array $attributeMap = ['unit' => 'Unit', 'value' => 'Value'];

    /**
     * @param  string  $unit  The unit of measure for this measurement.
     * @param  float  $value  The value of the measurement.
     */
    public function __construct(
        public readonly string $unit,
        public readonly float $value,
    ) {
    }
}
