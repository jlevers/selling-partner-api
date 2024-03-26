<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PackedItem extends BaseDto
{
    /**
     * @param  int  $itemSequenceNumber  Item Sequence Number for the item. This must be the same value as sent in the order for a given item.
     * @param  ItemQuantity  $packedQuantity  Details of item quantity.
     * @param  ?string  $buyerProductIdentifier  Buyer's Standard Identification Number (ASIN) of an item. Either buyerProductIdentifier or vendorProductIdentifier is required.
     * @param  ?int  $pieceNumber  The piece number of the item in this container. This is required when the item is split across different containers.
     * @param  ?string  $vendorProductIdentifier  The vendor selected product identification of the item. Should be the same as was sent in the Purchase Order, like SKU Number.
     */
    public function __construct(
        public readonly int $itemSequenceNumber,
        public readonly ItemQuantity $packedQuantity,
        public readonly ?string $buyerProductIdentifier = null,
        public readonly ?int $pieceNumber = null,
        public readonly ?string $vendorProductIdentifier = null,
    ) {
    }
}
