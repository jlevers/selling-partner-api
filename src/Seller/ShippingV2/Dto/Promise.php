<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Promise extends BaseDto
{
    /**
     * @param  TimeWindow  $timeWindow The start and end time that specifies the time interval of an event.
     * @param  TimeWindow  $timeWindow The start and end time that specifies the time interval of an event.
     */
    public function __construct(
        public readonly TimeWindow $timeWindow,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
