## ProductAdsPaymentEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**posted_date** | [**\DateTime**](\DateTime.md) |  | [optional]
**transaction_type** | **string** | Indicates if the transaction is for a charge or a refund.

Possible values:

* charge - Charge

* refund - Refund | [optional]
**invoice_id** | **string** | Identifier for the invoice that the transaction appears in. | [optional]
**base_value** | [**\SellingPartnerApi\Model\Finances\Currency**](Currency.md) |  | [optional]
**tax_value** | [**\SellingPartnerApi\Model\Finances\Currency**](Currency.md) |  | [optional]
**transaction_value** | [**\SellingPartnerApi\Model\Finances\Currency**](Currency.md) |  | [optional]

[[Finances Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
