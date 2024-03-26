<?php

namespace SellingPartnerApi\Seller\ProductFeesV0\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ProductFeesV0\Dto\Error;
use SellingPartnerApi\Seller\ProductFeesV0\Dto\GetMyFeesEstimateResult;

final class GetMyFeesEstimateResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?GetMyFeesEstimateResult  $payload  Response schema.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?GetMyFeesEstimateResult $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
