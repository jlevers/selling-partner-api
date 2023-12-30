<?php

namespace SellingPartnerApi\Seller\TokensV20210301\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class ErrorList extends BaseResponse
{
    /**
     * @param  Error[]  $errors
     */
    public function __construct(
        public readonly ?array $errors = null,
    ) {
    }
}
