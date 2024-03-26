<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Container extends BaseDto
{
    protected static array $complexArrayTypes = ['packedItems' => [PackedItem::class]];

    /**
     * @param  string  $containerType  The type of container.
     * @param  string  $containerIdentifier  The container identifier.
     * @param  Weight  $weight  The weight.
     * @param  ?string  $trackingNumber  The tracking number.
     * @param  ?string  $manifestId  The manifest identifier.
     * @param  ?string  $manifestDate  The date of the manifest.
     * @param  ?string  $shipMethod  The shipment method. This property is required when calling the submitShipmentConfirmations operation, and optional otherwise.
     * @param  ?string  $scacCode  SCAC code required for NA VOC vendors only.
     * @param  ?string  $carrier  Carrier required for EU VOC vendors only.
     * @param  ?int  $containerSequenceNumber  An integer that must be submitted for multi-box shipments only, where one item may come in separate packages.
     * @param  ?Dimensions  $dimensions  Physical dimensional measurements of a container.
     * @param  PackedItem[]  $packedItems  A list of packed items.
     */
    public function __construct(
        public readonly string $containerType,
        public readonly string $containerIdentifier,
        public readonly Weight $weight,
        public readonly ?string $trackingNumber = null,
        public readonly ?string $manifestId = null,
        public readonly ?string $manifestDate = null,
        public readonly ?string $shipMethod = null,
        public readonly ?string $scacCode = null,
        public readonly ?string $carrier = null,
        public readonly ?int $containerSequenceNumber = null,
        public readonly ?Dimensions $dimensions = null,
        public readonly ?array $packedItems = null,
    ) {
    }
}
