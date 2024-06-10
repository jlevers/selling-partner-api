<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use SellingPartnerApi\Dto;

final class Event extends Dto
{
    /**
     * @param  string  $eventCode  The event code of a shipment, such as Departed, Received, and ReadyForReceive.
     * @param  \DateTimeInterface  $eventTime  The date and time of an event for a shipment.
     * @param  ?Location  $location  The location where the person, business or institution is located.
     */
    public function __construct(
        public readonly string $eventCode,
        public readonly \DateTimeInterface $eventTime,
        public readonly ?Location $location = null,
    ) {
    }
}
