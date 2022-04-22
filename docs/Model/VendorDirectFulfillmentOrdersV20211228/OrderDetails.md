## OrderDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_order_number** | **string** | The customer order number. |
**order_date** | **string** | The date the order was placed. This  field is expected to be in ISO-8601 date/time format, for example:2018-07-16T23:00:00Z/ 2018-07-16T23:00:00-05:00 /2018-07-16T23:00:00-08:00. If no time zone is specified, UTC should be assumed. |
**order_status** | **string** | Current status of the order. | [optional]
**shipment_details** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228\ShipmentDetails**](ShipmentDetails.md) |  |
**tax_total** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228\TaxItemDetails**](TaxItemDetails.md) |  | [optional]
**selling_party** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228\PartyIdentification**](PartyIdentification.md) |  |
**ship_from_party** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228\PartyIdentification**](PartyIdentification.md) |  |
**ship_to_party** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228\Address**](Address.md) |  |
**bill_to_party** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228\PartyIdentification**](PartyIdentification.md) |  |
**items** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228\OrderItem[]**](OrderItem.md) | A list of items in this purchase order. |

[[VendorDirectFulfillmentOrdersV20211228 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
