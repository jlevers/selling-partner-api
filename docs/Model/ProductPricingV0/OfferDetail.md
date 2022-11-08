## OfferDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**my_offer** | **bool** | When true, this is the seller's offer. | [optional]
**offer_type** | [**\SellingPartnerApi\Model\ProductPricingV0\OfferCustomerType**](OfferCustomerType.md) |  | [optional]
**sub_condition** | **string** | The subcondition of the item. Subcondition values: New, Mint, Very Good, Good, Acceptable, Poor, Club, OEM, Warranty, Refurbished Warranty, Refurbished, Open Box, or Other. |
**seller_id** | **string** | The seller identifier for the offer. | [optional]
**condition_notes** | **string** | Information about the condition of the item. | [optional]
**seller_feedback_rating** | [**\SellingPartnerApi\Model\ProductPricingV0\SellerFeedbackType**](SellerFeedbackType.md) |  | [optional]
**shipping_time** | [**\SellingPartnerApi\Model\ProductPricingV0\DetailedShippingTimeType**](DetailedShippingTimeType.md) |  |
**listing_price** | [**\SellingPartnerApi\Model\ProductPricingV0\MoneyType**](MoneyType.md) |  |
**quantity_discount_prices** | [**\SellingPartnerApi\Model\ProductPricingV0\QuantityDiscountPriceType[]**](QuantityDiscountPriceType.md) |  | [optional]
**points** | [**\SellingPartnerApi\Model\ProductPricingV0\Points**](Points.md) |  | [optional]
**shipping** | [**\SellingPartnerApi\Model\ProductPricingV0\MoneyType**](MoneyType.md) |  |
**ships_from** | [**\SellingPartnerApi\Model\ProductPricingV0\ShipsFromType**](ShipsFromType.md) |  | [optional]
**is_fulfilled_by_amazon** | **bool** | When true, the offer is fulfilled by Amazon. |
**prime_information** | [**\SellingPartnerApi\Model\ProductPricingV0\PrimeInformationType**](PrimeInformationType.md) |  | [optional]
**is_buy_box_winner** | **bool** | When true, the offer is currently in the Buy Box. There can be up to two Buy Box winners at any time per ASIN, one that is eligible for Prime and one that is not eligible for Prime. | [optional]
**is_featured_merchant** | **bool** | When true, the seller of the item is eligible to win the Buy Box. | [optional]

[[ProductPricingV0 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
