<?php

namespace SellingPartnerApi\Seller\SalesV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class GetOrderMetricsResponse extends BaseResponse
{
    /**
     * @param  OrderMetricsInterval[]  $payload A set of order metrics, each scoped to a particular time interval.
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?array $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
