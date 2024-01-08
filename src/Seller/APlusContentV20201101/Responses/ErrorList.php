<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class ErrorList extends BaseResponse
{
    /**
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?array $errors = null,
    ) {
    }
}
