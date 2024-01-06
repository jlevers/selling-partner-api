<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PartneredLtlDataOutput extends BaseDto
{
    protected static array $complexArrayTypes = ['palletList' => [Pallet::class]];

    /**
     * @param  Contact  $contact Contact information for the person in the seller's organization who is responsible for a Less Than Truckload/Full Truckload (LTL/FTL) shipment.
     * @param  string  $sellerFreightClass The freight class of the shipment. For information about determining the freight class, contact the carrier.
     * @param  Pallet[]  $palletList A list of pallet information.
     * @param  Weight  $totalWeight The weight of the package.
     * @param  Amount  $sellerDeclaredValue The monetary value.
     * @param  Amount  $amazonCalculatedValue The monetary value.
     * @param  string  $previewFreightClass The freight class of the shipment. For information about determining the freight class, contact the carrier.
     * @param  string  $amazonReferenceId A unique identifier created by Amazon that identifies this Amazon-partnered, Less Than Truckload/Full Truckload (LTL/FTL) shipment.
     * @param  bool  $isBillOfLadingAvailable Indicates whether the bill of lading for the shipment is available.
     * @param  PartneredEstimate  $partneredEstimate The estimated shipping cost for a shipment using an Amazon-partnered carrier.
     * @param  string  $carrierName The carrier for the inbound shipment.
     */
    public function __construct(
        public readonly ?Contact $contact = null,
        public readonly ?int $boxCount = null,
        public readonly ?string $sellerFreightClass = null,
        public readonly ?string $freightReadyDate = null,
        public readonly ?array $palletList = null,
        public readonly ?Weight $totalWeight = null,
        public readonly ?Amount $sellerDeclaredValue = null,
        public readonly ?Amount $amazonCalculatedValue = null,
        public readonly ?string $previewPickupDate = null,
        public readonly ?string $previewDeliveryDate = null,
        public readonly ?string $previewFreightClass = null,
        public readonly ?string $amazonReferenceId = null,
        public readonly ?bool $isBillOfLadingAvailable = null,
        public readonly ?PartneredEstimate $partneredEstimate = null,
        public readonly ?string $carrierName = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
