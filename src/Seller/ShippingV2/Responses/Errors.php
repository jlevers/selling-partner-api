<?php

namespace SellingPartnerApi\Seller\ShippingV2\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ShippingV2\Dto\Error;

final class Errors extends BaseResponse
{
    protected static array $attributeMap = ['Errors' => null];

    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  Error[]  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly array $errors,
    ) {
    }
}
