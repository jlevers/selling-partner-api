## GetReportsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payload** | [**\Evers\SellingPartnerApi\Model\Reports\Report[]**](Report.md) |  | [optional]
**next_token** | **string** | Returned when the number of results exceeds pageSize. To get the next page of results, call getReports with this token as the only parameter. | [optional]
**errors** | [**\Evers\SellingPartnerApi\Model\Reports\Error[]**](Error.md) | A list of error responses returned when a request is unsuccessful. | [optional]

[[Reports Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
