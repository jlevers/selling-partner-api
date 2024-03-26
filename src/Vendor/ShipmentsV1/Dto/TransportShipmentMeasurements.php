<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TransportShipmentMeasurements extends BaseDto
{
    /**
     * @param  ?int  $totalCartonCount  Total number of cartons present in the shipment. Provide the cartonCount only for non-palletized shipments.
     * @param  ?int  $totalPalletStackable  Total number of Stackable Pallets present in the shipment.
     * @param  ?int  $totalPalletNonStackable  Total number of Non Stackable Pallets present in the shipment.
     * @param  ?Weight  $shipmentWeight  The weight of the shipment.
     * @param  ?Volume  $shipmentVolume  The volume of the shipment.
     */
    public function __construct(
        public readonly ?int $totalCartonCount = null,
        public readonly ?int $totalPalletStackable = null,
        public readonly ?int $totalPalletNonStackable = null,
        public readonly ?Weight $shipmentWeight = null,
        public readonly ?Volume $shipmentVolume = null,
    ) {
    }
}
