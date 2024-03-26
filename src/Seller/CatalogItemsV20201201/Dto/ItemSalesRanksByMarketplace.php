<?php

namespace SellingPartnerApi\Seller\CatalogItemsV20201201\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ItemSalesRanksByMarketplace extends BaseDto
{
    protected static array $complexArrayTypes = ['ranks' => [ItemSalesRank::class]];

    /**
     * @param  string  $marketplaceId  Amazon marketplace identifier.
     * @param  ItemSalesRank[]  $ranks  Sales ranks of an Amazon catalog item for an Amazon marketplace.
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly array $ranks,
    ) {
    }
}
