<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AppointmentTimeInput extends BaseDto
{
    /**
     * @param  DateTime  $startTime  The date, time in UTC for the start time of an appointment in ISO 8601 format.
     * @param  ?int  $durationInMinutes  The duration of an appointment in minutes.
     */
    public function __construct(
        public readonly \DateTime $startTime,
        public readonly ?int $durationInMinutes = null,
    ) {
    }
}
