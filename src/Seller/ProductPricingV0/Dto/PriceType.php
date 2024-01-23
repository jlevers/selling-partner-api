<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PriceType extends BaseDto
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
