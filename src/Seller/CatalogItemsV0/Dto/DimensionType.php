<?php

namespace SellingPartnerApi\Seller\CatalogItemsV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class DimensionType extends BaseDto
{
    /**
     * @param  DecimalWithUnits  $height The decimal value and unit.
     * @param  DecimalWithUnits  $length The decimal value and unit.
     * @param  DecimalWithUnits  $width The decimal value and unit.
     * @param  DecimalWithUnits  $weight The decimal value and unit.
     */
    public function __construct(
        public readonly DecimalWithUnits $height,
        public readonly DecimalWithUnits $length,
        public readonly DecimalWithUnits $width,
        public readonly DecimalWithUnits $weight,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
