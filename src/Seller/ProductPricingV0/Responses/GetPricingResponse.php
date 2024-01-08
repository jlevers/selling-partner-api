<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class GetPricingResponse extends BaseResponse
{
    /**
     * @param  Price[]  $price
     * @param  Error[]  $error A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?array $price = null,
        public readonly ?array $error = null,
    ) {
    }
}
