<?php

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TrackingInformation extends BaseDto
{
    protected static array $complexArrayTypes = ['eventHistory' => [Event::class]];

    /**
     * @param  string  $trackingId The tracking id generated to each shipment. It contains a series of letters or digits or both.
     * @param  TrackingSummary  $summary The tracking summary.
     * @param  string  $promisedDeliveryDate The promised delivery date and time of a shipment.
     * @param  Event[]  $eventHistory A list of events of a shipment.
     */
    public function __construct(
        public readonly string $trackingId,
        public readonly TrackingSummary $summary,
        public readonly string $promisedDeliveryDate,
        public readonly array $eventHistory,
    ) {
    }
}
