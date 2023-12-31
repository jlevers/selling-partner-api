<?php

namespace SellingPartnerApi\Seller\CatalogItemsV20220401\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Dimension extends BaseDto
{
    /**
     * @param  string  $unit Measurement unit of the dimension value.
     * @param  float  $value Numeric dimension value.
     */
    public function __construct(
        public readonly string $unit,
        public readonly float $value,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
