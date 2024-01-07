<?php

namespace SellingPartnerApi\Seller\ProductFeesV0\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class GetMyFeesEstimatesErrorList extends BaseResponse
{
    /**
     * @param  ?Error[]  $errors
     */
    public function __construct(
        public readonly ?array $errors = null,
    ) {
    }
}
