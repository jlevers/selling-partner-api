<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use SellingPartnerApi\Dto;

final class Weight extends Dto
{
    protected static array $attributeMap = ['value' => 'Value', 'unit' => 'Unit'];

    /**
     * @param  float  $value  The weight value.
     * @param  string  $unit  The unit of weight.
     */
    public function __construct(
        public readonly float $value,
        public readonly string $unit,
    ) {
    }
}
