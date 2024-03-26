<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ShipmentInformation extends BaseDto
{
    /**
     * @param  ?VendorDetails  $vendorDetails  Vendor Details as part of Label response.
     * @param  ?string  $buyerReferenceNumber  Buyer Reference number which is a unique number.
     * @param  ?PartyIdentification  $shipToParty
     * @param  ?PartyIdentification  $shipFromParty
     * @param  ?string  $warehouseId  Vendor Warehouse ID from where the shipment is scheduled to be picked up by buyer / Carrier.
     * @param  ?string  $masterTrackingId  Unique Id with  which  the shipment can be tracked for Small Parcels.
     * @param  ?int  $totalLabelCount  Number of Labels that are created as part of this shipment.
     * @param  ?string  $shipMode  Type of shipment whether it is Small Parcel
     */
    public function __construct(
        public readonly ?VendorDetails $vendorDetails = null,
        public readonly ?string $buyerReferenceNumber = null,
        public readonly ?PartyIdentification $shipToParty = null,
        public readonly ?PartyIdentification $shipFromParty = null,
        public readonly ?string $warehouseId = null,
        public readonly ?string $masterTrackingId = null,
        public readonly ?int $totalLabelCount = null,
        public readonly ?string $shipMode = null,
    ) {
    }
}
