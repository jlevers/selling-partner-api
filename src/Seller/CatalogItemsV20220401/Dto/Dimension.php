<?php

namespace SellingPartnerApi\Seller\CatalogItemsV20220401\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Dimension extends BaseDto
{
    /**
     * @param  ?string  $unit  Measurement unit of the dimension value.
     * @param  ?float  $value  Numeric dimension value.
     */
    public function __construct(
        public readonly ?string $unit = null,
        public readonly ?float $value = null,
    ) {
    }
}
