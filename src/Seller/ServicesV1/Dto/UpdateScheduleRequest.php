<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use SellingPartnerApi\Dto;

final class UpdateScheduleRequest extends Dto
{
    protected static array $complexArrayTypes = ['schedules' => [AvailabilityRecord::class]];

    /**
     * @param  AvailabilityRecord[]  $schedules  List of `AvailabilityRecord`s to represent the capacity of a resource over a time range.
     */
    public function __construct(
        public readonly array $schedules,
    ) {
    }
}
