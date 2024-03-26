<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Promise extends BaseDto
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
