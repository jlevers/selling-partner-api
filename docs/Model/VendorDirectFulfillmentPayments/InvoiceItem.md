## InvoiceItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_sequence_number** | **string** | Numbering of the item on the purchase order. The first item will be 1, the second 2, and so on. |
**buyer_product_identifier** | **string** | Buyer&#39;s standard identification number (ASIN) of an item. | [optional]
**vendor_product_identifier** | **string** | The vendor selected product identification of the item. | [optional]
**invoiced_quantity** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentPayments\ItemQuantity**](ItemQuantity.md) |  |
**net_cost** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentPayments\Money**](Money.md) |  |
**purchase_order_number** | **string** | The purchase order number for this order. Formatting Notes: 8-character alpha-numeric code. |
**vendor_order_number** | **string** | The vendor&#39;s order number for this order. | [optional]
**hsn_code** | **string** | HSN tax code. The HSN number cannot contain alphabets. | [optional]
**tax_details** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentPayments\TaxDetail[]**](TaxDetail.md) | Individual tax details per line item. | [optional]
**charge_details** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentPayments\ChargeDetails[]**](ChargeDetails.md) | Individual charge details per line item. | [optional]

[[VendorDirectFulfillmentPayments Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
