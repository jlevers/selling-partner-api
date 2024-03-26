<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Weight extends BaseDto
{
    protected static array $attributeMap = ['value' => 'Value', 'unit' => 'Unit'];

    /**
     * @param  string  $unit  Indicates the unit of weight.
     */
    public function __construct(
        public readonly float $value,
        public readonly string $unit,
    ) {
    }
}
