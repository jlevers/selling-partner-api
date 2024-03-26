<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Item extends BaseDto
{
    /**
     * @param  int  $itemSequenceNumber  Item Sequence Number for the item. This must be the same value as sent in order for a given item.
     * @param  ItemQuantity  $shippedQuantity  Details of item quantity.
     * @param  ?string  $buyerProductIdentifier  Buyer's Standard Identification Number (ASIN) of an item. Either buyerProductIdentifier or vendorProductIdentifier is required.
     * @param  ?string  $vendorProductIdentifier  The vendor selected product identification of the item. Should be the same as was sent in the purchase order, like SKU Number.
     */
    public function __construct(
        public readonly int $itemSequenceNumber,
        public readonly ItemQuantity $shippedQuantity,
        public readonly ?string $buyerProductIdentifier = null,
        public readonly ?string $vendorProductIdentifier = null,
    ) {
    }
}
