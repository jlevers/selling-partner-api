<?php

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Length extends BaseDto
{
    /**
     * @param  ?float  $value  The value in units.
     * @param  ?string  $unit  The unit of length.
     */
    public function __construct(
        public readonly ?float $value = null,
        public readonly ?string $unit = null,
    ) {
    }
}
