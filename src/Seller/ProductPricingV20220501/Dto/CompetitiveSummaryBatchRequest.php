<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use SellingPartnerApi\Dto;

final class CompetitiveSummaryBatchRequest extends Dto
{
    protected static array $complexArrayTypes = ['requests' => [CompetitiveSummaryRequest::class]];

    /**
     * @param  CompetitiveSummaryRequest[]  $requests  A batched list of `competitiveSummary` requests.
     */
    public function __construct(
        public readonly array $requests,
    ) {
    }
}
