<?php

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class CompetitiveSummaryBatchResponse extends BaseResponse
{
    /**
     * @param  CompetitiveSummaryResponse[]  $competitiveSummaryResponse The response list of the `competitiveSummaryBatch` operation.
     */
    public function __construct(
        public readonly ?array $competitiveSummaryResponse = null,
    ) {
    }
}
