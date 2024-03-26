<?php

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ShippingPromiseSet extends BaseDto
{
    /**
     * @param  ?TimeRange  $deliveryWindow  The time range.
     * @param  ?TimeRange  $receiveWindow  The time range.
     */
    public function __construct(
        public readonly ?TimeRange $deliveryWindow = null,
        public readonly ?TimeRange $receiveWindow = null,
    ) {
    }
}
