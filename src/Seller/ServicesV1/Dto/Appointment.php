<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Appointment extends BaseDto
{
    protected static array $complexArrayTypes = ['assignedTechnicians' => [Technician::class]];

    /**
     * @param  ?string  $appointmentId  The appointment identifier.
     * @param  ?string  $appointmentStatus  The status of the appointment.
     * @param  ?AppointmentTime  $appointmentTime  The time of the appointment window.
     * @param  Technician[]|null  $assignedTechnicians  A list of technicians assigned to the service job.
     * @param  ?string  $rescheduledAppointmentId  The appointment identifier.
     * @param  ?Poa  $poa  Proof of Appointment (POA) details.
     */
    public function __construct(
        public readonly ?string $appointmentId = null,
        public readonly ?string $appointmentStatus = null,
        public readonly ?AppointmentTime $appointmentTime = null,
        public readonly ?array $assignedTechnicians = null,
        public readonly ?string $rescheduledAppointmentId = null,
        public readonly ?Poa $poa = null,
    ) {
    }
}
