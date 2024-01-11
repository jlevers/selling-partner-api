<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ItemDeliveryPromise extends BaseDto
{
    /**
     * @param  ?string  $startTime The date and time of the start of the promised delivery window in ISO 8601 format.
     * @param  ?string  $endTime The date and time of the end of the promised delivery window in ISO 8601 format.
     */
    public function __construct(
        public readonly ?string $startTime = null,
        public readonly ?string $endTime = null,
    ) {
    }
}
