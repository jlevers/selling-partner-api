<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class RangeSlot extends BaseDto
{
    /**
     * @param  ?DateTime  $startDateTime  Start date time of slot in ISO 8601 format with precision of seconds.
     * @param  ?DateTime  $endDateTime  End date time of slot in ISO 8601 format with precision of seconds.
     * @param  ?int  $capacity  Capacity of the slot.
     */
    public function __construct(
        public readonly ?\DateTime $startDateTime = null,
        public readonly ?\DateTime $endDateTime = null,
        public readonly ?int $capacity = null,
    ) {
    }
}
