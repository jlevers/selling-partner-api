## GetFulfillmentPreviewRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**marketplace_id** | **string** | The marketplace the fulfillment order is placed against. | [optional]
**address** | [**\SellingPartnerApi\Model\FbaOutboundV20200701\Address**](Address.md) |  |
**items** | [**\SellingPartnerApi\Model\FbaOutboundV20200701\GetFulfillmentPreviewItem[]**](GetFulfillmentPreviewItem.md) | An array of fulfillment preview item information. |
**shipping_speed_categories** | [**\SellingPartnerApi\Model\FbaOutboundV20200701\ShippingSpeedCategory[]**](ShippingSpeedCategory.md) |  | [optional]
**include_cod_fulfillment_preview** | **bool** | When true, returns all fulfillment order previews both for COD and not for COD. Otherwise, returns only fulfillment order previews that are not for COD. | [optional]
**include_delivery_windows** | **bool** | When true, returns the ScheduledDeliveryInfo response object, which contains the available delivery windows for a Scheduled Delivery. The ScheduledDeliveryInfo response object can only be returned for fulfillment order previews with ShippingSpeedCategories = ScheduledDelivery. | [optional]
**feature_constraints** | [**\SellingPartnerApi\Model\FbaOutboundV20200701\FeatureSettings[]**](FeatureSettings.md) | A list of features and their fulfillment policies to apply to the order. | [optional]

[[FbaOutboundV20200701 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
