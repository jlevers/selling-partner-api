# ReportSchedule

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**report_schedule_id** | **string** | The identifier for the report schedule. This identifier is unique only in combination with a seller ID. | 
**report_type** | **string** | The report type. | 
**marketplace_ids** | **string[]** | A list of marketplace identifiers. The report document&#39;s contents will contain data for all of the specified marketplaces, unless the report type indicates otherwise. | [optional] 
**report_options** | [**\Evers\SellingPartnerApi\Model\ReportOptions**](ReportOptions.md) |  | [optional] 
**period** | **string** | An ISO 8601 period value that indicates how often a report should be created. | 
**next_report_creation_time** | [**\DateTime**](\DateTime.md) | The date and time when the schedule will create its next report, in ISO 8601 date time format. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


