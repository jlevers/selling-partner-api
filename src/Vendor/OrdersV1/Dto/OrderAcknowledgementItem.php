<?php

namespace SellingPartnerApi\Vendor\OrdersV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OrderAcknowledgementItem extends BaseDto
{
    protected static array $complexArrayTypes = ['itemAcknowledgements' => [OrderItemAcknowledgement::class]];

    /**
     * @param  ItemQuantity  $orderedQuantity  Details of quantity ordered.
     * @param  ?string  $itemSequenceNumber  Line item sequence number for the item.
     * @param  ?string  $amazonProductIdentifier  Amazon Standard Identification Number (ASIN) of an item.
     * @param  ?string  $vendorProductIdentifier  The vendor selected product identification of the item. Should be the same as was sent in the purchase order.
     * @param  ?Money  $netCost  An amount of money, including units in the form of currency.
     * @param  ?Money  $listPrice  An amount of money, including units in the form of currency.
     * @param  ?string  $discountMultiplier  The discount multiplier that should be applied to the price if a vendor sells books with a list price. This is a multiplier factor to arrive at a final discounted price. A multiplier of .90 would be the factor if a 10% discount is given.
     * @param  OrderItemAcknowledgement[]  $itemAcknowledgements  This is used to indicate acknowledged quantity.
     */
    public function __construct(
        public readonly ItemQuantity $orderedQuantity,
        public readonly ?string $itemSequenceNumber = null,
        public readonly ?string $amazonProductIdentifier = null,
        public readonly ?string $vendorProductIdentifier = null,
        public readonly ?Money $netCost = null,
        public readonly ?Money $listPrice = null,
        public readonly ?string $discountMultiplier = null,
        public readonly ?array $itemAcknowledgements = null,
    ) {
    }
}
