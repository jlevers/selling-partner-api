## OrderAcknowledgement

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**purchase_order_number** | **string** | The purchase order number. Formatting Notes: 8-character alpha-numeric code. |
**selling_party** | [**\SellingPartnerApi\Model\VendorOrders\PartyIdentification**](PartyIdentification.md) |  |
**acknowledgement_date** | [**\DateTime**](\DateTime.md) | The date and time when the purchase order is acknowledged, in ISO-8601 date/time format. |
**items** | [**\SellingPartnerApi\Model\VendorOrders\OrderAcknowledgementItem[]**](OrderAcknowledgementItem.md) | A list of the items being acknowledged with associated details. |

[[VendorOrders Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
