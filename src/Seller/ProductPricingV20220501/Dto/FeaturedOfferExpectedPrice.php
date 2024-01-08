<?php

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FeaturedOfferExpectedPrice extends BaseDto
{
    /**
     * @param  ?Points  $points
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly MoneyType $listingPrice,
        public readonly ?Points $points = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
