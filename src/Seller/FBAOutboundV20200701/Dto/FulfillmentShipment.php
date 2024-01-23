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
     * @param  FulfillmentShipmentItem[]  $fulfillmentShipmentItem An array of fulfillment shipment item information.
     * @param  ?string  $shippingDate
     * @param  ?string  $estimatedArrivalDate
     * @param  ?string[]  $shippingNotes Provides additional insight into the shipment timeline when exact delivery dates are not able to be precomputed.
     * @param  FulfillmentShipmentPackage[]  $fulfillmentShipmentPackage An array of fulfillment shipment package information.
     */
    public function __construct(
        public readonly string $amazonShipmentId,
        public readonly string $fulfillmentCenterId,
        public readonly string $fulfillmentShipmentStatus,
        public readonly array $fulfillmentShipmentItem,
        public readonly ?string $shippingDate = null,
        public readonly ?string $estimatedArrivalDate = null,
        public readonly ?array $shippingNotes = null,
        public readonly ?array $fulfillmentShipmentPackage = null,
    ) {
    }
}
