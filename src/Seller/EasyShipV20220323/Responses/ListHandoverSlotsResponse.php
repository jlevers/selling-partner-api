<?php

namespace SellingPartnerApi\Seller\EasyShipV20220323\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class ListHandoverSlotsResponse extends BaseResponse
{
    /**
     * @param  string  $amazonOrderId An Amazon-defined order identifier. Identifies the order that the seller wants to deliver using Amazon Easy Ship.
     * @param  TimeSlot[]  $timeSlots A list of time slots.
     */
    public function __construct(
        public readonly ?string $amazonOrderId = null,
        public readonly ?array $timeSlots = null,
    ) {
    }
}
