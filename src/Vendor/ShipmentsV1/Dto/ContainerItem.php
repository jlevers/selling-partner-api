<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ContainerItem extends BaseDto
{
    /**
     * @param  string  $itemReference  The reference number for the item. Please provide the itemSequenceNumber from the 'items' segment to refer to that item's details here.
     * @param  ItemQuantity  $shippedQuantity  Details of item quantity.
     * @param  ?ItemDetails  $itemDetails  Item details for be provided for every item in shipment at either the item or carton or pallet level, whichever is appropriate.
     */
    public function __construct(
        public readonly string $itemReference,
        public readonly ItemQuantity $shippedQuantity,
        public readonly ?ItemDetails $itemDetails = null,
    ) {
    }
}
