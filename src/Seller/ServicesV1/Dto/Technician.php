<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use SellingPartnerApi\Dto;

final class Technician extends Dto
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
