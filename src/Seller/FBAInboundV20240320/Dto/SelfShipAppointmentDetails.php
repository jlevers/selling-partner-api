<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class SelfShipAppointmentDetails extends Dto
{
    /**
     * @param  ?float  $appointmentId  Identifier for appointment.
     * @param  ?AppointmentSlotTime  $appointmentSlotTime  An appointment slot time with start and end.
     * @param  ?string  $appointmentStatus  Status of the appointment.
     */
    public function __construct(
        public readonly ?float $appointmentId = null,
        public readonly ?AppointmentSlotTime $appointmentSlotTime = null,
        public readonly ?string $appointmentStatus = null,
    ) {
    }
}
