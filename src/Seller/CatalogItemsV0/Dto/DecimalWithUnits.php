<?php

namespace SellingPartnerApi\Seller\CatalogItemsV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class DecimalWithUnits extends BaseDto
{
    /**
     * @param  float  $value The decimal value.
     * @param  string  $units The unit of the decimal value.
     */
    public function __construct(
        public readonly float $value,
        public readonly string $units,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
