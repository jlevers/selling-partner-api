<?php

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Event extends BaseDto
{
    /**
     * @param  string  $eventCode  The event code of a shipment, such as Departed, Received, and ReadyForReceive.
     * @param  DateTime  $eventTime  The date and time of an event for a shipment.
     * @param  ?Location  $location  The location where the person, business or institution is located.
     */
    public function __construct(
        public readonly string $eventCode,
        public readonly \DateTime $eventTime,
        public readonly ?Location $location = null,
    ) {
    }
}
