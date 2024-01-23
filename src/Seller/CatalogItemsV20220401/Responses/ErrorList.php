<?php

namespace SellingPartnerApi\Seller\CatalogItemsV20220401\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\CatalogItemsV20220401\Dto\Error;

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
