<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AppointmentSlot extends BaseDto
{
    /**
     * @param  ?string  $startTime Time window start time in ISO 8601 format.
     * @param  ?string  $endTime Time window end time in ISO 8601 format.
     * @param  ?int  $capacity Number of resources for which a slot can be reserved.
     */
    public function __construct(
        public readonly ?string $startTime = null,
        public readonly ?string $endTime = null,
        public readonly ?int $capacity = null,
    ) {
    }
}
