## OrderItemStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_sequence_number** | **string** | Numbering of the item on the purchase order. The first item will be 1, the second 2, and so on. |
**buyer_product_identifier** | **string** | Buyer&#39;s Standard Identification Number (ASIN) of an item. | [optional]
**vendor_product_identifier** | **string** | The vendor selected product identification of the item. | [optional]
**net_cost** | [**\SellingPartnerApi\Model\VendorOrders\Money**](Money.md) |  | [optional]
**list_price** | [**\SellingPartnerApi\Model\VendorOrders\Money**](Money.md) |  | [optional]
**ordered_quantity** | [**\SellingPartnerApi\Model\VendorOrders\OrderItemStatusOrderedQuantity**](OrderItemStatusOrderedQuantity.md) |  | [optional]
**acknowledgement_status** | [**\SellingPartnerApi\Model\VendorOrders\OrderItemStatusAcknowledgementStatus**](OrderItemStatusAcknowledgementStatus.md) |  | [optional]

[[VendorOrders Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
