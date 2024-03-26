<?php

namespace SellingPartnerApi\Vendor\OrdersV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OrderItemStatus extends BaseDto
{
    /**
     * @param  string  $itemSequenceNumber  Numbering of the item on the purchase order. The first item will be 1, the second 2, and so on.
     * @param  ?string  $buyerProductIdentifier  Buyer's Standard Identification Number (ASIN) of an item.
     * @param  ?string  $vendorProductIdentifier  The vendor selected product identification of the item.
     * @param  ?Money  $netCost  An amount of money, including units in the form of currency.
     * @param  ?Money  $listPrice  An amount of money, including units in the form of currency.
     * @param  ?OrderedQuantity  $orderedQuantity  Ordered quantity information.
     * @param  ?AcknowledgementStatus  $acknowledgementStatus  Acknowledgement status information.
     * @param  ?ReceivingStatus  $receivingStatus  Item receive status at the buyer's warehouse.
     */
    public function __construct(
        public readonly string $itemSequenceNumber,
        public readonly ?string $buyerProductIdentifier = null,
        public readonly ?string $vendorProductIdentifier = null,
        public readonly ?Money $netCost = null,
        public readonly ?Money $listPrice = null,
        public readonly ?OrderedQuantity $orderedQuantity = null,
        public readonly ?AcknowledgementStatus $acknowledgementStatus = null,
        public readonly ?ReceivingStatus $receivingStatus = null,
    ) {
    }
}
