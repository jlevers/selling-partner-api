<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use SellingPartnerApi\Dto;

final class FeaturedOfferExpectedPriceResponseBody extends Dto
{
    protected static array $complexArrayTypes = [
        'featuredOfferExpectedPriceResults' => [FeaturedOfferExpectedPriceResult::class],
        'errors' => [Error::class],
    ];

    /**
     * @param  OfferIdentifier  $offerIdentifier  Identifies an offer from a particular seller on an ASIN.
     * @param  FeaturedOfferExpectedPriceResult[]|null  $featuredOfferExpectedPriceResults  A list of featured offer expected price results for the requested offer.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly OfferIdentifier $offerIdentifier,
        public readonly ?array $featuredOfferExpectedPriceResults = null,
        public readonly ?array $errors = null,
    ) {
    }
}
