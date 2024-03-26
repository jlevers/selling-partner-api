<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class UpdateScheduleRecord extends BaseDto
{
    protected static array $complexArrayTypes = ['warnings' => [Warning::class], 'errors' => [Error::class]];

    /**
     * @param  ?AvailabilityRecord  $availability  `AvailabilityRecord` to represent the capacity of a resource over a time range.
     * @param  Warning[]|null  $warnings  A list of warnings returned in the sucessful execution response of an API request.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?AvailabilityRecord $availability = null,
        public readonly ?array $warnings = null,
        public readonly ?array $errors = null,
    ) {
    }
}
