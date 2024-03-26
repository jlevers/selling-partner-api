<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Technician extends BaseDto
{
    /**
     * @param  ?string  $technicianId  The technician identifier.
     * @param  ?string  $name  The name of the technician.
     */
    public function __construct(
        public readonly ?string $technicianId = null,
        public readonly ?string $name = null,
    ) {
    }
}
