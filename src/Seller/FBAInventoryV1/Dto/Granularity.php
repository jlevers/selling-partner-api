<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInventoryV1\Dto;

use SellingPartnerApi\Dto;

final class Granularity extends Dto
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
