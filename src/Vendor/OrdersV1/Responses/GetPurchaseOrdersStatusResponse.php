<?php

namespace SellingPartnerApi\Vendor\OrdersV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Vendor\OrdersV1\Dto\Error;
use SellingPartnerApi\Vendor\OrdersV1\Dto\OrderListStatus;

final class GetPurchaseOrdersStatusResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?OrderListStatus  $payload
     * @param  Error[]  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?OrderListStatus $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
