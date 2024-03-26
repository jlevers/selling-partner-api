<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FulfillmentTime extends BaseDto
{
    /**
     * @param  ?DateTime  $startTime  The date, time in UTC of the fulfillment start time in ISO 8601 format.
     * @param  ?DateTime  $endTime  The date, time in UTC of the fulfillment end time in ISO 8601 format.
     */
    public function __construct(
        public readonly ?\DateTime $startTime = null,
        public readonly ?\DateTime $endTime = null,
    ) {
    }
}
