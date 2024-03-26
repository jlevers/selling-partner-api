<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OfferDetail extends BaseDto
{
    protected static array $attributeMap = [
        'subCondition' => 'SubCondition',
        'shippingTime' => 'ShippingTime',
        'listingPrice' => 'ListingPrice',
        'shipping' => 'Shipping',
        'isFulfilledByAmazon' => 'IsFulfilledByAmazon',
        'myOffer' => 'MyOffer',
        'sellerId' => 'SellerId',
        'conditionNotes' => 'ConditionNotes',
        'sellerFeedbackRating' => 'SellerFeedbackRating',
        'points' => 'Points',
        'shipsFrom' => 'ShipsFrom',
        'primeInformation' => 'PrimeInformation',
        'isBuyBoxWinner' => 'IsBuyBoxWinner',
        'isFeaturedMerchant' => 'IsFeaturedMerchant',
    ];

    protected static array $complexArrayTypes = ['quantityDiscountPrices' => [QuantityDiscountPriceType::class]];

    /**
     * @param  string  $subCondition  The subcondition of the item. Subcondition values: New, Mint, Very Good, Good, Acceptable, Poor, Club, OEM, Warranty, Refurbished Warranty, Refurbished, Open Box, or Other.
     * @param  DetailedShippingTimeType  $shippingTime  The time range in which an item will likely be shipped once an order has been placed.
     * @param  bool  $isFulfilledByAmazon  When true, the offer is fulfilled by Amazon.
     * @param  ?bool  $myOffer  When true, this is the seller's offer.
     * @param  ?string  $offerType
     * @param  ?string  $sellerId  The seller identifier for the offer.
     * @param  ?string  $conditionNotes  Information about the condition of the item.
     * @param  ?SellerFeedbackType  $sellerFeedbackRating  Information about the seller's feedback, including the percentage of positive feedback, and the total number of ratings received.
     * @param  QuantityDiscountPriceType[]|null  $quantityDiscountPrices
     * @param  ?Points  $points
     * @param  ?ShipsFromType  $shipsFrom  The state and country from where the item is shipped.
     * @param  ?PrimeInformationType  $primeInformation  Amazon Prime information.
     * @param  ?bool  $isBuyBoxWinner  When true, the offer is currently in the Buy Box. There can be up to two Buy Box winners at any time per ASIN, one that is eligible for Prime and one that is not eligible for Prime.
     * @param  ?bool  $isFeaturedMerchant  When true, the seller of the item is eligible to win the Buy Box.
     */
    public function __construct(
        public readonly string $subCondition,
        public readonly DetailedShippingTimeType $shippingTime,
        public readonly MoneyType $listingPrice,
        public readonly MoneyType $shipping,
        public readonly bool $isFulfilledByAmazon,
        public readonly ?bool $myOffer = null,
        public readonly ?string $offerType = null,
        public readonly ?string $sellerId = null,
        public readonly ?string $conditionNotes = null,
        public readonly ?SellerFeedbackType $sellerFeedbackRating = null,
        public readonly ?array $quantityDiscountPrices = null,
        public readonly ?Points $points = null,
        public readonly ?ShipsFromType $shipsFrom = null,
        public readonly ?PrimeInformationType $primeInformation = null,
        public readonly ?bool $isBuyBoxWinner = null,
        public readonly ?bool $isFeaturedMerchant = null,
    ) {
    }
}
