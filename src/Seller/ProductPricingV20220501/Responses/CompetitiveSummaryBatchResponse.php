<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\ProductPricingV20220501\Dto\CompetitiveSummaryResponse;

final class CompetitiveSummaryBatchResponse extends Response
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
