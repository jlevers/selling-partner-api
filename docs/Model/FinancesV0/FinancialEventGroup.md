## FinancialEventGroup

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**financial_event_group_id** | **string** | A unique identifier for the financial event group. | [optional]
**processing_status** | **string** | The processing status of the financial event group indicates whether the balance of the financial event group is settled.<br><br>Possible values:<br><br>* Open<br><br>* Closed | [optional]
**fund_transfer_status** | **string** | The status of the fund transfer. | [optional]
**original_total** | [**\SellingPartnerApi\Model\FinancesV0\Currency**](Currency.md) |  | [optional]
**converted_total** | [**\SellingPartnerApi\Model\FinancesV0\Currency**](Currency.md) |  | [optional]
**fund_transfer_date** | **string** | A date string in ISO 8601 format. | [optional]
**trace_id** | **string** | The trace identifier used by sellers to look up transactions externally. | [optional]
**account_tail** | **string** | The account tail of the payment instrument. | [optional]
**beginning_balance** | [**\SellingPartnerApi\Model\FinancesV0\Currency**](Currency.md) |  | [optional]
**financial_event_group_start** | **string** | A date string in ISO 8601 format. | [optional]
**financial_event_group_end** | **string** | A date string in ISO 8601 format. | [optional]

[[FinancesV0 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
