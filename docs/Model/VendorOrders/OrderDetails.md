## OrderDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**purchase_order_date** | [**\DateTime**](\DateTime.md) | The date the purchase order was placed. Must be in ISO-8601 date/time format. |
**purchase_order_changed_date** | [**\DateTime**](\DateTime.md) | The date when purchase order was last changed by Amazon after the order was placed. This date will be greater than &#39;purchaseOrderDate&#39;. This means the PO data was changed on that date and vendors are required to fulfill the  updated PO. The PO changes can be related to Item Quantity, Ship to Location, Ship Window etc. This field will not be present in orders that have not changed after creation. Must be in ISO-8601 date/time format. | [optional]
**purchase_order_state_changed_date** | [**\DateTime**](\DateTime.md) | The date when current purchase order state was changed. Current purchase order state is available in the field &#39;purchaseOrderState&#39;. Must be in ISO-8601 date/time format. |
**purchase_order_type** | **string** | Type of purchase order. | [optional]
**import_details** | [**\SellingPartnerApi\Model\VendorOrders\ImportDetails**](ImportDetails.md) |  | [optional]
**deal_code** | **string** | If requested by the recipient, this field will contain a promotional/deal number. The discount code line is optional. It is used to obtain a price discount on items on the order. | [optional]
**payment_method** | **string** | Payment method used. | [optional]
**buying_party** | [**\SellingPartnerApi\Model\VendorOrders\PartyIdentification**](PartyIdentification.md) |  | [optional]
**selling_party** | [**\SellingPartnerApi\Model\VendorOrders\PartyIdentification**](PartyIdentification.md) |  | [optional]
**ship_to_party** | [**\SellingPartnerApi\Model\VendorOrders\PartyIdentification**](PartyIdentification.md) |  | [optional]
**bill_to_party** | [**\SellingPartnerApi\Model\VendorOrders\PartyIdentification**](PartyIdentification.md) |  | [optional]
**ship_window** | **string** | Defines a date time interval according to ISO8601. Interval is separated by double hyphen (--). | [optional]
**delivery_window** | **string** | Defines a date time interval according to ISO8601. Interval is separated by double hyphen (--). | [optional]
**items** | [**\SellingPartnerApi\Model\VendorOrders\OrderItem[]**](OrderItem.md) | A list of items in this purchase order. |

[[VendorOrders Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
