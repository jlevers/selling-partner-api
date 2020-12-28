# DebtRecoveryEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**debt_recovery_type** | **string** | The debt recovery type.  Possible values:  * DebtPayment  * DebtPaymentFailure  *DebtAdjustment | [optional] 
**recovery_amount** | [**\Evers\SellingPartnerApi\Model\Currency**](Currency.md) | The amount applied for recovery. | [optional] 
**over_payment_credit** | [**\Evers\SellingPartnerApi\Model\Currency**](Currency.md) | The amount returned for overpayment. | [optional] 
**debt_recovery_item_list** | [**\Evers\SellingPartnerApi\Model\DebtRecoveryItemList**](DebtRecoveryItemList.md) |  | [optional] 
**charge_instrument_list** | [**\Evers\SellingPartnerApi\Model\ChargeInstrumentList**](ChargeInstrumentList.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


