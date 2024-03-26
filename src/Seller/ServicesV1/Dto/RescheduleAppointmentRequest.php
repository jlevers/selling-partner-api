<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class RescheduleAppointmentRequest extends BaseDto
{
    /**
     * @param  AppointmentTimeInput  $appointmentTime  The input appointment time details.
     * @param  string  $rescheduleReasonCode  The appointment reschedule reason code.
     */
    public function __construct(
        public readonly AppointmentTimeInput $appointmentTime,
        public readonly string $rescheduleReasonCode,
    ) {
    }
}
