<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class RangeSlotCapacityQuery extends BaseDto
{
    /**
     * @param  DateTime  $startDateTime  Start date time from which the capacity slots are being requested in ISO 8601 format.
     * @param  DateTime  $endDateTime  End date time up to which the capacity slots are being requested in ISO 8601 format.
     * @param  ?string[]  $capacityTypes  An array of capacity types which are being requested. Default value is `[SCHEDULED_CAPACITY]`.
     */
    public function __construct(
        public readonly \DateTime $startDateTime,
        public readonly \DateTime $endDateTime,
        public readonly ?array $capacityTypes = null,
    ) {
    }
}
