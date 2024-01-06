<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FulfillmentShipment extends BaseDto
{
    protected static array $complexArrayTypes = [
        'fulfillmentShipmentItem' => [FulfillmentShipmentItem::class],
        'fulfillmentShipmentPackage' => [FulfillmentShipmentPackage::class],
    ];

    /**
     * @param  string  $amazonShipmentId A shipment identifier assigned by Amazon.
     * @param  string  $fulfillmentCenterId An identifier for the fulfillment center that the shipment will be sent from.
     * @param  string  $fulfillmentShipmentStatus The current status of the shipment.
     * @param  string[]  $shippingNotes Provides additional insight into shipment timeline. Primairly used to communicate that actual delivery dates aren't available.
     * @param  FulfillmentShipmentItem[]  $fulfillmentShipmentItem An array of fulfillment shipment item information.
     * @param  FulfillmentShipmentPackage[]  $fulfillmentShipmentPackage An array of fulfillment shipment package information.
     */
    public function __construct(
        public readonly ?string $amazonShipmentId = null,
        public readonly ?string $fulfillmentCenterId = null,
        public readonly ?string $fulfillmentShipmentStatus = null,
        public readonly ?string $shippingDate = null,
        public readonly ?string $estimatedArrivalDate = null,
        public readonly ?array $shippingNotes = null,
        public readonly ?array $fulfillmentShipmentItem = null,
        public readonly ?array $fulfillmentShipmentPackage = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
