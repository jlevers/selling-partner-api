## Report

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**marketplace_ids** | **string[]** | A list of marketplace identifiers for the report. | [optional]
**report_id** | **string** | The identifier for the report. This identifier is unique only in combination with a seller ID. |
**report_type** | **string** | The report type. |
**data_start_time** | [**\DateTime**](\DateTime.md) | The start of a date and time range used for selecting the data to report. | [optional]
**data_end_time** | [**\DateTime**](\DateTime.md) | The end of a date and time range used for selecting the data to report. | [optional]
**report_schedule_id** | **string** | The identifier of the report schedule that created this report (if any). This identifier is unique only in combination with a seller ID. | [optional]
**created_time** | [**\DateTime**](\DateTime.md) | The date and time when the report was created. |
**processing_status** | **string** | The processing status of the report. |
**processing_start_time** | [**\DateTime**](\DateTime.md) | The date and time when the report processing started, in ISO 8601 date time format. | [optional]
**processing_end_time** | [**\DateTime**](\DateTime.md) | The date and time when the report processing completed, in ISO 8601 date time format. | [optional]
**report_document_id** | **string** | The identifier for the report document. Pass this into the getReportDocument operation to get the information you will need to retrieve the report document&#39;s contents. | [optional]

[[Reports Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
