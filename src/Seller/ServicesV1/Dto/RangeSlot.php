<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class RangeSlot extends BaseDto
{
    /**
     * @param  ?string  $startDateTime Start date time of slot in ISO 8601 format with precision of seconds.
     * @param  ?string  $endDateTime End date time of slot in ISO 8601 format with precision of seconds.
     * @param  ?int  $capacity Capacity of the slot.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?string $startDateTime = null,
        public readonly ?string $endDateTime = null,
        public readonly ?int $capacity = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
