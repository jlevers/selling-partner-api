# InboundShipmentPlanRequestItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**seller_sku** | **string** | The seller SKU of the item. | 
**asin** | **string** | The Amazon Standard Identification Number (ASIN) of the item. | 
**condition** | [**\Evers\SellingPartnerApi\Model\Condition**](Condition.md) |  | 
**quantity** | [**\Evers\SellingPartnerApi\Model\Quantity**](Quantity.md) |  | 
**quantity_in_case** | [**\Evers\SellingPartnerApi\Model\Quantity**](Quantity.md) | The item quantity in each case, for case-packed items. Note that QuantityInCase multiplied by the number of cases in the inbound shipment equals Quantity. Also note that all of the boxes of an inbound shipment must either be case packed or individually packed. For that reason, when you submit the createInboundShipmentPlan operation, the value of QuantityInCase must be provided for every item in the shipment or for none of the items in the shipment. | [optional] 
**prep_details_list** | [**\Evers\SellingPartnerApi\Model\PrepDetailsList**](PrepDetailsList.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


