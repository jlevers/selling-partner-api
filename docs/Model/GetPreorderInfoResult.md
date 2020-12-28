# GetPreorderInfoResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipment_contains_preorderable_items** | **bool** | Indicates whether the shipment contains items that have been enabled for pre-order. For more information about enabling items for pre-order, see the Seller Central Help. | [optional] 
**shipment_confirmed_for_preorder** | **bool** | Indicates whether this shipment has been confirmed for pre-order. | [optional] 
**need_by_date** | [**\Evers\SellingPartnerApi\Model\DateStringType**](DateStringType.md) | Date that the shipment would need to arrive at an Amazon fulfillment center to avoid delivery promise breaks for pre-ordered items if this shipment is later confirmed for pre-order. In YYYY-MM-DD format. See also the confirmPreorder operation. | [optional] 
**confirmed_fulfillable_date** | [**\Evers\SellingPartnerApi\Model\DateStringType**](DateStringType.md) | Date in YYYY-MM-DD format that determines which pre-order items in the shipment are eligible for pre-order. If this shipment is confirmed for pre-order with a subsequent call to the confirmPreorder operation, the pre-order Buy Box will appear for any pre-order items in the shipment with a release date on or after this date. Call the getShipmentItems operation to get the release dates for the pre-order items in this shipment. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


