## FulfillmentOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**seller_fulfillment_order_id** | **string** | The fulfillment order identifier submitted with the createFulfillmentOrder operation. |
**marketplace_id** | **string** | The identifier for the marketplace the fulfillment order is placed against. |
**displayable_order_id** | **string** | A fulfillment order identifier submitted with the createFulfillmentOrder operation. Displays as the order identifier in recipient-facing materials such as the packing slip. |
**displayable_order_date** | **string** | A datetime string in ISO 8601 format. |
**displayable_order_comment** | **string** | A text block submitted with the createFulfillmentOrder operation. Displays in recipient-facing materials such as the packing slip. |
**shipping_speed_category** | [**\SellingPartnerApi\Model\FbaOutboundV20200701\ShippingSpeedCategory**](ShippingSpeedCategory.md) |  |
**delivery_window** | [**\SellingPartnerApi\Model\FbaOutboundV20200701\DeliveryWindow**](DeliveryWindow.md) |  | [optional]
**destination_address** | [**\SellingPartnerApi\Model\FbaOutboundV20200701\Address**](Address.md) |  |
**fulfillment_action** | [**\SellingPartnerApi\Model\FbaOutboundV20200701\FulfillmentAction**](FulfillmentAction.md) |  | [optional]
**fulfillment_policy** | [**\SellingPartnerApi\Model\FbaOutboundV20200701\FulfillmentPolicy**](FulfillmentPolicy.md) |  | [optional]
**cod_settings** | [**\SellingPartnerApi\Model\FbaOutboundV20200701\CODSettings**](CODSettings.md) |  | [optional]
**received_date** | **string** | A datetime string in ISO 8601 format. |
**fulfillment_order_status** | [**\SellingPartnerApi\Model\FbaOutboundV20200701\FulfillmentOrderStatus**](FulfillmentOrderStatus.md) |  |
**status_updated_date** | **string** | A datetime string in ISO 8601 format. |
**notification_emails** | **string[]** | A list of email addresses that the seller provides that are used by Amazon to send ship-complete notifications to recipients on behalf of the seller. | [optional]
**feature_constraints** | [**\SellingPartnerApi\Model\FbaOutboundV20200701\FeatureSettings[]**](FeatureSettings.md) | A list of features and their fulfillment policies to apply to the order. | [optional]

[[FbaOutboundV20200701 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
