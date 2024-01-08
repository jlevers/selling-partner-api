<?php

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FeaturedOfferExpectedPriceResponseBody extends BaseDto
{
    protected static array $complexArrayTypes = [
        'featuredOfferExpectedPriceResults' => [FeaturedOfferExpectedPriceResult::class],
        'errors' => [Error::class],
    ];

    /**
     * @param  OfferIdentifier  $offerIdentifier Identifies an offer from a particular seller on an ASIN.
     * @param  FeaturedOfferExpectedPriceResult[]  $featuredOfferExpectedPriceResults A list of featured offer expected price results for the requested offer.
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly OfferIdentifier $offerIdentifier,
        public readonly ?array $featuredOfferExpectedPriceResults = null,
        public readonly ?array $errors = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
