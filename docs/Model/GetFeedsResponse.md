# # GetFeedsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payload** | [**\Evers\SellingPartnerApi\Model\Feed[]**](Feed.md) |  | [optional]
**next_token** | **string** | Returned when the number of results exceeds pageSize. To get the next page of results, call the getFeeds operation with this token as the only parameter. | [optional]
**errors** | [**\Evers\SellingPartnerApi\Model\Error[]**](Error.md) | A list of error responses returned when a request is unsuccessful. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
