<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use SellingPartnerApi\Dto;

final class PriceType extends Dto
{
    protected static array $attributeMap = [
        'listingPrice' => 'ListingPrice',
        'landedPrice' => 'LandedPrice',
        'shipping' => 'Shipping',
        'points' => 'Points',
    ];

    /**
     * @param  ?MoneyType  $landedPrice
     * @param  ?MoneyType  $shipping
     * @param  ?Points  $points
     */
    public function __construct(
        public readonly MoneyType $listingPrice,
        public readonly ?MoneyType $landedPrice = null,
        public readonly ?MoneyType $shipping = null,
        public readonly ?Points $points = null,
    ) {
    }
}
