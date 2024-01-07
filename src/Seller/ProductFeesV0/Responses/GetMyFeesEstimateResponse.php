<?php

namespace SellingPartnerApi\Seller\ProductFeesV0\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ProductFeesV0\Dto\GetMyFeesEstimateResult;

final class GetMyFeesEstimateResponse extends BaseResponse
{
    /**
     * @param  ?GetMyFeesEstimateResult  $getMyFeesEstimateResult Response schema.
     * @param  ?Error[]  $errorList A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?GetMyFeesEstimateResult $getMyFeesEstimateResult = null,
        public readonly ?array $errorList = null,
    ) {
    }
}
