## DebtRecoveryEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**debt_recovery_type** | **string** | The debt recovery type.<br><br>Possible values:<br><br>* DebtPayment<br><br>* DebtPaymentFailure<br><br>*DebtAdjustment | [optional]
**recovery_amount** | [**\SellingPartnerApi\Model\FinancesV0\Currency**](Currency.md) |  | [optional]
**over_payment_credit** | [**\SellingPartnerApi\Model\FinancesV0\Currency**](Currency.md) |  | [optional]
**debt_recovery_item_list** | [**\SellingPartnerApi\Model\FinancesV0\DebtRecoveryItem[]**](DebtRecoveryItem.md) | A list of debt recovery item information. | [optional]
**charge_instrument_list** | [**\SellingPartnerApi\Model\FinancesV0\ChargeInstrument[]**](ChargeInstrument.md) | A list of payment instruments. | [optional]

[[FinancesV0 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
