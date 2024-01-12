<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TransportationDetails extends BaseDto
{
    /**
     * @param  ?string  $shipMode The type of shipment.
     * @param  ?string  $transportationMode The mode of transportation for this shipment.
     * @param  ?string  $shippedDate Date when shipment is performed by the Vendor to Buyer
     * @param  ?string  $estimatedDeliveryDate Estimated Date on which shipment will be delivered from Vendor to Buyer
     * @param  ?string  $shipmentDeliveryDate Date on which shipment will be delivered from Vendor to Buyer
     * @param  ?CarrierDetails  $carrierDetails
     * @param  ?string  $billOfLadingNumber Bill Of Lading (BOL) number is the unique number assigned by the vendor. The BOL present in the Shipment Confirmation message ideally matches the paper BOL provided with the shipment, but that is no must. Instead of BOL, an alternative reference number (like Delivery Note Number) for the shipment can also be sent in this field.
     */
    public function __construct(
        public readonly ?string $shipMode = null,
        public readonly ?string $transportationMode = null,
        public readonly ?string $shippedDate = null,
        public readonly ?string $estimatedDeliveryDate = null,
        public readonly ?string $shipmentDeliveryDate = null,
        public readonly ?CarrierDetails $carrierDetails = null,
        public readonly ?string $billOfLadingNumber = null,
    ) {
    }
}
