## TaxDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tax_type** | **string** | Type of the tax applied. |
**tax_rate** | **string** | A decimal number with no loss of precision. Useful when precision loss is unacceptable, as with currencies. Follows RFC7159 for number representation. <br>**Pattern** : `^-?(0|([1-9]\\d*))(\\.\\d+)?([eE][+-]?\\d+)?$`. | [optional]
**tax_amount** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\Money**](Money.md) |  |
**taxable_amount** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\Money**](Money.md) |  | [optional]

[[VendorDirectFulfillmentPaymentsV1 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
