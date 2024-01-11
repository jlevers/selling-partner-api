<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TimeWindow extends BaseDto
{
    /**
     * @param  ?string  $start The start time of the time window.
     * @param  ?string  $end The end time of the time window.
     */
    public function __construct(
        public readonly ?string $start = null,
        public readonly ?string $end = null,
    ) {
    }
}
