<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class TimeWindow extends Dto
{
    /**
     * @param  ?DateTime  $start  The start time of the time window.
     * @param  ?DateTime  $end  The end time of the time window.
     */
    public function __construct(
        public readonly ?\DateTime $start = null,
        public readonly ?\DateTime $end = null,
    ) {
    }
}
