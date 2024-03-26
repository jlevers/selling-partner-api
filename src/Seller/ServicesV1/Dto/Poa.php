<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Poa extends BaseDto
{
    protected static array $complexArrayTypes = ['technicians' => [Technician::class]];

    /**
     * @param  ?AppointmentTime  $appointmentTime  The time of the appointment window.
     * @param  Technician[]|null  $technicians  A list of technicians.
     * @param  ?string  $uploadingTechnician  The identifier of the technician who uploaded the POA.
     * @param  ?DateTime  $uploadTime  The date and time when the POA was uploaded in ISO 8601 format.
     * @param  ?string  $poaType  The type of POA uploaded.
     */
    public function __construct(
        public readonly ?AppointmentTime $appointmentTime = null,
        public readonly ?array $technicians = null,
        public readonly ?string $uploadingTechnician = null,
        public readonly ?\DateTime $uploadTime = null,
        public readonly ?string $poaType = null,
    ) {
    }
}
