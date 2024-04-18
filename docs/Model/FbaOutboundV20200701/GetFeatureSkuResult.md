## GetFeatureSkuResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**marketplace_id** | **string** | The requested marketplace. |
**feature_name** | **string** | The name of the feature. |
**is_eligible** | **bool** | When true, the seller SKU is eligible for the requested feature. |
**ineligible_reasons** | **string[]** | A list of one or more reasons that the seller SKU is ineligibile for the feature.<br><br>Possible values:<br>* MERCHANT_NOT_ENROLLED - The merchant isn't enrolled for the feature.<br>* SKU_NOT_ELIGIBLE - The SKU doesn't reside in a warehouse that supports the feature.<br>* INVALID_SKU - There is an issue with the SKU provided. | [optional]
**sku_info** | [**\SellingPartnerApi\Model\FbaOutboundV20200701\FeatureSku**](FeatureSku.md) |  | [optional]

[[FbaOutboundV20200701 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
