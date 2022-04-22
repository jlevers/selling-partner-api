## OrderAcknowledgement

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**purchase_order_number** | **string** | The purchase order number. Formatting Notes: 8-character alpha-numeric code. |
**selling_party** | [**\SellingPartnerApi\Model\VendorOrdersV1\PartyIdentification**](PartyIdentification.md) |  |
**acknowledgement_date** | **string** | The date and time when the purchase order is acknowledged, in ISO-8601 date/time format. |
**items** | [**\SellingPartnerApi\Model\VendorOrdersV1\OrderAcknowledgementItem[]**](OrderAcknowledgementItem.md) | A list of the items being acknowledged with associated details. |

[[VendorOrdersV1 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
