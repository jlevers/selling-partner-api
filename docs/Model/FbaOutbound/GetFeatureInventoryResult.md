# # GetFeatureInventoryResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**marketplace_id** | **string** | The requested marketplace. |
**feature_name** | **string** | The name of the feature. |
**next_token** | **string** | When present and not empty, pass this string token in the next request to return the next response page. | [optional]
**feature_skus** | [**\Evers\SellingPartnerApi\Model\FbaOutbound\FeatureSku[]**](FeatureSku.md) | An array of SKUs eligible for this feature and the quantity available. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
