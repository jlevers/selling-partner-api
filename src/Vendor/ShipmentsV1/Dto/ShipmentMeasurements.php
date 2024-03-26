<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ShipmentMeasurements extends BaseDto
{
    /**
     * @param  ?Weight  $grossShipmentWeight  The weight of the shipment.
     * @param  ?Volume  $shipmentVolume  The volume of the shipment.
     * @param  ?int  $cartonCount  Number of cartons present in the shipment. Provide the cartonCount only for non-palletized shipments.
     * @param  ?int  $palletCount  Number of pallets present in the shipment. Provide the palletCount only for palletized shipments.
     */
    public function __construct(
        public readonly ?Weight $grossShipmentWeight = null,
        public readonly ?Volume $shipmentVolume = null,
        public readonly ?int $cartonCount = null,
        public readonly ?int $palletCount = null,
    ) {
    }
}
