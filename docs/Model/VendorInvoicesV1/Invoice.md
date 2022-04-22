## Invoice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**invoice_type** | **string** | Identifies the type of invoice. |
**id** | **string** | Unique number relating to the charges defined in this document. This will be invoice number if the document type is Invoice or CreditNote number if the document type is Credit Note. Failure to provide this reference will result in a rejection. |
**reference_number** | **string** | An additional unique reference number used for regulatory or other purposes. | [optional]
**date** | **string** | Defines a date and time according to ISO8601. |
**remit_to_party** | [**\SellingPartnerApi\Model\VendorInvoicesV1\PartyIdentification**](PartyIdentification.md) |  |
**ship_to_party** | [**\SellingPartnerApi\Model\VendorInvoicesV1\PartyIdentification**](PartyIdentification.md) |  | [optional]
**ship_from_party** | [**\SellingPartnerApi\Model\VendorInvoicesV1\PartyIdentification**](PartyIdentification.md) |  | [optional]
**bill_to_party** | [**\SellingPartnerApi\Model\VendorInvoicesV1\PartyIdentification**](PartyIdentification.md) |  | [optional]
**payment_terms** | [**\SellingPartnerApi\Model\VendorInvoicesV1\PaymentTerms**](PaymentTerms.md) |  | [optional]
**invoice_total** | [**\SellingPartnerApi\Model\VendorInvoicesV1\Money**](Money.md) |  |
**tax_details** | [**\SellingPartnerApi\Model\VendorInvoicesV1\TaxDetails[]**](TaxDetails.md) | Total tax amount details for all line items. | [optional]
**additional_details** | [**\SellingPartnerApi\Model\VendorInvoicesV1\AdditionalDetails[]**](AdditionalDetails.md) | Additional details provided by the selling party, for tax related or other purposes. | [optional]
**charge_details** | [**\SellingPartnerApi\Model\VendorInvoicesV1\ChargeDetails[]**](ChargeDetails.md) | Total charge amount details for all line items. | [optional]
**allowance_details** | [**\SellingPartnerApi\Model\VendorInvoicesV1\AllowanceDetails[]**](AllowanceDetails.md) | Total allowance amount details for all line items. | [optional]
**items** | [**\SellingPartnerApi\Model\VendorInvoicesV1\InvoiceItem[]**](InvoiceItem.md) | The list of invoice items. | [optional]

[[VendorInvoicesV1 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
