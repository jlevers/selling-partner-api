<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AvailabilityRecord extends BaseDto
{
    /**
     * @param  DateTime  $startTime  Denotes the time from when the resource is available in a day in ISO-8601 format.
     * @param  DateTime  $endTime  Denotes the time till when the resource is available in a day in ISO-8601 format.
     * @param  ?Recurrence  $recurrence  Repeated occurrence of an event in a time range.
     * @param  ?int  $capacity  Signifies the capacity of a resource which is available.
     */
    public function __construct(
        public readonly \DateTime $startTime,
        public readonly \DateTime $endTime,
        public readonly ?Recurrence $recurrence = null,
        public readonly ?int $capacity = null,
    ) {
    }
}
