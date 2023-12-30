<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Vendor\DirectFulfillmentOrdersV1\Dto\OrderList;

final class GetOrdersResponse extends BaseResponse
{
    /**
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?OrderList $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
