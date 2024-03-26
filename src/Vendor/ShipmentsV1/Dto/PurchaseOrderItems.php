<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PurchaseOrderItems extends BaseDto
{
    /**
     * @param  string  $itemSequenceNumber  Item sequence number for the item. The first item will be 001, the second 002, and so on. This number is used as a reference to refer to this item from the carton or pallet level.
     * @param  ItemQuantity  $shippedQuantity  Details of item quantity.
     * @param  ?string  $buyerProductIdentifier  Amazon Standard Identification Number (ASIN) for a SKU
     * @param  ?string  $vendorProductIdentifier  The vendor selected product identification of the item. Should be the same as was sent in the purchase order.
     * @param  ?Money  $maximumRetailPrice  An amount of money, including units in the form of currency.
     */
    public function __construct(
        public readonly string $itemSequenceNumber,
        public readonly ItemQuantity $shippedQuantity,
        public readonly ?string $buyerProductIdentifier = null,
        public readonly ?string $vendorProductIdentifier = null,
        public readonly ?Money $maximumRetailPrice = null,
    ) {
    }
}
