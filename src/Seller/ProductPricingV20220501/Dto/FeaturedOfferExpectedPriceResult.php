<?php

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FeaturedOfferExpectedPriceResult extends BaseDto
{
    /**
     * @param  string  $resultStatus  The status of the featured offer expected price computation. Possible values include `VALID_FOEP`, `NO_COMPETING_OFFER`, `OFFER_NOT_ELIGIBLE`, `OFFER_NOT_FOUND`, `ASIN_NOT_ELIGIBLE`. Additional values may be added in the future.
     * @param  ?FeaturedOfferExpectedPrice  $featuredOfferExpectedPrice  The item price at or below which the target offer may be featured.
     * @param  ?FeaturedOffer  $competingFeaturedOffer
     * @param  ?FeaturedOffer  $currentFeaturedOffer
     */
    public function __construct(
        public readonly string $resultStatus,
        public readonly ?FeaturedOfferExpectedPrice $featuredOfferExpectedPrice = null,
        public readonly ?FeaturedOffer $competingFeaturedOffer = null,
        public readonly ?FeaturedOffer $currentFeaturedOffer = null,
    ) {
    }
}
