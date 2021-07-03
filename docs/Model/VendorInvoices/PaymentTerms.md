## PaymentTerms

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The payment term type for the invoice. | [optional]
**discount_percent** | **string** | A decimal number with no loss of precision. Useful when precision loss is unacceptable, as with currencies. Follows RFC7159 for number representation. &lt;br&gt;**Pattern** : &#x60;^-?(0|([1-9]\\d*))(\\.\\d+)?([eE][+-]?\\d+)?$&#x60;. | [optional]
**discount_due_days** | **float** | The number of calendar days from the Base date (Invoice date) until the discount is no longer valid. | [optional]
**net_due_days** | **float** | The number of calendar days from the base date (invoice date) until the total amount on the invoice is due. | [optional]

[[VendorInvoices Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
