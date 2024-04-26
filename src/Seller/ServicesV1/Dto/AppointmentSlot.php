<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use SellingPartnerApi\Dto;

final class AppointmentSlot extends Dto
{
    /**
     * @param  ?DateTime  $startTime  Time window start time in ISO 8601 format.
     * @param  ?DateTime  $endTime  Time window end time in ISO 8601 format.
     * @param  ?int  $capacity  Number of resources for which a slot can be reserved.
     */
    public function __construct(
        public readonly ?\DateTime $startTime = null,
        public readonly ?\DateTime $endTime = null,
        public readonly ?int $capacity = null,
    ) {
    }
}
