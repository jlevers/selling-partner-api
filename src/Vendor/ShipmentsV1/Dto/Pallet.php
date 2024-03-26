<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Pallet extends BaseDto
{
    protected static array $complexArrayTypes = [
        'palletIdentifiers' => [ContainerIdentification::class],
        'items' => [PurchaseOrderItems::class],
    ];

    /**
     * @param  ContainerIdentification[]  $palletIdentifiers  A list of pallet identifiers.
     * @param  ?int  $tier  Number of layers per pallet. Only applicable to container type Pallet.
     * @param  ?int  $block  Number of cartons per layer on the pallet. Only applicable to container type Pallet.
     * @param  ?Dimensions  $dimensions  Physical dimensional measurements of a container.
     * @param  ?Weight  $weight  The weight of the shipment.
     * @param  ?CartonReferenceDetails  $cartonReferenceDetails
     * @param  PurchaseOrderItems[]  $items  A list of the items that are associated to the PO in this transport and their associated details.
     */
    public function __construct(
        public readonly ?array $palletIdentifiers = null,
        public readonly ?int $tier = null,
        public readonly ?int $block = null,
        public readonly ?Dimensions $dimensions = null,
        public readonly ?Weight $weight = null,
        public readonly ?CartonReferenceDetails $cartonReferenceDetails = null,
        public readonly ?array $items = null,
    ) {
    }
}
