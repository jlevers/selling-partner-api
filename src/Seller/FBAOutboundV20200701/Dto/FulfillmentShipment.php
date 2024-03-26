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
     * @param  string  $amazonShipmentId  A shipment identifier assigned by Amazon.
     * @param  string  $fulfillmentCenterId  An identifier for the fulfillment center that the shipment will be sent from.
     * @param  string  $fulfillmentShipmentStatus  The current status of the shipment.
     * @param  FulfillmentShipmentItem[]  $fulfillmentShipmentItem  An array of fulfillment shipment item information.
     * @param  ?DateTime  $shippingDate
     * @param  ?DateTime  $estimatedArrivalDate
     * @param  ?string[]  $shippingNotes  Provides additional insight into the shipment timeline when exact delivery dates are not able to be precomputed.
     * @param  FulfillmentShipmentPackage[]|null  $fulfillmentShipmentPackage  An array of fulfillment shipment package information.
     */
    public function __construct(
        public readonly string $amazonShipmentId,
        public readonly string $fulfillmentCenterId,
        public readonly string $fulfillmentShipmentStatus,
        public readonly array $fulfillmentShipmentItem,
        public readonly ?\DateTime $shippingDate = null,
        public readonly ?\DateTime $estimatedArrivalDate = null,
        public readonly ?array $shippingNotes = null,
        public readonly ?array $fulfillmentShipmentPackage = null,
    ) {
    }
}
