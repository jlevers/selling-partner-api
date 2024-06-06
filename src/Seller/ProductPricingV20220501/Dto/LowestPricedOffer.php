<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use SellingPartnerApi\Dto;

final class LowestPricedOffer extends Dto
{
    protected static array $complexArrayTypes = ['offers' => [Offer::class]];

    /**
     * @param  LowestPricedOffersInput  $lowestPricedOffersInput  The input required for building the `LowestPricedOffers` data in the response.
     * @param  Offer[]  $offers  A list of up to 20 lowest priced offers that match the criteria specified in the `lowestPricedOffersInput` parameter.
     */
    public function __construct(
        public readonly LowestPricedOffersInput $lowestPricedOffersInput,
        public readonly array $offers,
    ) {
    }
}
