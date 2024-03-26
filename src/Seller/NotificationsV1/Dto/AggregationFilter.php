<?php

namespace SellingPartnerApi\Seller\NotificationsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AggregationFilter extends BaseDto
{
    /**
     * @param  ?AggregationSettings  $aggregationSettings  A container that holds all of the necessary properties to configure the aggregation of notifications.
     */
    public function __construct(
        public readonly ?AggregationSettings $aggregationSettings = null,
    ) {
    }
}
