<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use SellingPartnerApi\Dto;

final class FixedSlotCapacityQuery extends Dto
{
    /**
     * @param  DateTime  $startDateTime  Start date time from which the capacity slots are being requested in ISO 8601 format.
     * @param  DateTime  $endDateTime  End date time up to which the capacity slots are being requested in ISO 8601 format.
     * @param  ?string[]  $capacityTypes  An array of capacity types which are being requested. Default value is `[SCHEDULED_CAPACITY]`.
     * @param  ?float  $slotDuration  Size in which slots are being requested. This value should be a multiple of 5 and fall in the range: 5 <= `slotDuration` <= 360.
     */
    public function __construct(
        public readonly \DateTime $startDateTime,
        public readonly \DateTime $endDateTime,
        public readonly ?array $capacityTypes = null,
        public readonly ?float $slotDuration = null,
    ) {
    }
}
