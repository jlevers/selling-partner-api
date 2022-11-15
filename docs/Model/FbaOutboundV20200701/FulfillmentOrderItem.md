## FulfillmentOrderItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**seller_sku** | **string** | The seller SKU of the item. |
**seller_fulfillment_order_item_id** | **string** | A fulfillment order item identifier submitted with a call to the createFulfillmentOrder operation. |
**quantity** | **int** | The item quantity. |
**gift_message** | **string** | A message to the gift recipient, if applicable. | [optional]
**displayable_comment** | **string** | Item-specific text that displays in recipient-facing materials such as the outbound shipment packing slip. | [optional]
**fulfillment_network_sku** | **string** | Amazon's fulfillment network SKU of the item. | [optional]
**order_item_disposition** | **string** | Indicates whether the item is sellable or unsellable. | [optional]
**cancelled_quantity** | **int** | The item quantity. |
**unfulfillable_quantity** | **int** | The item quantity. |
**estimated_ship_date** | **string** | A datetime string in ISO 8601 format. | [optional]
**estimated_arrival_date** | **string** | A datetime string in ISO 8601 format. | [optional]
**per_unit_price** | [**\SellingPartnerApi\Model\FbaOutboundV20200701\Money**](Money.md) |  | [optional]
**per_unit_tax** | [**\SellingPartnerApi\Model\FbaOutboundV20200701\Money**](Money.md) |  | [optional]
**per_unit_declared_value** | [**\SellingPartnerApi\Model\FbaOutboundV20200701\Money**](Money.md) |  | [optional]

[[FbaOutboundV20200701 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
