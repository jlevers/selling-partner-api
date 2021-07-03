## GetFulfillmentPreviewRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**marketplace_id** | **string** | The marketplace the fulfillment order is placed against. | [optional]
**address** | [**\SellingPartnerApi\Model\FbaOutbound\Address**](Address.md) |  |
**items** | [**\SellingPartnerApi\Model\FbaOutbound\GetFulfillmentPreviewItem[]**](GetFulfillmentPreviewItem.md) | An array of fulfillment preview item information. |
**shipping_speed_categories** | [**\SellingPartnerApi\Model\FbaOutbound\ShippingSpeedCategory[]**](ShippingSpeedCategory.md) |  | [optional]
**include_cod_fulfillment_preview** | **bool** | Specifies whether to return fulfillment order previews that are for COD (Cash On Delivery).

Possible values:

* true - Returns all fulfillment order previews (both for COD and not for COD).
* false - Returns only fulfillment order previews that are not for COD. | [optional]
**include_delivery_windows** | **bool** | Specifies whether to return the ScheduledDeliveryInfo response object, which contains the available delivery windows for a Scheduled Delivery. The ScheduledDeliveryInfo response object can only be returned for fulfillment order previews with ShippingSpeedCategories &#x3D; ScheduledDelivery. | [optional]
**feature_constraints** | [**\SellingPartnerApi\Model\FbaOutbound\FeatureSettings[]**](FeatureSettings.md) | A list of features and their fulfillment policies to apply to the order. | [optional]

[[FbaOutbound Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
