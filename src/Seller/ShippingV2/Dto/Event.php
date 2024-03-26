<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Event extends BaseDto
{
    /**
     * @param  string  $eventCode  The tracking event type.
     * @param  DateTime  $eventTime  The ISO 8601 formatted timestamp of the event.
     * @param  ?Location  $location  The location where the person, business or institution is located.
     */
    public function __construct(
        public readonly string $eventCode,
        public readonly \DateTime $eventTime,
        public readonly ?Location $location = null,
    ) {
    }
}
