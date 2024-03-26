<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OrderItemAcknowledgement extends BaseDto
{
    /**
     * @param  string  $itemSequenceNumber  Line item sequence number for the item.
     * @param  ItemQuantity  $acknowledgedQuantity  Details of quantity ordered.
     * @param  ?string  $buyerProductIdentifier  Buyer's standard identification number (ASIN) of an item.
     * @param  ?string  $vendorProductIdentifier  The vendor selected product identification of the item. Should be the same as was provided in the purchase order.
     */
    public function __construct(
        public readonly string $itemSequenceNumber,
        public readonly ItemQuantity $acknowledgedQuantity,
        public readonly ?string $buyerProductIdentifier = null,
        public readonly ?string $vendorProductIdentifier = null,
    ) {
    }
}
