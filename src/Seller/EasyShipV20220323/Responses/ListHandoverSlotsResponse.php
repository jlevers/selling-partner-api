<?php

namespace SellingPartnerApi\Seller\EasyShipV20220323\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\EasyShipV20220323\Dto\TimeSlot;

final class ListHandoverSlotsResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['timeSlots' => [TimeSlot::class]];

    /**
     * @param  string  $amazonOrderId  An Amazon-defined order identifier. Identifies the order that the seller wants to deliver using Amazon Easy Ship.
     * @param  TimeSlot[]  $timeSlots  A list of time slots.
     */
    public function __construct(
        public readonly string $amazonOrderId,
        public readonly array $timeSlots,
    ) {
    }
}
