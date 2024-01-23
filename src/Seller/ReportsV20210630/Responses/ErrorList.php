<?php

namespace SellingPartnerApi\Seller\ReportsV20210630\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ReportsV20210630\Dto\Error;

final class ErrorList extends BaseResponse
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  Error[]  $errors
     */
    public function __construct(
        public readonly array $errors,
    ) {
    }
}
