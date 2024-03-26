<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Weight extends BaseDto
{
    /**
     * @param  string  $unit  The unit of weight.
     * @param  string  $value  The weight value.
     */
    public function __construct(
        public readonly string $unit,
        public readonly string $value,
    ) {
    }
}
