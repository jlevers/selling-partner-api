<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AvailabilityRecord extends BaseDto
{
    /**
     * @param  string  $startTime Denotes the time from when the resource is available in a day in ISO-8601 format.
     * @param  string  $endTime Denotes the time till when the resource is available in a day in ISO-8601 format.
     * @param  ?Recurrence  $recurrence Repeated occurrence of an event in a time range.
     * @param  ?int  $capacity Signifies the capacity of a resource which is available.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly string $startTime,
        public readonly string $endTime,
        public readonly ?Recurrence $recurrence = null,
        public readonly ?int $capacity = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
