<?php

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SegmentedFeaturedOffer extends BaseDto
{
    protected static array $complexArrayTypes = [
        'shippingOptions' => [ShippingOption::class],
        'featuredOfferSegments' => [FeaturedOfferSegment::class],
    ];

    /**
     * @param  string  $sellerId The seller identifier for the offer.
     * @param  string  $condition The condition of the item.
     * @param  string  $fulfillmentType Indicates whether the item is fulfilled by Amazon or by the seller (merchant).
     * @param  ShippingOption[]  $shippingOptions A list of shipping options associated with this offer
     * @param  ?Points  $points
     * @param  FeaturedOfferSegment[]  $featuredOfferSegments The list of segment information in which the offer is featured.
     */
    public function __construct(
        public readonly string $sellerId,
        public readonly string $condition,
        public readonly string $fulfillmentType,
        public readonly MoneyType $listingPrice,
        public readonly ?array $shippingOptions = null,
        public readonly ?Points $points = null,
        public readonly ?array $featuredOfferSegments = null,
    ) {
    }
}
