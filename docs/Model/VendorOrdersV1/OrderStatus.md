## OrderStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**purchase_order_number** | **string** | The buyer's purchase order number for this order. Formatting Notes: 8-character alpha-numeric code. |
**purchase_order_status** | **string** | The status of the buyer's purchase order for this order. |
**purchase_order_date** | **string** | The date the purchase order was placed. Must be in ISO-8601 date/time format. |
**last_updated_date** | **string** | The date when the purchase order was last updated. Must be in ISO-8601 date/time format. | [optional]
**selling_party** | [**\SellingPartnerApi\Model\VendorOrdersV1\PartyIdentification**](PartyIdentification.md) |  |
**ship_to_party** | [**\SellingPartnerApi\Model\VendorOrdersV1\PartyIdentification**](PartyIdentification.md) |  |
**item_status** | [**\SellingPartnerApi\Model\VendorOrdersV1\OrderItemStatus[]**](OrderItemStatus.md) | Detailed description of items order status. |

[[VendorOrdersV1 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
