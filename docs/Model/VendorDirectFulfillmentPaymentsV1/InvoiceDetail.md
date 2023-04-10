## InvoiceDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**invoice_number** | **string** | The unique invoice number. |
**invoice_date** | **string** | Invoice date. Must be in ISO 8601 format. |
**reference_number** | **string** | An additional unique reference number used for regulatory or other purposes. | [optional]
**remit_to_party** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\PartyIdentification**](PartyIdentification.md) |  |
**ship_from_party** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\PartyIdentification**](PartyIdentification.md) |  |
**bill_to_party** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\PartyIdentification**](PartyIdentification.md) |  | [optional]
**ship_to_country_code** | **string** | Ship-to country code. | [optional]
**payment_terms_code** | **string** | The payment terms for the invoice. | [optional]
**invoice_total** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\Money**](Money.md) |  |
**tax_totals** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\TaxDetail[]**](TaxDetail.md) | Individual tax details per line item. | [optional]
**additional_details** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\AdditionalDetails[]**](AdditionalDetails.md) | Additional details provided by the selling party, for tax-related or other purposes. | [optional]
**charge_details** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\ChargeDetails[]**](ChargeDetails.md) | Total charge amount details for all line items. | [optional]
**items** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\InvoiceItem[]**](InvoiceItem.md) | Provides the details of the items in this invoice. |

[[VendorDirectFulfillmentPaymentsV1 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
