# OfferType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**buying_price** | [**\Evers\SellingPartnerApi\Model\PriceType**](PriceType.md) | Contains pricing information that includes promotions and contains the shipping cost. | 
**regular_price** | [**\Evers\SellingPartnerApi\Model\MoneyType**](MoneyType.md) | The current price excluding any promotions that apply to the product. Excludes the shipping cost. | 
**fulfillment_channel** | **string** | The fulfillment channel for the offer listing. Possible values:  * Amazon - Fulfilled by Amazon. * Merchant - Fulfilled by the seller. | 
**item_condition** | **string** | The item condition for the offer listing. Possible values: New, Used, Collectible, Refurbished, or Club. | 
**item_sub_condition** | **string** | The item subcondition for the offer listing. Possible values: New, Mint, Very Good, Good, Acceptable, Poor, Club, OEM, Warranty, Refurbished Warranty, Refurbished, Open Box, or Other. | 
**seller_sku** | **string** | The seller stock keeping unit (SKU) of the item. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


