<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Dto;

use SellingPartnerApi\Dto;

final class ThroughputConfig extends Dto
{
    /**
     * @param  string  $throughputUnit  The throughput unit
     * @param  ?ThroughputCap  $throughputCap  The throughput capacity
     */
    public function __construct(
        public readonly string $throughputUnit,
        public readonly ?ThroughputCap $throughputCap = null,
    ) {
    }
}
