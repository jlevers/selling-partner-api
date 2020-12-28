# FinancialEventGroup

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**financial_event_group_id** | **string** | A unique identifier for the financial event group. | [optional] 
**processing_status** | **string** | The processing status of the financial event group indicates whether the balance of the financial event group is settled.  Possible values:  * Open  * Closed | [optional] 
**fund_transfer_status** | **string** | The status of the fund transfer. | [optional] 
**original_total** | [**\Evers\SellingPartnerApi\Model\Currency**](Currency.md) | The total amount in the currency of the marketplace in which the transactions occurred. | [optional] 
**converted_total** | [**\Evers\SellingPartnerApi\Model\Currency**](Currency.md) | The total amount in the currency of the marketplace in which the funds were disbursed. | [optional] 
**fund_transfer_date** | [**\Evers\SellingPartnerApi\Model\\DateTime**](\DateTime.md) | The date and time when the disbursement or charge was initiated. Only present for closed settlements. In ISO 8601 date time format. | [optional] 
**trace_id** | **string** | The trace identifier used by sellers to look up transactions externally. | [optional] 
**account_tail** | **string** | The account tail of the payment instrument. | [optional] 
**beginning_balance** | [**\Evers\SellingPartnerApi\Model\Currency**](Currency.md) | The balance at the beginning of the settlement period. | [optional] 
**financial_event_group_start** | [**\Evers\SellingPartnerApi\Model\\DateTime**](\DateTime.md) | The date and time at which the financial event group is opened. In ISO 8601 date time format. | [optional] 
**financial_event_group_end** | [**\Evers\SellingPartnerApi\Model\\DateTime**](\DateTime.md) | The date and time at which the financial event group is closed. In ISO 8601 date time format. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


