<?php

namespace SellingPartnerApi\Seller\CatalogItemsV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class DecimalWithUnits extends BaseDto
{
    protected static array $attributeMap = ['units' => 'Units'];

    /**
     * @param  ?float  $value  The decimal value.
     * @param  ?string  $units  The unit of the decimal value.
     */
    public function __construct(
        public readonly ?float $value = null,
        public readonly ?string $units = null,
    ) {
    }
}
