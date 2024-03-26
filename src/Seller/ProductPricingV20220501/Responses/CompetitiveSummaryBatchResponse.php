<?php

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ProductPricingV20220501\Dto\CompetitiveSummaryResponse;

final class CompetitiveSummaryBatchResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['responses' => [CompetitiveSummaryResponse::class]];

    /**
     * @param  CompetitiveSummaryResponse[]  $responses  The response list of the `competitiveSummaryBatch` operation.
     */
    public function __construct(
        public readonly array $responses,
    ) {
    }
}
