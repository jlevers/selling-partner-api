<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PartneredLtlDataOutput extends BaseDto
{
    protected static array $complexArrayTypes = ['palletList' => [Pallet::class]];

    /**
     * @param  Contact  $contact Contact information for the person in the seller's organization who is responsible for a Less Than Truckload/Full Truckload (LTL/FTL) shipment.
     * @param  Weight  $totalWeight The weight of the package.
     * @param  string  $previewFreightClass The freight class of the shipment. For information about determining the freight class, contact the carrier.
     * @param  string  $amazonReferenceId A unique identifier created by Amazon that identifies this Amazon-partnered, Less Than Truckload/Full Truckload (LTL/FTL) shipment.
     * @param  bool  $isBillOfLadingAvailable Indicates whether the bill of lading for the shipment is available.
     * @param  string  $carrierName The carrier for the inbound shipment.
     * @param  ?string  $sellerFreightClass The freight class of the shipment. For information about determining the freight class, contact the carrier.
     * @param  Pallet[]  $palletList A list of pallet information.
     * @param  ?Amount  $sellerDeclaredValue The monetary value.
     * @param  ?Amount  $amazonCalculatedValue The monetary value.
     * @param  ?PartneredEstimate  $partneredEstimate The estimated shipping cost for a shipment using an Amazon-partnered carrier.
     */
    public function __construct(
        public readonly Contact $contact,
        public readonly int $boxCount,
        public readonly string $freightReadyDate,
        public readonly Weight $totalWeight,
        public readonly string $previewPickupDate,
        public readonly string $previewDeliveryDate,
        public readonly string $previewFreightClass,
        public readonly string $amazonReferenceId,
        public readonly bool $isBillOfLadingAvailable,
        public readonly string $carrierName,
        public readonly ?string $sellerFreightClass = null,
        public readonly ?array $palletList = null,
        public readonly ?Amount $sellerDeclaredValue = null,
        public readonly ?Amount $amazonCalculatedValue = null,
        public readonly ?PartneredEstimate $partneredEstimate = null,
    ) {
    }
}
