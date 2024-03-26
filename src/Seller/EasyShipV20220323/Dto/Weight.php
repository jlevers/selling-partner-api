<?php

namespace SellingPartnerApi\Seller\EasyShipV20220323\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Weight extends BaseDto
{
    /**
     * @param  ?float  $value  The weight of the package.
     * @param  ?string  $unit  The unit of measurement used to measure the weight.
     */
    public function __construct(
        public readonly ?float $value = null,
        public readonly ?string $unit = null,
    ) {
    }
}
