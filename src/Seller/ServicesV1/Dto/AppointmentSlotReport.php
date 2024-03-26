<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AppointmentSlotReport extends BaseDto
{
    protected static array $complexArrayTypes = ['appointmentSlots' => [AppointmentSlot::class]];

    /**
     * @param  ?string  $schedulingType  Defines the type of slots.
     * @param  ?DateTime  $startTime  Start Time from which the appointment slots are generated in ISO 8601 format.
     * @param  ?DateTime  $endTime  End Time up to which the appointment slots are generated in ISO 8601 format.
     * @param  AppointmentSlot[]|null  $appointmentSlots  A list of time windows along with associated capacity in which the service can be performed.
     */
    public function __construct(
        public readonly ?string $schedulingType = null,
        public readonly ?\DateTime $startTime = null,
        public readonly ?\DateTime $endTime = null,
        public readonly ?array $appointmentSlots = null,
    ) {
    }
}
