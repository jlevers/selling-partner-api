## FailedAdhocDisbursementEventList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**funds_transfers_type** | **string** | The type of fund transfer. <br><br>Example \"Refund\" | [optional]
**transfer_id** | **string** | The transfer identifier. | [optional]
**disbursement_id** | **string** | The disbursement identifier. | [optional]
**payment_disbursement_type** | **string** | The type of payment for disbursement. <br><br>Example `CREDIT_CARD` | [optional]
**status** | **string** | The status of the failed `AdhocDisbursement`. <br><br>Example `HARD_DECLINED` | [optional]
**transfer_amount** | [**\SellingPartnerApi\Model\FinancesV0\Currency**](Currency.md) |  | [optional]
**posted_date** | **string** | A date string in ISO 8601 format. | [optional]

[[FinancesV0 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
