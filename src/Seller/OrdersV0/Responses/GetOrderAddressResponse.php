<?php

namespace SellingPartnerApi\Seller\OrdersV0\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\OrdersV0\Dto\Error;
use SellingPartnerApi\Seller\OrdersV0\Dto\OrderAddress;

final class GetOrderAddressResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?OrderAddress  $payload  The shipping address for the order.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?OrderAddress $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
