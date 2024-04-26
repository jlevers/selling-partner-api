<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class Promise extends Dto
{
    /**
     * @param  ?TimeWindow  $deliveryWindow  The start and end time that specifies the time interval of an event.
     * @param  ?TimeWindow  $pickupWindow  The start and end time that specifies the time interval of an event.
     */
    public function __construct(
        public readonly ?TimeWindow $deliveryWindow = null,
        public readonly ?TimeWindow $pickupWindow = null,
    ) {
    }
}
