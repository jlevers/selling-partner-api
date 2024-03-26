<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AddAppointmentRequest extends BaseDto
{
    /**
     * @param  AppointmentTimeInput  $appointmentTime  The input appointment time details.
     */
    public function __construct(
        public readonly AppointmentTimeInput $appointmentTime,
    ) {
    }
}
