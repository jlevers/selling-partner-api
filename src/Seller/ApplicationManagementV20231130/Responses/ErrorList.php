<?php

namespace SellingPartnerApi\Seller\ApplicationManagementV20231130\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ApplicationManagementV20231130\Dto\Error;

final class ErrorList extends BaseResponse
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  Error[]  $errors  array of errors
     */
    public function __construct(
        public readonly array $errors,
    ) {
    }
}
