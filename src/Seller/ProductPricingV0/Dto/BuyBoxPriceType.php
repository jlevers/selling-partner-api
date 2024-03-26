<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class BuyBoxPriceType extends BaseDto
{
    protected static array $attributeMap = [
        'landedPrice' => 'LandedPrice',
        'listingPrice' => 'ListingPrice',
        'shipping' => 'Shipping',
        'points' => 'Points',
    ];

    /**
     * @param  string  $condition  Indicates the condition of the item. For example: New, Used, Collectible, Refurbished, or Club.
     * @param  ?string  $offerType
     * @param  ?int  $quantityTier  Indicates at what quantity this price becomes active.
     * @param  ?string  $quantityDiscountType
     * @param  ?Points  $points
     * @param  ?string  $sellerId  The seller identifier for the offer.
     */
    public function __construct(
        public readonly string $condition,
        public readonly MoneyType $landedPrice,
        public readonly MoneyType $listingPrice,
        public readonly MoneyType $shipping,
        public readonly ?string $offerType = null,
        public readonly ?int $quantityTier = null,
        public readonly ?string $quantityDiscountType = null,
        public readonly ?Points $points = null,
        public readonly ?string $sellerId = null,
    ) {
    }
}
