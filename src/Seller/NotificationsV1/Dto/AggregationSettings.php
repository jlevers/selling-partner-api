<?php

namespace SellingPartnerApi\Seller\NotificationsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AggregationSettings extends BaseDto
{
    /**
     * @param  string  $aggregationTimePeriod  The supported aggregation time periods. For example, if FiveMinutes is the value chosen, and 50 price updates occur for an ASIN within 5 minutes, Amazon will send only two notifications; one for the first event, and then a subsequent notification 5 minutes later with the final end state of the data. The 48 interim events will be dropped.
     */
    public function __construct(
        public readonly string $aggregationTimePeriod,
    ) {
    }
}
