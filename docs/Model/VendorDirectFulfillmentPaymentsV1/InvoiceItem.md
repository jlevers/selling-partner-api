## InvoiceItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_sequence_number** | **string** | Numbering of the item on the purchase order. The first item will be 1, the second 2, and so on. |
**buyer_product_identifier** | **string** | Buyer's standard identification number (ASIN) of an item. | [optional]
**vendor_product_identifier** | **string** | The vendor selected product identification of the item. | [optional]
**invoiced_quantity** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\ItemQuantity**](ItemQuantity.md) |  |
**net_cost** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\Money**](Money.md) |  |
**purchase_order_number** | **string** | The purchase order number for this order. Formatting Notes: 8-character alpha-numeric code. |
**vendor_order_number** | **string** | The vendor's order number for this order. | [optional]
**hsn_code** | **string** | Harmonized System of Nomenclature (HSN) tax code. The HSN number cannot contain alphabets. | [optional]
**tax_details** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\TaxDetail[]**](TaxDetail.md) | Individual tax details per line item. | [optional]
**charge_details** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\ChargeDetails[]**](ChargeDetails.md) | Individual charge details per line item. | [optional]

[[VendorDirectFulfillmentPaymentsV1 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
