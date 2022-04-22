## ReturnItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**seller_return_item_id** | **string** | An identifier assigned by the seller to the return item. |
**seller_fulfillment_order_item_id** | **string** | The identifier assigned to the item by the seller when the fulfillment order was created. |
**amazon_shipment_id** | **string** | The identifier for the shipment that is associated with the return item. |
**seller_return_reason_code** | **string** | The return reason code assigned to the return item by the seller. |
**return_comment** | **string** | An optional comment about the return item. | [optional]
**amazon_return_reason_code** | **string** | The return reason code that the Amazon fulfillment center assigned to the return item. | [optional]
**status** | [**\SellingPartnerApi\Model\FbaOutboundV20200701\FulfillmentReturnItemStatus**](FulfillmentReturnItemStatus.md) |  |
**status_changed_date** | **string** | A datetime string in ISO 8601 format. |
**return_authorization_id** | **string** | Identifies the return authorization used to return this item. See ReturnAuthorization. | [optional]
**return_received_condition** | [**\SellingPartnerApi\Model\FbaOutboundV20200701\ReturnItemDisposition**](ReturnItemDisposition.md) |  | [optional]
**fulfillment_center_id** | **string** | The identifier for the Amazon fulfillment center that processed the return item. | [optional]

[[FbaOutboundV20200701 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
