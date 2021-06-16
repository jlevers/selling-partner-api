## OrderDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_order_number** | **string** | The customer order number. |
**order_date** | [**\DateTime**](\DateTime.md) | The date the order was placed. This field is expected to be in ISO-8601 date/time format, for example:2018-07-16T23:00:00Z/ 2018-07-16T23:00:00-05:00 /2018-07-16T23:00:00-08:00. If no time zone is specified, UTC should be assumed. |
**order_status** | **string** | Current status of the order. | [optional]
**shipment_details** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentOrders\ShipmentDetails**](ShipmentDetails.md) |  |
**tax_total** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentOrders\OrderDetailsTaxTotal**](OrderDetailsTaxTotal.md) |  | [optional]
**selling_party** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentOrders\PartyIdentification**](PartyIdentification.md) |  |
**ship_from_party** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentOrders\PartyIdentification**](PartyIdentification.md) |  |
**ship_to_party** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentOrders\Address**](Address.md) |  |
**bill_to_party** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentOrders\PartyIdentification**](PartyIdentification.md) |  |
**items** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentOrders\OrderItem[]**](OrderItem.md) | A list of items in this purchase order. |

[[VendorDirectFulfillmentOrders Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
