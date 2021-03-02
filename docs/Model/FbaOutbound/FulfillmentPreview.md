## FulfillmentPreview

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipping_speed_category** | [**\SellingPartnerApi\Model\FbaOutbound\ShippingSpeedCategory**](ShippingSpeedCategory.md) |  |
**scheduled_delivery_info** | [**\SellingPartnerApi\Model\FbaOutbound\ScheduledDeliveryInfo**](ScheduledDeliveryInfo.md) |  | [optional]
**is_fulfillable** | **bool** | When true, this fulfillment order preview is fulfillable. |
**is_cod_capable** | **bool** | When true, this fulfillment order preview is for COD (Cash On Delivery). |
**estimated_shipping_weight** | [**\SellingPartnerApi\Model\FbaOutbound\Weight**](Weight.md) |  | [optional]
**estimated_fees** | [**\SellingPartnerApi\Model\FbaOutbound\Fee[]**](Fee.md) | An array of fee type and cost pairs. | [optional]
**fulfillment_preview_shipments** | [**\SellingPartnerApi\Model\FbaOutbound\FulfillmentPreviewShipment[]**](FulfillmentPreviewShipment.md) | An array of fulfillment preview shipment information. | [optional]
**unfulfillable_preview_items** | [**\SellingPartnerApi\Model\FbaOutbound\UnfulfillablePreviewItem[]**](UnfulfillablePreviewItem.md) | An array of unfulfillable preview item information. | [optional]
**order_unfulfillable_reasons** | **string[]** |  | [optional]
**marketplace_id** | **string** | The marketplace the fulfillment order is placed against. |
**feature_constraints** | [**\SellingPartnerApi\Model\FbaOutbound\FeatureSettings[]**](FeatureSettings.md) | A list of features and their fulfillment policies to apply to the order. | [optional]

[[FbaOutbound Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
