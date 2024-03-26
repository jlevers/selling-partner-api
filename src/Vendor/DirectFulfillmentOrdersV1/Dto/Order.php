<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Order extends BaseDto
{
    /**
     * @param  string  $purchaseOrderNumber  The purchase order number for this order. Formatting Notes: alpha-numeric code.
     * @param  ?OrderDetails  $orderDetails  Details of an order.
     */
    public function __construct(
        public readonly string $purchaseOrderNumber,
        public readonly ?OrderDetails $orderDetails = null,
    ) {
    }
}
