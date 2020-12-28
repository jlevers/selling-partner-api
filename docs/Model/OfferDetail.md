# OfferDetail

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**my_offer** | **bool** | When true, this is the seller&#39;s offer. | [optional] 
**sub_condition** | **string** | The subcondition of the item. Subcondition values: New, Mint, Very Good, Good, Acceptable, Poor, Club, OEM, Warranty, Refurbished Warranty, Refurbished, Open Box, or Other. | 
**seller_feedback_rating** | [**\Evers\SellingPartnerApi\Model\SellerFeedbackType**](SellerFeedbackType.md) | Information about the seller&#39;s feedback, including the percentage of positive feedback, and the total number of ratings received. | [optional] 
**shipping_time** | [**\Evers\SellingPartnerApi\Model\DetailedShippingTimeType**](DetailedShippingTimeType.md) | The maximum time within which the item will likely be shipped once an order has been placed. | 
**listing_price** | [**\Evers\SellingPartnerApi\Model\MoneyType**](MoneyType.md) | The price of the item. | 
**points** | [**\Evers\SellingPartnerApi\Model\Points**](Points.md) | The number of Amazon Points offered with the purchase of an item. | [optional] 
**shipping** | [**\Evers\SellingPartnerApi\Model\MoneyType**](MoneyType.md) | The shipping cost. | 
**ships_from** | [**\Evers\SellingPartnerApi\Model\ShipsFromType**](ShipsFromType.md) | The state and country from where the item is shipped. | [optional] 
**is_fulfilled_by_amazon** | **bool** | When true, the offer is fulfilled by Amazon. | 
**is_buy_box_winner** | **bool** | When true, the offer is currently in the Buy Box. There can be up to two Buy Box winners at any time per ASIN, one that is eligible for Prime and one that is not eligible for Prime. | [optional] 
**is_featured_merchant** | **bool** | When true, the seller of the item is eligible to win the Buy Box. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


