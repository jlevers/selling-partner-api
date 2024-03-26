<?php

namespace SellingPartnerApi\Seller\FBAInventoryV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class InventoryDetails extends BaseDto
{
    /**
     * @param  ?int  $fulfillableQuantity  The item quantity that can be picked, packed, and shipped.
     * @param  ?int  $inboundWorkingQuantity  The number of units in an inbound shipment for which you have notified Amazon.
     * @param  ?int  $inboundShippedQuantity  The number of units in an inbound shipment that you have notified Amazon about and have provided a tracking number.
     * @param  ?int  $inboundReceivingQuantity  The number of units that have not yet been received at an Amazon fulfillment center for processing, but are part of an inbound shipment with some units that have already been received and processed.
     * @param  ?ReservedQuantity  $reservedQuantity  The quantity of reserved inventory.
     * @param  ?ResearchingQuantity  $researchingQuantity  The number of misplaced or warehouse damaged units that are actively being confirmed at our fulfillment centers.
     * @param  ?UnfulfillableQuantity  $unfulfillableQuantity  The quantity of unfulfillable inventory.
     */
    public function __construct(
        public readonly ?int $fulfillableQuantity = null,
        public readonly ?int $inboundWorkingQuantity = null,
        public readonly ?int $inboundShippedQuantity = null,
        public readonly ?int $inboundReceivingQuantity = null,
        public readonly ?ReservedQuantity $reservedQuantity = null,
        public readonly ?ResearchingQuantity $researchingQuantity = null,
        public readonly ?UnfulfillableQuantity $unfulfillableQuantity = null,
    ) {
    }
}
