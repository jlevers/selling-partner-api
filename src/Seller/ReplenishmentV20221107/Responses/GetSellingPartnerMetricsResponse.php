<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ReplenishmentV20221107\Responses;

use SellingPartnerApi\Response;

final class GetSellingPartnerMetricsResponse extends Response
{
    /**
     * @param  ?string[]  $metrics  The list of metrics requested. If no metric value is provided, data for all of the metrics will be returned.
     */
    public function __construct(
        public readonly ?array $metrics = null,
    ) {
    }
}
