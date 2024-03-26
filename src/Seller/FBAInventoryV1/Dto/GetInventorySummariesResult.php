<?php

namespace SellingPartnerApi\Seller\FBAInventoryV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GetInventorySummariesResult extends BaseDto
{
    protected static array $complexArrayTypes = ['inventorySummaries' => [InventorySummary::class]];

    /**
     * @param  Granularity  $granularity  Describes a granularity at which inventory data can be aggregated. For example, if you use Marketplace granularity, the fulfillable quantity will reflect inventory that could be fulfilled in the given marketplace.
     * @param  InventorySummary[]  $inventorySummaries  A list of inventory summaries.
     */
    public function __construct(
        public readonly Granularity $granularity,
        public readonly array $inventorySummaries,
    ) {
    }
}
