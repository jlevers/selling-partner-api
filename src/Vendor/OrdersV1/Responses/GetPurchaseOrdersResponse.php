<?php

namespace SellingPartnerApi\Vendor\OrdersV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Vendor\OrdersV1\Dto\OrderList;

final class GetPurchaseOrdersResponse extends BaseResponse
{
    /**
     * @param  ?OrderList  $orderList
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?OrderList $orderList = null,
        public readonly ?array $errors = null,
    ) {
    }
}
