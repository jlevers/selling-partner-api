<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PartneredLtlDataOutput extends BaseDto
{
    protected static array $attributeMap = [
        'contact' => 'Contact',
        'boxCount' => 'BoxCount',
        'freightReadyDate' => 'FreightReadyDate',
        'palletList' => 'PalletList',
        'totalWeight' => 'TotalWeight',
        'previewPickupDate' => 'PreviewPickupDate',
        'previewDeliveryDate' => 'PreviewDeliveryDate',
        'previewFreightClass' => 'PreviewFreightClass',
        'amazonReferenceId' => 'AmazonReferenceId',
        'isBillOfLadingAvailable' => 'IsBillOfLadingAvailable',
        'carrierName' => 'CarrierName',
        'sellerFreightClass' => 'SellerFreightClass',
        'sellerDeclaredValue' => 'SellerDeclaredValue',
        'amazonCalculatedValue' => 'AmazonCalculatedValue',
        'partneredEstimate' => 'PartneredEstimate',
    ];

    protected static array $complexArrayTypes = ['palletList' => [Pallet::class]];

    /**
     * @param  Contact  $contact  Contact information for the person in the seller's organization who is responsible for a Less Than Truckload/Full Truckload (LTL/FTL) shipment.
     * @param  DateTime  $freightReadyDate
     * @param  Pallet[]  $palletList  A list of pallet information.
     * @param  Weight  $totalWeight  The weight of the package.
     * @param  DateTime  $previewPickupDate
     * @param  DateTime  $previewDeliveryDate
     * @param  string  $previewFreightClass  The freight class of the shipment. For information about determining the freight class, contact the carrier.
     * @param  string  $amazonReferenceId  A unique identifier created by Amazon that identifies this Amazon-partnered, Less Than Truckload/Full Truckload (LTL/FTL) shipment.
     * @param  bool  $isBillOfLadingAvailable  Indicates whether the bill of lading for the shipment is available.
     * @param  string  $carrierName  The carrier for the inbound shipment.
     * @param  ?string  $sellerFreightClass  The freight class of the shipment. For information about determining the freight class, contact the carrier.
     * @param  ?Amount  $sellerDeclaredValue  The monetary value.
     * @param  ?Amount  $amazonCalculatedValue  The monetary value.
     * @param  ?PartneredEstimate  $partneredEstimate  The estimated shipping cost for a shipment using an Amazon-partnered carrier.
     */
    public function __construct(
        public readonly Contact $contact,
        public readonly int $boxCount,
        public readonly \DateTime $freightReadyDate,
        public readonly array $palletList,
        public readonly Weight $totalWeight,
        public readonly \DateTime $previewPickupDate,
        public readonly \DateTime $previewDeliveryDate,
        public readonly string $previewFreightClass,
        public readonly string $amazonReferenceId,
        public readonly bool $isBillOfLadingAvailable,
        public readonly string $carrierName,
        public readonly ?string $sellerFreightClass = null,
        public readonly ?Amount $sellerDeclaredValue = null,
        public readonly ?Amount $amazonCalculatedValue = null,
        public readonly ?PartneredEstimate $partneredEstimate = null,
    ) {
    }
}
