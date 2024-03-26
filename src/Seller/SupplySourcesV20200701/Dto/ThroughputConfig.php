<?php

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ThroughputConfig extends BaseDto
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
