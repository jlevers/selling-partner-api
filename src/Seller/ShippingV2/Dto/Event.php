<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Event extends BaseDto
{
    /**
     * @param  string  $eventTime The ISO 8601 formatted timestamp of the event.
     * @param  string  $eventCode The tracking event type.
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
