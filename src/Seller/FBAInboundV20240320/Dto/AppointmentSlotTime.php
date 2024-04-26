<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class AppointmentSlotTime extends Dto
{
    /**
     * @param  DateTime  $endTime  The end timestamp of the appointment in UTC.
     * @param  DateTime  $startTime  The start timestamp of the appointment in UTC.
     */
    public function __construct(
        public readonly \DateTime $endTime,
        public readonly \DateTime $startTime,
    ) {
    }
}
