<?php

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FeaturedOfferSegment extends BaseDto
{
    /**
     * @param  string  $customerMembership The customer membership type that make up this segment
     * @param  SegmentDetails  $segmentDetails The details about the segment.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly string $customerMembership,
        public readonly SegmentDetails $segmentDetails,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
