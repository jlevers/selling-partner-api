<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FixedSlot extends BaseDto
{
    /**
     * @param  ?DateTime  $startDateTime  Start date time of slot in ISO 8601 format with precision of seconds.
     * @param  ?int  $scheduledCapacity  Scheduled capacity corresponding to the slot. This capacity represents the originally allocated capacity as per resource schedule.
     * @param  ?int  $availableCapacity  Available capacity corresponding to the slot. This capacity represents the capacity available for allocation to reservations.
     * @param  ?int  $encumberedCapacity  Encumbered capacity corresponding to the slot. This capacity represents the capacity allocated for Amazon Jobs/Appointments/Orders.
     * @param  ?int  $reservedCapacity  Reserved capacity corresponding to the slot. This capacity represents the capacity made unavailable due to events like Breaks/Leaves/Lunch.
     */
    public function __construct(
        public readonly ?\DateTime $startDateTime = null,
        public readonly ?int $scheduledCapacity = null,
        public readonly ?int $availableCapacity = null,
        public readonly ?int $encumberedCapacity = null,
        public readonly ?int $reservedCapacity = null,
    ) {
    }
}
