<?php

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class Errors extends BaseResponse
{
    /**
     * @param  Error[]  $error A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?array $error = null,
    ) {
    }
}
