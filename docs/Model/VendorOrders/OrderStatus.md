## OrderStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**purchase_order_number** | **string** | The buyer&#39;s purchase order number for this order. Formatting Notes: 8-character alpha-numeric code. |
**purchase_order_status** | **string** | The status of the buyer&#39;s purchase order for this order. |
**purchase_order_date** | [**\DateTime**](\DateTime.md) | The date the purchase order was placed. Must be in ISO-8601 date/time format. |
**last_updated_date** | [**\DateTime**](\DateTime.md) | The date when the purchase order was last updated. Must be in ISO-8601 date/time format. | [optional]
**selling_party** | [**\SellingPartnerApi\Model\VendorOrders\PartyIdentification**](PartyIdentification.md) |  |
**ship_to_party** | [**\SellingPartnerApi\Model\VendorOrders\PartyIdentification**](PartyIdentification.md) |  |
**item_status** | [**\SellingPartnerApi\Model\VendorOrders\OrderItemStatus[]**](OrderItemStatus.md) | Detailed description of items order status. |

[[VendorOrders Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
