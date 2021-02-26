# # OfferDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**my_offer** | **bool** | When true, this is the seller&#39;s offer. | [optional]
**sub_condition** | **string** | The subcondition of the item. Subcondition values: New, Mint, Very Good, Good, Acceptable, Poor, Club, OEM, Warranty, Refurbished Warranty, Refurbished, Open Box, or Other. |
**seller_feedback_rating** | [**\Evers\SellingPartnerApi\Model\ProductPricing\SellerFeedbackType**](SellerFeedbackType.md) |  | [optional]
**shipping_time** | [**\Evers\SellingPartnerApi\Model\ProductPricing\DetailedShippingTimeType**](DetailedShippingTimeType.md) |  |
**listing_price** | [**\Evers\SellingPartnerApi\Model\ProductPricing\MoneyType**](MoneyType.md) |  |
**points** | [**\Evers\SellingPartnerApi\Model\ProductPricing\Points**](Points.md) |  | [optional]
**shipping** | [**\Evers\SellingPartnerApi\Model\ProductPricing\MoneyType**](MoneyType.md) |  |
**ships_from** | [**\Evers\SellingPartnerApi\Model\ProductPricing\ShipsFromType**](ShipsFromType.md) |  | [optional]
**is_fulfilled_by_amazon** | **bool** | When true, the offer is fulfilled by Amazon. |
**is_buy_box_winner** | **bool** | When true, the offer is currently in the Buy Box. There can be up to two Buy Box winners at any time per ASIN, one that is eligible for Prime and one that is not eligible for Prime. | [optional]
**is_featured_merchant** | **bool** | When true, the seller of the item is eligible to win the Buy Box. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
