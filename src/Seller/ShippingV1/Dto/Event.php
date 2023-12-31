<?php

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Event extends BaseDto
{
    /**
     * @param  string  $eventTime The date and time of an event for a shipment.
     * @param  string  $eventCode The event code of a shipment, such as Departed, Received, and ReadyForReceive.
     * @param  Location  $location The location where the person, business or institution is located.
     */
    public function __construct(
        public readonly string $eventTime,
        public readonly ?string $eventCode = null,
        public readonly ?Location $location = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
