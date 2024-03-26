<?php

namespace SellingPartnerApi\Seller\FBAInventoryV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Granularity extends BaseDto
{
    /**
     * @param  ?string  $granularityType  The granularity type for the inventory aggregation level.
     * @param  ?string  $granularityId  The granularity ID for the specified granularity type. When granularityType is Marketplace, specify the marketplaceId.
     */
    public function __construct(
        public readonly ?string $granularityType = null,
        public readonly ?string $granularityId = null,
    ) {
    }
}
