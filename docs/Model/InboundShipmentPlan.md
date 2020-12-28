# InboundShipmentPlan

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipment_id** | **string** | A shipment identifier originally returned by the createInboundShipmentPlan operation. | 
**destination_fulfillment_center_id** | **string** | An Amazon fulfillment center identifier created by Amazon. | 
**ship_to_address** | [**\Evers\SellingPartnerApi\Model\Address**](Address.md) | The address of the Amazon fulfillment center to which to ship the items. | 
**label_prep_type** | [**\Evers\SellingPartnerApi\Model\LabelPrepType**](LabelPrepType.md) |  | 
**items** | [**\Evers\SellingPartnerApi\Model\InboundShipmentPlanItemList**](InboundShipmentPlanItemList.md) | SKU and quantity information for the items in the shipment. | 
**estimated_box_contents_fee** | [**\Evers\SellingPartnerApi\Model\BoxContentsFeeDetails**](BoxContentsFeeDetails.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


