<?php

namespace SellingPartnerApi\Seller\CatalogItemsV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Item extends BaseDto
{
    protected static array $attributeMap = ['identifiers' => 'Identifiers'];

    protected static array $complexArrayTypes = [
        'attributeSets' => [AttributeSetListType::class],
        'relationships' => [RelationshipType::class],
        'salesRankings' => [SalesRankType::class],
    ];

    /**
     * @param  AttributeSetListType[]  $attributeSets A list of attributes for the item.
     * @param  RelationshipType[]  $relationships A list of variation relationship information, if applicable for the item.
     * @param  SalesRankType[]  $salesRankings A list of sales rank information for the item by category.
     */
    public function __construct(
        public readonly IdentifierType $identifiers,
        public readonly ?array $attributeSets = null,
        public readonly ?array $relationships = null,
        public readonly ?array $salesRankings = null,
    ) {
    }
}
