<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FulfillmentTime extends BaseDto
{
    /**
     * @param  ?string  $startTime The date, time in UTC of the fulfillment start time in ISO 8601 format.
     * @param  ?string  $endTime The date, time in UTC of the fulfillment end time in ISO 8601 format.
     */
    public function __construct(
        public readonly ?string $startTime = null,
        public readonly ?string $endTime = null,
    ) {
    }
}
