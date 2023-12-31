<?php

namespace SellingPartnerApi\Seller\ShippingV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ShippingV1\Dto\GetRatesResult;

final class GetRatesResponse extends BaseResponse
{
    /**
     * @param  GetRatesResult  $payload The payload schema for the getRates operation.
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly GetRatesResult $payload,
        public readonly array $errors,
    ) {
    }
}
