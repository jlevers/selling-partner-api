# GetOffersResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**marketplace_id** | **string** | A marketplace identifier. | 
**asin** | **string** | The Amazon Standard Identification Number (ASIN) of the item. | [optional] 
**sku** | **string** | The stock keeping unit (SKU) of the item. | [optional] 
**item_condition** | [**\Evers\SellingPartnerApi\Model\ConditionType**](ConditionType.md) | The condition of the item. | 
**status** | **string** | The status of the operation. | 
**identifier** | [**\Evers\SellingPartnerApi\Model\ItemIdentifier**](ItemIdentifier.md) | Metadata that identifies the item. | 
**summary** | [**\Evers\SellingPartnerApi\Model\Summary**](Summary.md) | Pricing information about the item. | 
**offers** | [**\Evers\SellingPartnerApi\Model\OfferDetailList**](OfferDetailList.md) | A list of offer details. The list is the same length as the TotalOfferCount in the Summary or 20, whichever is less. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


