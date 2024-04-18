## ProductAdsPaymentEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**posted_date** | **string** | A date string in ISO 8601 format. | [optional]
**transaction_type** | **string** | Indicates if the transaction is for a charge or a refund.<br><br>Possible values:<br><br>* charge - Charge<br><br>* refund - Refund | [optional]
**invoice_id** | **string** | Identifier for the invoice that the transaction appears in. | [optional]
**base_value** | [**\SellingPartnerApi\Model\FinancesV0\Currency**](Currency.md) |  | [optional]
**tax_value** | [**\SellingPartnerApi\Model\FinancesV0\Currency**](Currency.md) |  | [optional]
**transaction_value** | [**\SellingPartnerApi\Model\FinancesV0\Currency**](Currency.md) |  | [optional]

[[FinancesV0 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
