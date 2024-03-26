<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Reservation extends BaseDto
{
    /**
     * @param  string  $type  Type of reservation.
     * @param  AvailabilityRecord  $availability  `AvailabilityRecord` to represent the capacity of a resource over a time range.
     * @param  ?string  $reservationId  Unique identifier for a reservation. If present, it is treated as an update reservation request and will update the corresponding reservation. Otherwise, it is treated as a new create reservation request.
     */
    public function __construct(
        public readonly string $type,
        public readonly AvailabilityRecord $availability,
        public readonly ?string $reservationId = null,
    ) {
    }
}
