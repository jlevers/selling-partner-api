<?php

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FeaturedOffer extends BaseDto
{
    /**
     * @param  OfferIdentifier  $offerIdentifier  Identifies an offer from a particular seller on an ASIN.
     * @param  ?string  $condition  The condition of the item.
     * @param  ?Price  $price
     */
    public function __construct(
        public readonly OfferIdentifier $offerIdentifier,
        public readonly ?string $condition = null,
        public readonly ?Price $price = null,
    ) {
    }
}
