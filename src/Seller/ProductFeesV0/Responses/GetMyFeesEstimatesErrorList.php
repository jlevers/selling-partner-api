<?php

namespace SellingPartnerApi\Seller\ProductFeesV0\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ProductFeesV0\Dto\Error;

final class GetMyFeesEstimatesErrorList extends BaseResponse
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
