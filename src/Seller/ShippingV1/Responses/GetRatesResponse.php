<?php

namespace SellingPartnerApi\Seller\ShippingV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ShippingV1\Dto\Error;
use SellingPartnerApi\Seller\ShippingV1\Dto\GetRatesResult;

final class GetRatesResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?GetRatesResult  $payload  The payload schema for the getRates operation.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?GetRatesResult $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
