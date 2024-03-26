<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OfferType extends BaseDto
{
    protected static array $attributeMap = [
        'buyingPrice' => 'BuyingPrice',
        'regularPrice' => 'RegularPrice',
        'fulfillmentChannel' => 'FulfillmentChannel',
        'itemCondition' => 'ItemCondition',
        'itemSubCondition' => 'ItemSubCondition',
        'sellerSku' => 'SellerSKU',
    ];

    protected static array $complexArrayTypes = ['quantityDiscountPrices' => [QuantityDiscountPriceType::class]];

    /**
     * @param  string  $fulfillmentChannel  The fulfillment channel for the offer listing. Possible values:
     *
     * * Amazon - Fulfilled by Amazon.
     * * Merchant - Fulfilled by the seller.
     * @param  string  $itemCondition  The item condition for the offer listing. Possible values: New, Used, Collectible, Refurbished, or Club.
     * @param  string  $itemSubCondition  The item subcondition for the offer listing. Possible values: New, Mint, Very Good, Good, Acceptable, Poor, Club, OEM, Warranty, Refurbished Warranty, Refurbished, Open Box, or Other.
     * @param  string  $sellerSku  The seller stock keeping unit (SKU) of the item.
     * @param  ?string  $offerType
     * @param  ?MoneyType  $businessPrice
     * @param  QuantityDiscountPriceType[]|null  $quantityDiscountPrices
     */
    public function __construct(
        public readonly PriceType $buyingPrice,
        public readonly MoneyType $regularPrice,
        public readonly string $fulfillmentChannel,
        public readonly string $itemCondition,
        public readonly string $itemSubCondition,
        public readonly string $sellerSku,
        public readonly ?string $offerType = null,
        public readonly ?MoneyType $businessPrice = null,
        public readonly ?array $quantityDiscountPrices = null,
    ) {
    }
}
