# FeesEstimateResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | The status of the fee request. Possible values: Success, ClientError, ServiceError. | [optional] 
**fees_estimate_identifier** | [**\Evers\SellingPartnerApi\Model\FeesEstimateIdentifier**](FeesEstimateIdentifier.md) | Information used to identify a fees estimate request. | [optional] 
**fees_estimate** | [**\Evers\SellingPartnerApi\Model\FeesEstimate**](FeesEstimate.md) | The total estimated fees for an item and a list of details. | [optional] 
**error** | [**\Evers\SellingPartnerApi\Model\FeesEstimateError**](FeesEstimateError.md) | An error object with a type, code, and message. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


