<?php

namespace SellingPartnerApi\Seller\OrdersV0\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\OrdersV0\Dto\Error;
use SellingPartnerApi\Seller\OrdersV0\Dto\OrdersList;

final class GetOrdersResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?OrdersList  $payload  A list of orders along with additional information to make subsequent API calls.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?OrdersList $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
