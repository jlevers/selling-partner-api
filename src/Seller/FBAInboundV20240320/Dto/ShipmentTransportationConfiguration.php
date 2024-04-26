<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class ShipmentTransportationConfiguration extends Dto
{
    /**
     * @param  WindowInput  $readyToShipWindow  Contains only a starting DateTime.
     * @param  string  $shipmentId  Identifier to a shipment. A shipment contains the boxes and units being inbounded.
     * @param  ?ContactInformation  $contactInformation  The seller's contact information.
     * @param  ?PalletInformation  $palletInformation  Pallet information, including weight, dimensions, quantity, stackability, freight class, and declared value.
     */
    public function __construct(
        public readonly WindowInput $readyToShipWindow,
        public readonly string $shipmentId,
        public readonly ?ContactInformation $contactInformation = null,
        public readonly ?PalletInformation $palletInformation = null,
    ) {
    }
}
