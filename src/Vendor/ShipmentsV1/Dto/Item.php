<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Item extends BaseDto
{
    /**
     * @param  string  $itemSequenceNumber  Item sequence number for the item. The first item will be 001, the second 002, and so on. This number is used as a reference to refer to this item from the carton or pallet level.
     * @param  ItemQuantity  $shippedQuantity  Details of item quantity.
     * @param  ?string  $amazonProductIdentifier  Buyer Standard Identification Number (ASIN) of an item.
     * @param  ?string  $vendorProductIdentifier  The vendor selected product identification of the item. Should be the same as was sent in the purchase order.
     * @param  ?ItemDetails  $itemDetails  Item details for be provided for every item in shipment at either the item or carton or pallet level, whichever is appropriate.
     */
    public function __construct(
        public readonly string $itemSequenceNumber,
        public readonly ItemQuantity $shippedQuantity,
        public readonly ?string $amazonProductIdentifier = null,
        public readonly ?string $vendorProductIdentifier = null,
        public readonly ?ItemDetails $itemDetails = null,
    ) {
    }
}
