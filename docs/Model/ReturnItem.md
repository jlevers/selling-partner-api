# ReturnItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**seller_return_item_id** | **string** | An identifier assigned by the seller to the return item. | 
**seller_fulfillment_order_item_id** | **string** | The identifier assigned to the item by the seller when the fulfillment order was created. | 
**amazon_shipment_id** | **string** | The identifier for the shipment that is associated with the return item. | 
**seller_return_reason_code** | **string** | The return reason code assigned to the return item by the seller. | 
**return_comment** | **string** | An optional comment about the return item. | [optional] 
**amazon_return_reason_code** | **string** | The return reason code that the Amazon fulfillment center assigned to the return item. | [optional] 
**status** | [**\Evers\SellingPartnerApi\Model\FulfillmentReturnItemStatus**](FulfillmentReturnItemStatus.md) | Indicates if the return item has been processed by an Amazon fulfillment center. | 
**status_changed_date** | [**\Evers\SellingPartnerApi\Model\Timestamp**](Timestamp.md) | Indicates when the status last changed. | 
**return_authorization_id** | **string** | Identifies the return authorization used to return this item. See ReturnAuthorization. | [optional] 
**return_received_condition** | [**\Evers\SellingPartnerApi\Model\ReturnItemDisposition**](ReturnItemDisposition.md) |  | [optional] 
**fulfillment_center_id** | **string** | The identifier for the Amazon fulfillment center that processed the return item. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


