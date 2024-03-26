<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Product extends BaseDto
{
    protected static array $attributeMap = [
        'identifiers' => 'Identifiers',
        'attributeSets' => 'AttributeSets',
        'relationships' => 'Relationships',
        'competitivePricing' => 'CompetitivePricing',
        'salesRankings' => 'SalesRankings',
        'offers' => 'Offers',
    ];

    protected static array $complexArrayTypes = ['salesRankings' => [SalesRankType::class], 'offers' => [OfferType::class]];

    /**
     * @param  IdentifierType  $identifiers  Specifies the identifiers used to uniquely identify an item.
     * @param  ?mixed[]  $attributeSets
     * @param  ?mixed[]  $relationships
     * @param  ?CompetitivePricingType  $competitivePricing  Competitive pricing information for the item.
     * @param  SalesRankType[]|null  $salesRankings  A list of sales rank information for the item, by category.
     * @param  OfferType[]|null  $offers  A list of offers.
     */
    public function __construct(
        public readonly IdentifierType $identifiers,
        public readonly ?array $attributeSets = null,
        public readonly ?array $relationships = null,
        public readonly ?CompetitivePricingType $competitivePricing = null,
        public readonly ?array $salesRankings = null,
        public readonly ?array $offers = null,
    ) {
    }
}
