<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ShipmentStatusDetails extends BaseDto
{
    /**
     * @param  ?string  $shipmentStatus Current status of the shipment on whether it is picked up or scheduled.
     * @param  ?string  $shipmentStatusDate Date and time on last status update received for the shipment
     */
    public function __construct(
        public readonly ?string $shipmentStatus = null,
        public readonly ?string $shipmentStatusDate = null,
    ) {
    }
}
