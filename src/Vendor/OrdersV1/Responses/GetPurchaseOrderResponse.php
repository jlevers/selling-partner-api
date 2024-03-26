<?php

namespace SellingPartnerApi\Vendor\OrdersV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Vendor\OrdersV1\Dto\Error;
use SellingPartnerApi\Vendor\OrdersV1\Dto\Order;

final class GetPurchaseOrderResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?Order  $payload
     * @param  Error[]  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?Order $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
