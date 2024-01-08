<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OfferListingCountType extends BaseDto
{
    /**
     * @param  int  $count The number of offer listings.
     * @param  string  $condition The condition of the item.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly int $count,
        public readonly string $condition,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
