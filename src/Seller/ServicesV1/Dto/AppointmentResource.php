<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AppointmentResource extends BaseDto
{
    /**
     * @param  ?string  $resourceId The resource identifier.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?string $resourceId = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
