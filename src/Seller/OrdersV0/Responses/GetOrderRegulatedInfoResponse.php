<?php

namespace SellingPartnerApi\Seller\OrdersV0\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\OrdersV0\Dto\Error;
use SellingPartnerApi\Seller\OrdersV0\Dto\OrderRegulatedInfo;

final class GetOrderRegulatedInfoResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?OrderRegulatedInfo  $payload  The order's regulated information along with its verification status.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?OrderRegulatedInfo $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
