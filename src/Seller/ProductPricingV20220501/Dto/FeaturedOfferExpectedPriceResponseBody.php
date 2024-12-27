<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use SellingPartnerApi\Dto;

final class FeaturedOfferExpectedPriceResponseBody extends Dto
{
    protected static array $complexArrayTypes = [
        'featuredOfferExpectedPriceResults' => FeaturedOfferExpectedPriceResult::class,
    ];

    /**
     * @param  ?OfferIdentifier  $offerIdentifier  Identifies an offer from a particular seller for a specified ASIN.
     * @param  FeaturedOfferExpectedPriceResult[]|null  $featuredOfferExpectedPriceResults  A list of FOEP results for the requested offer.
     * @param  ?ErrorList  $errors  A list of error responses that are returned when a request is unsuccessful.
     */
    public function __construct(
        public ?OfferIdentifier $offerIdentifier = null,
        public ?array $featuredOfferExpectedPriceResults = null,
        public ?ErrorList $errors = null,
    ) {}
}
