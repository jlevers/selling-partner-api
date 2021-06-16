## OrderAcknowledgementItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**purchase_order_number** | **string** | The purchase order number for this order. Formatting Notes: alpha-numeric code. |
**vendor_order_number** | **string** | The vendor&#39;s order number for this order. |
**acknowledgement_date** | [**\DateTime**](\DateTime.md) | The date and time when the order is acknowledged, in ISO-8601 date/time format. For example: 2018-07-16T23:00:00Z / 2018-07-16T23:00:00-05:00 / 2018-07-16T23:00:00-08:00. |
**acknowledgement_status** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentOrders\AcknowledgementStatus**](AcknowledgementStatus.md) |  |
**selling_party** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentOrders\PartyIdentification**](PartyIdentification.md) |  |
**ship_from_party** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentOrders\PartyIdentification**](PartyIdentification.md) |  |
**item_acknowledgements** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentOrders\OrderItemAcknowledgement[]**](OrderItemAcknowledgement.md) | Item details including acknowledged quantity. |

[[VendorDirectFulfillmentOrders Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
