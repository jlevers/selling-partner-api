<?php

namespace SellingPartnerApi\Seller\SalesV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\SalesV1\Dto\Error;
use SellingPartnerApi\Seller\SalesV1\Dto\OrderMetricsInterval;

final class GetOrderMetricsResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['payload' => [OrderMetricsInterval::class], 'errors' => [Error::class]];

    /**
     * @param  OrderMetricsInterval[]|null  $payload  A set of order metrics, each scoped to a particular time interval.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?array $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
