<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AddAppointmentRequest extends BaseDto
{
    /**
     * @param  AppointmentTimeInput  $appointmentTime The input appointment time details.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly AppointmentTimeInput $appointmentTime,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
