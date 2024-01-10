<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Technician extends BaseDto
{
    /**
     * @param  ?string  $technicianId The technician identifier.
     * @param  ?string  $name The name of the technician.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?string $technicianId = null,
        public readonly ?string $name = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
