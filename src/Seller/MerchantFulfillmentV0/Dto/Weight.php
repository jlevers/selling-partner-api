<?php

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Weight extends BaseDto
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
