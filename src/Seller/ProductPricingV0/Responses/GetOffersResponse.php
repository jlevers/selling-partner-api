<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ProductPricingV0\Dto\GetOffersResult;

final class GetOffersResponse extends BaseResponse
{
    /**
     * @param  ?GetOffersResult  $getOffersResult
     * @param  Error[]  $error A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?GetOffersResult $getOffersResult = null,
        public readonly ?array $error = null,
    ) {
    }
}
