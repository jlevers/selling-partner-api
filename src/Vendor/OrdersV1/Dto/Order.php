<?php

namespace SellingPartnerApi\Vendor\OrdersV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Order extends BaseDto
{
    /**
     * @param  string  $purchaseOrderNumber  The purchase order number for this order. Formatting Notes: 8-character alpha-numeric code.
     * @param  string  $purchaseOrderState  This field will contain the current state of the purchase order.
     * @param  ?OrderDetails  $orderDetails  Details of an order.
     */
    public function __construct(
        public readonly string $purchaseOrderNumber,
        public readonly string $purchaseOrderState,
        public readonly ?OrderDetails $orderDetails = null,
    ) {
    }
}
