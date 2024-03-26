<?php

namespace SellingPartnerApi\Vendor\OrdersV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OrderItem extends BaseDto
{
    /**
     * @param  string  $itemSequenceNumber  Numbering of the item on the purchase order. The first item will be 1, the second 2, and so on.
     * @param  ItemQuantity  $orderedQuantity  Details of quantity ordered.
     * @param  bool  $isBackOrderAllowed  When true, we will accept backorder confirmations for this item.
     * @param  ?string  $amazonProductIdentifier  Amazon Standard Identification Number (ASIN) of an item.
     * @param  ?string  $vendorProductIdentifier  The vendor selected product identification of the item.
     * @param  ?Money  $netCost  An amount of money, including units in the form of currency.
     * @param  ?Money  $listPrice  An amount of money, including units in the form of currency.
     */
    public function __construct(
        public readonly string $itemSequenceNumber,
        public readonly ItemQuantity $orderedQuantity,
        public readonly bool $isBackOrderAllowed,
        public readonly ?string $amazonProductIdentifier = null,
        public readonly ?string $vendorProductIdentifier = null,
        public readonly ?Money $netCost = null,
        public readonly ?Money $listPrice = null,
    ) {
    }
}
