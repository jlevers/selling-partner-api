<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class TimeWindow extends Dto
{
    /**
     * @param  ?\DateTimeInterface  $start  The start time of the time window.
     * @param  ?\DateTimeInterface  $end  The end time of the time window.
     */
    public function __construct(
        public readonly ?\DateTimeInterface $start = null,
        public readonly ?\DateTimeInterface $end = null,
    ) {
    }
}
