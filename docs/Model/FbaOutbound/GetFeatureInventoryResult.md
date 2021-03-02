## GetFeatureInventoryResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**marketplace_id** | **string** | The requested marketplace. |
**feature_name** | **string** | The name of the feature. |
**next_token** | **string** | When present and not empty, pass this string token in the next request to return the next response page. | [optional]
**feature_skus** | [**\SellingPartnerApi\Model\FbaOutbound\FeatureSku[]**](FeatureSku.md) | An array of SKUs eligible for this feature and the quantity available. | [optional]

[[FbaOutbound Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
