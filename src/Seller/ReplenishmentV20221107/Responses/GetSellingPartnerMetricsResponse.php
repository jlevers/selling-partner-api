<?php

namespace SellingPartnerApi\Seller\ReplenishmentV20221107\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class GetSellingPartnerMetricsResponse extends BaseResponse
{
    /**
     * @param  GetSellingPartnerMetricsResponseMetric[]  $metrics A list of metrics data for the selling partner.
     */
    public function __construct(
        public readonly array $metrics,
    ) {
    }
}
