<?php

namespace SellingPartnerApi\Seller\OrdersV0\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\OrdersV0\Dto\Error;
use SellingPartnerApi\Seller\OrdersV0\Dto\OrderItemsBuyerInfoList;

final class GetOrderItemsBuyerInfoResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?OrderItemsBuyerInfoList  $payload  A single order item's buyer information list with the order ID.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?OrderItemsBuyerInfoList $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
