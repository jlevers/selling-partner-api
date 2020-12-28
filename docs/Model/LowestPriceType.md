# LowestPriceType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**condition** | **string** | Indicates the condition of the item. For example: New, Used, Collectible, Refurbished, or Club. | 
**fulfillment_channel** | **string** | Indicates whether the item is fulfilled by Amazon or by the seller. | 
**landed_price** | [**\Evers\SellingPartnerApi\Model\MoneyType**](MoneyType.md) | The value calculated by adding ListingPrice + Shipping - Points. | 
**listing_price** | [**\Evers\SellingPartnerApi\Model\MoneyType**](MoneyType.md) | The price of the item. | 
**shipping** | [**\Evers\SellingPartnerApi\Model\MoneyType**](MoneyType.md) | The shipping cost. | 
**points** | [**\Evers\SellingPartnerApi\Model\Points**](Points.md) | The number of Amazon Points offered with the purchase of an item. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


