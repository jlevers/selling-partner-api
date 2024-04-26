<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use SellingPartnerApi\Dto;

final class AppointmentTime extends Dto
{
    /**
     * @param  DateTime  $startTime  The date and time of the start of the appointment window in ISO 8601 format.
     * @param  int  $durationInMinutes  The duration of the appointment window, in minutes.
     */
    public function __construct(
        public readonly \DateTime $startTime,
        public readonly int $durationInMinutes,
    ) {
    }
}
