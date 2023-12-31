<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GetTrackingResult extends BaseDto
{
    protected static array $complexArrayTypes = ['eventHistory' => [Event::class]];

    /**
     * @param  Event[]  $eventHistory A list of tracking events.
     * @param  string  $promisedDeliveryDate The date and time by which the shipment is promised to be delivered.
     * @param  string  $trackingId The carrier generated identifier for a package in a purchased shipment.
     * @param  string  $alternateLegTrackingId The carrier generated reverse identifier for a returned package in a purchased shipment.
     * @param  TrackingSummary  $trackingSummary A package status summary.
     */
    public function __construct(
        public readonly array $eventHistory,
        public readonly string $promisedDeliveryDate,
        public readonly ?string $trackingId = null,
        public readonly ?string $alternateLegTrackingId = null,
        public readonly ?TrackingSummary $trackingSummary = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
