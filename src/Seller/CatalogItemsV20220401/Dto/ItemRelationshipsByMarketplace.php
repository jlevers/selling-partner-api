<?php

namespace SellingPartnerApi\Seller\CatalogItemsV20220401\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ItemRelationshipsByMarketplace extends BaseDto
{
    protected static array $complexArrayTypes = ['relationships' => [ItemRelationship::class]];

    /**
     * @param  string  $marketplaceId  Amazon marketplace identifier.
     * @param  ItemRelationship[]  $relationships  Relationships for the item.
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly array $relationships,
    ) {
    }
}
