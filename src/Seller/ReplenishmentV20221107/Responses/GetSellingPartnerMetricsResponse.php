<?php

namespace SellingPartnerApi\Seller\ReplenishmentV20221107\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class GetSellingPartnerMetricsResponse extends BaseResponse
{
    /**
     * @param  ?string[]  $metrics  The list of metrics requested. If no metric value is provided, data for all of the metrics will be returned.
     */
    public function __construct(
        public readonly ?array $metrics = null,
    ) {
    }
}
