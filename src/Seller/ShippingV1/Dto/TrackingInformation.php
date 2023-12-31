<?php

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TrackingInformation extends BaseDto
{
    protected static array $complexArrayTypes = ['eventHistory' => [Event::class]];

    /**
     * @param  string  $trackingId The tracking id generated to each shipment. It contains a series of letters or digits or both.
     * @param  TrackingSummary  $trackingSummary The tracking summary.
     * @param  string  $promisedDeliveryDate The promised delivery date and time of a shipment.
     * @param  Event[]  $events A list of events of a shipment.
     */
    public function __construct(
        public readonly ?string $trackingId = null,
        public readonly ?TrackingSummary $trackingSummary = null,
        public readonly ?string $promisedDeliveryDate = null,
        public readonly ?array $events = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
