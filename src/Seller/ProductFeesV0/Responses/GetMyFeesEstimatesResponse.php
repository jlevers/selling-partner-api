<?php

namespace SellingPartnerApi\Seller\ProductFeesV0\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ProductFeesV0\Dto\FeesEstimateResult;

final class GetMyFeesEstimatesResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['getMyFeesEstimatesResponse' => [FeesEstimateResult::class]];

    /**
     * @param  FeesEstimateResult[]  $getMyFeesEstimatesResponse  Estimated fees for a list of products.
     */
    public function __construct(
        public readonly array $getMyFeesEstimatesResponse,
    ) {
    }
}
