<?php

namespace SellingPartnerApi\Seller\TokensV20210301\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\TokensV20210301\Dto\Error;

final class ErrorList extends BaseResponse
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  Error[]|null  $errors
     */
    public function __construct(
        public readonly ?array $errors = null,
    ) {
    }
}
