<?php

namespace SellingPartnerApi\Seller\CatalogItemsV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Item extends BaseDto
{
    protected static array $attributeMap = [
        'identifiers' => 'Identifiers',
        'attributeSets' => 'AttributeSets',
        'relationships' => 'Relationships',
        'salesRankings' => 'SalesRankings',
    ];

    protected static array $complexArrayTypes = [
        'attributeSets' => [AttributeSetListType::class],
        'relationships' => [RelationshipType::class],
        'salesRankings' => [SalesRankType::class],
    ];

    /**
     * @param  AttributeSetListType[]|null  $attributeSets  A list of attributes for the item.
     * @param  RelationshipType[]|null  $relationships  A list of variation relationship information, if applicable for the item.
     * @param  SalesRankType[]|null  $salesRankings  A list of sales rank information for the item by category.
     */
    public function __construct(
        public readonly IdentifierType $identifiers,
        public readonly ?array $attributeSets = null,
        public readonly ?array $relationships = null,
        public readonly ?array $salesRankings = null,
    ) {
    }
}
