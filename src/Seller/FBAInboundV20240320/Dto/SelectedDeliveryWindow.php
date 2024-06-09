<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class SelectedDeliveryWindow extends Dto
{
    /**
     * @param  string  $availabilityType  Identifies type of Delivery Window Availability. Values: `AVAILABLE`, `CONGESTED`
     * @param  string  $deliveryWindowOptionId  Identifier of a delivery window option. A delivery window option represent one option for when a shipment is expected to be delivered.
     * @param  DateTime  $endDate  The end timestamp of the window.
     * @param  DateTime  $startDate  The start timestamp of the window.
     * @param  ?DateTime  $editableUntil  The timestamp at which this Window can no longer be edited.
     */
    public function __construct(
        public readonly string $availabilityType,
        public readonly string $deliveryWindowOptionId,
        public readonly \DateTime $endDate,
        public readonly \DateTime $startDate,
        public readonly ?\DateTime $editableUntil = null,
    ) {
    }
}
