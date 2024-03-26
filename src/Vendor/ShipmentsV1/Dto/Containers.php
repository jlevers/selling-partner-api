<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Containers extends BaseDto
{
    protected static array $complexArrayTypes = [
        'containerIdentifiers' => [ContainerIdentification::class],
        'packedItems' => [PackedItems::class],
    ];

    /**
     * @param  string  $containerType  The type of container.
     * @param  ?string  $containerSequenceNumber  An integer that must be submitted for multi-box shipments only, where one item may come in separate packages.
     * @param  ContainerIdentification[]  $containerIdentifiers  A list of carton identifiers.
     * @param  ?string  $trackingNumber  The tracking number used for identifying the shipment.
     * @param  ?Dimensions  $dimensions  Physical dimensional measurements of a container.
     * @param  ?Weight  $weight  The weight of the shipment.
     * @param  ?int  $tier  Number of layers per pallet.
     * @param  ?int  $block  Number of cartons per layer on the pallet.
     * @param  ?InnerContainersDetails  $innerContainersDetails  Details of the innerContainersDetails.
     * @param  PackedItems[]  $packedItems  A list of packed items.
     */
    public function __construct(
        public readonly string $containerType,
        public readonly ?string $containerSequenceNumber = null,
        public readonly ?array $containerIdentifiers = null,
        public readonly ?string $trackingNumber = null,
        public readonly ?Dimensions $dimensions = null,
        public readonly ?Weight $weight = null,
        public readonly ?int $tier = null,
        public readonly ?int $block = null,
        public readonly ?InnerContainersDetails $innerContainersDetails = null,
        public readonly ?array $packedItems = null,
    ) {
    }
}
