## CreateReportScheduleSpecification

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**report_type** | **string** | The report type. Refer to [Report Type Values](https://developer-docs.amazon.com/sp-api/docs/report-type-values) for more information. |
**marketplace_ids** | **string[]** | A list of marketplace identifiers for the report schedule. |
**report_options** | **map[string,string]** | Additional information passed to reports. This varies by report type. | [optional]
**period** | **string** | One of a set of predefined ISO 8601 periods that specifies how often a report should be created. |
**next_report_creation_time** | **string** | The date and time when the schedule will create its next report, in ISO 8601 date time format. | [optional]

[[ReportsV20210630 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
