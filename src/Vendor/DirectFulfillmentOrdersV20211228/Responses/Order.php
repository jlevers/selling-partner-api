<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Dto\OrderDetails;

final class Order extends BaseResponse
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
