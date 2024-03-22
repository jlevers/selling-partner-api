<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Dto\Order;
use SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Dto\Pagination;

final class OrderList extends BaseResponse
{
    protected static array $complexArrayTypes = ['orders' => [Order::class]];

    /**
     * @param  ?Pagination  $pagination
     * @param  Order[]  $orders
     */
    public function __construct(
        public readonly ?Pagination $pagination = null,
        public readonly ?array $orders = null,
    ) {
    }
}
