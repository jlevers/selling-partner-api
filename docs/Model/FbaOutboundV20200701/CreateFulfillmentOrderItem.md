## CreateFulfillmentOrderItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**seller_sku** | **string** | The seller SKU of the item. |
**seller_fulfillment_order_item_id** | **string** | A fulfillment order item identifier that the seller creates to track fulfillment order items. Used to disambiguate multiple fulfillment items that have the same SellerSKU. For example, the seller might assign different SellerFulfillmentOrderItemId values to two items in a fulfillment order that share the same SellerSKU but have different GiftMessage values. |
**quantity** | **int** | The item quantity. |
**gift_message** | **string** | A message to the gift recipient, if applicable. | [optional]
**displayable_comment** | **string** | Item-specific text that displays in recipient-facing materials such as the outbound shipment packing slip. | [optional]
**fulfillment_network_sku** | **string** | Amazon's fulfillment network SKU of the item. | [optional]
**per_unit_declared_value** | [**\SellingPartnerApi\Model\FbaOutboundV20200701\Money**](Money.md) |  | [optional]
**per_unit_price** | [**\SellingPartnerApi\Model\FbaOutboundV20200701\Money**](Money.md) |  | [optional]
**per_unit_tax** | [**\SellingPartnerApi\Model\FbaOutboundV20200701\Money**](Money.md) |  | [optional]

[[FbaOutboundV20200701 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
