<?php

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ShippingPromiseSet extends BaseDto
{
    /**
     * @param  TimeRange  $timeRange The time range.
     * @param  TimeRange  $timeRange The time range.
     */
    public function __construct(
        public readonly TimeRange $timeRange,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
