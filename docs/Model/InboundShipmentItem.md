# InboundShipmentItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipment_id** | **string** | A shipment identifier originally returned by the createInboundShipmentPlan operation. | [optional] 
**seller_sku** | **string** | The seller SKU of the item. | 
**fulfillment_network_sku** | **string** | Amazon&#39;s fulfillment network SKU of the item. | [optional] 
**quantity_shipped** | [**\Evers\SellingPartnerApi\Model\Quantity**](Quantity.md) | The item quantity that you are shipping. | 
**quantity_received** | [**\Evers\SellingPartnerApi\Model\Quantity**](Quantity.md) | The item quantity that has been received at an Amazon fulfillment center. | [optional] 
**quantity_in_case** | [**\Evers\SellingPartnerApi\Model\Quantity**](Quantity.md) | The item quantity in each case, for case-packed items. Note that QuantityInCase multiplied by the number of boxes in the inbound shipment equals QuantityShipped. Also note that all of the boxes of an inbound shipment must either be case packed or individually packed. For that reason, when you submit the createInboundShipment or the updateInboundShipment operation, the value of QuantityInCase must be provided for every item in the shipment or for none of the items in the shipment. | [optional] 
**release_date** | [**\Evers\SellingPartnerApi\Model\DateStringType**](DateStringType.md) | The date that a pre-order item will be available for sale. | [optional] 
**prep_details_list** | [**\Evers\SellingPartnerApi\Model\PrepDetailsList**](PrepDetailsList.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


