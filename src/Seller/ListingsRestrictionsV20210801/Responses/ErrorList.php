<?php

namespace SellingPartnerApi\Seller\ListingsRestrictionsV20210801\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ListingsRestrictionsV20210801\Dto\Error;

final class ErrorList extends BaseResponse
{
    protected static array $complexArrayTypes = ['errorList' => [Error::class]];

    /**
     * @param  Error[]  $errorList  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly array $errorList,
    ) {
    }
}
