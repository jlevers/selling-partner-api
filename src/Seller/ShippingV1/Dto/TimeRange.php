<?php

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TimeRange extends BaseDto
{
    /**
     * @param  ?DateTime  $start  The start date and time. This defaults to the current date and time.
     * @param  ?DateTime  $end  The end date and time. This must come after the value of start. This defaults to the next business day from the start.
     */
    public function __construct(
        public readonly ?\DateTime $start = null,
        public readonly ?\DateTime $end = null,
    ) {
    }
}
