<?php

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ThroughputCap extends BaseDto
{
    /**
     * @param  ?int  $value  An unsigned integer that can be only positive or zero.
     * @param  ?string  $timeUnit  The time unit
     */
    public function __construct(
        public readonly ?int $value = null,
        public readonly ?string $timeUnit = null,
    ) {
    }
}
