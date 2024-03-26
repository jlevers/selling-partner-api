<?php

namespace SellingPartnerApi\Seller\CatalogItemsV20220401\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ItemSalesRanksByMarketplace extends BaseDto
{
    protected static array $complexArrayTypes = [
        'classificationRanks' => [ItemClassificationSalesRank::class],
        'displayGroupRanks' => [ItemDisplayGroupSalesRank::class],
    ];

    /**
     * @param  string  $marketplaceId  Amazon marketplace identifier.
     * @param  ItemClassificationSalesRank[]|null  $classificationRanks  Sales ranks of an Amazon catalog item for an Amazon marketplace by classification.
     * @param  ItemDisplayGroupSalesRank[]|null  $displayGroupRanks  Sales ranks of an Amazon catalog item for an Amazon marketplace by website display group.
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly ?array $classificationRanks = null,
        public readonly ?array $displayGroupRanks = null,
    ) {
    }
}
