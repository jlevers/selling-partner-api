<?php

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FeaturedBuyingOption extends BaseDto
{
    protected static array $complexArrayTypes = ['segmentedFeaturedOffers' => [SegmentedFeaturedOffer::class]];

    /**
     * @param  string  $buyingOptionType  The buying option type of the featured offer. This field represents the buying options that a customer sees on the detail page. For example, B2B, Fresh, and Subscribe n Save. Currently supports `NEW`
     * @param  SegmentedFeaturedOffer[]  $segmentedFeaturedOffers  A list of segmented featured offers for the current buying option type. A segment can be considered as a group of regional contexts that all have the same featured offer. A regional context is a combination of factors such as customer type, region or postal code and buying option.
     */
    public function __construct(
        public readonly string $buyingOptionType,
        public readonly array $segmentedFeaturedOffers,
    ) {
    }
}
