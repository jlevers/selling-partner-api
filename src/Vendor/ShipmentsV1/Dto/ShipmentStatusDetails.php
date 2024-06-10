<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use SellingPartnerApi\Dto;

final class ShipmentStatusDetails extends Dto
{
    /**
     * @param  ?string  $shipmentStatus  Current status of the shipment on whether it is picked up or scheduled.
     * @param  ?\DateTimeInterface  $shipmentStatusDate  Date and time on last status update received for the shipment
     */
    public function __construct(
        public readonly ?string $shipmentStatus = null,
        public readonly ?\DateTimeInterface $shipmentStatusDate = null,
    ) {
    }
}
