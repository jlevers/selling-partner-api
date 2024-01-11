<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Product extends BaseDto
{
    protected static array $complexArrayTypes = ['salesRankings' => [SalesRankType::class], 'offers' => [OfferType::class]];

    /**
     * @param  IdentifierType  $identifiers Specifies the identifiers used to uniquely identify an item.
     * @param  ?mixed[][]  $attributeSets A list of product attributes if they are applicable to the product that is returned.
     * @param  ?mixed[][]  $relationships A list that contains product variation information, if applicable.
     * @param  ?CompetitivePricingType  $competitivePricing Competitive pricing information for the item.
     * @param  SalesRankType[]  $salesRankings A list of sales rank information for the item, by category.
     * @param  OfferType[]  $offers A list of offers.
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
