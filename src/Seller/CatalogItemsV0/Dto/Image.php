<?php

namespace SellingPartnerApi\Seller\CatalogItemsV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Image extends BaseDto
{
    /**
     * @param  string  $url The image URL attribute of the item.
     * @param  DecimalWithUnits  $height The decimal value and unit.
     * @param  DecimalWithUnits  $width The decimal value and unit.
     */
    public function __construct(
        public readonly string $url,
        public readonly DecimalWithUnits $height,
        public readonly DecimalWithUnits $width,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
