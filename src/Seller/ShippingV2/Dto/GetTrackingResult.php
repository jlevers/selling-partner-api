<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GetTrackingResult extends BaseDto
{
    protected static array $complexArrayTypes = ['eventHistory' => [Event::class]];

    /**
     * @param  string  $trackingId  The carrier generated identifier for a package in a purchased shipment.
     * @param  string  $alternateLegTrackingId  The carrier generated reverse identifier for a returned package in a purchased shipment.
     * @param  Event[]  $eventHistory  A list of tracking events.
     * @param  DateTime  $promisedDeliveryDate  The date and time by which the shipment is promised to be delivered.
     * @param  TrackingSummary  $summary  A package status summary.
     */
    public function __construct(
        public readonly string $trackingId,
        public readonly string $alternateLegTrackingId,
        public readonly array $eventHistory,
        public readonly \DateTime $promisedDeliveryDate,
        public readonly TrackingSummary $summary,
    ) {
    }
}
