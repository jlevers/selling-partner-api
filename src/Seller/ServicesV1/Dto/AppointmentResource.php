<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use SellingPartnerApi\Dto;

final class AppointmentResource extends Dto
{
    /**
     * @param  ?string  $resourceId  The resource identifier.
     */
    public function __construct(
        public readonly ?string $resourceId = null,
    ) {
    }
}
