<?php

namespace SellingPartnerApi\Seller\FBAInventoryV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ResearchingQuantity extends BaseDto
{
    protected static array $complexArrayTypes = ['researchingQuantityBreakdown' => [ResearchingQuantityEntry::class]];

    /**
     * @param  ?int  $totalResearchingQuantity  The total number of units currently being researched in Amazon's fulfillment network.
     * @param  ResearchingQuantityEntry[]|null  $researchingQuantityBreakdown  A list of quantity details for items currently being researched.
     */
    public function __construct(
        public readonly ?int $totalResearchingQuantity = null,
        public readonly ?array $researchingQuantityBreakdown = null,
    ) {
    }
}
