<?php

namespace SellingPartnerApi\Vendor\OrdersV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OrderStatus extends BaseDto
{
    protected static array $complexArrayTypes = ['itemStatus' => [OrderItemStatus::class]];

    /**
     * @param  string  $purchaseOrderNumber  The buyer's purchase order number for this order. Formatting Notes: 8-character alpha-numeric code.
     * @param  string  $purchaseOrderStatus  The status of the buyer's purchase order for this order.
     * @param  DateTime  $purchaseOrderDate  The date the purchase order was placed. Must be in ISO-8601 date/time format.
     * @param  OrderItemStatus[]  $itemStatus  Detailed description of items order status.
     * @param  ?DateTime  $lastUpdatedDate  The date when the purchase order was last updated. Must be in ISO-8601 date/time format.
     */
    public function __construct(
        public readonly string $purchaseOrderNumber,
        public readonly string $purchaseOrderStatus,
        public readonly \DateTime $purchaseOrderDate,
        public readonly PartyIdentification $sellingParty,
        public readonly PartyIdentification $shipToParty,
        public readonly ?array $itemStatus = null,
        public readonly ?\DateTime $lastUpdatedDate = null,
    ) {
    }
}
