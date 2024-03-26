<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AppointmentTime extends BaseDto
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
