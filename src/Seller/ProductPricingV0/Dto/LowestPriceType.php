<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class LowestPriceType extends BaseDto
{
    protected static array $attributeMap = [
        'listingPrice' => 'ListingPrice',
        'landedPrice' => 'LandedPrice',
        'shipping' => 'Shipping',
        'points' => 'Points',
    ];

    /**
     * @param  string  $condition  Indicates the condition of the item. For example: New, Used, Collectible, Refurbished, or Club.
     * @param  string  $fulfillmentChannel  Indicates whether the item is fulfilled by Amazon or by the seller.
     * @param  ?string  $offerType
     * @param  ?int  $quantityTier  Indicates at what quantity this price becomes active.
     * @param  ?string  $quantityDiscountType
     * @param  ?MoneyType  $landedPrice
     * @param  ?MoneyType  $shipping
     * @param  ?Points  $points
     */
    public function __construct(
        public readonly string $condition,
        public readonly string $fulfillmentChannel,
        public readonly MoneyType $listingPrice,
        public readonly ?string $offerType = null,
        public readonly ?int $quantityTier = null,
        public readonly ?string $quantityDiscountType = null,
        public readonly ?MoneyType $landedPrice = null,
        public readonly ?MoneyType $shipping = null,
        public readonly ?Points $points = null,
    ) {
    }
}
