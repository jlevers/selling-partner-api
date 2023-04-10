## CreateReportSpecification

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**report_options** | **map[string,string]** | Additional information passed to reports. This varies by report type. | [optional]
**report_type** | **string** | The report type. Refer to [Report Type Values](https://developer-docs.amazon.com/sp-api/docs/report-type-values) for more information. |
**data_start_time** | **string** | The start of a date and time range, in ISO 8601 date time format, used for selecting the data to report. The default is now. The value must be prior to or equal to the current date and time. Not all report types make use of this. | [optional]
**data_end_time** | **string** | The end of a date and time range, in ISO 8601 date time format, used for selecting the data to report. The default is now. The value must be prior to or equal to the current date and time. Not all report types make use of this. | [optional]
**marketplace_ids** | **string[]** | A list of marketplace identifiers. The report document's contents will contain data for all of the specified marketplaces, unless the report type indicates otherwise. |

[[ReportsV20210630 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
