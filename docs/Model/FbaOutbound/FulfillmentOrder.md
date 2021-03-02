## FulfillmentOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**seller_fulfillment_order_id** | **string** | The fulfillment order identifier submitted with the createFulfillmentOrder operation. |
**marketplace_id** | **string** | The identifier for the marketplace the fulfillment order is placed against. |
**displayable_order_id** | **string** | A fulfillment order identifier submitted with the createFulfillmentOrder operation. Displays as the order identifier in recipient-facing materials such as the packing slip. |
**displayable_order_date** | [**\DateTime**](\DateTime.md) |  |
**displayable_order_comment** | **string** | A text block submitted with the createFulfillmentOrder operation. Displays in recipient-facing materials such as the packing slip. |
**shipping_speed_category** | [**\SellingPartnerApi\Model\FbaOutbound\ShippingSpeedCategory**](ShippingSpeedCategory.md) |  |
**delivery_window** | [**\SellingPartnerApi\Model\FbaOutbound\DeliveryWindow**](DeliveryWindow.md) |  | [optional]
**destination_address** | [**\SellingPartnerApi\Model\FbaOutbound\Address**](Address.md) |  |
**fulfillment_action** | [**\SellingPartnerApi\Model\FbaOutbound\FulfillmentAction**](FulfillmentAction.md) |  | [optional]
**fulfillment_policy** | [**\SellingPartnerApi\Model\FbaOutbound\FulfillmentPolicy**](FulfillmentPolicy.md) |  | [optional]
**cod_settings** | [**\SellingPartnerApi\Model\FbaOutbound\CODSettings**](CODSettings.md) |  | [optional]
**received_date** | [**\DateTime**](\DateTime.md) |  |
**fulfillment_order_status** | [**\SellingPartnerApi\Model\FbaOutbound\FulfillmentOrderStatus**](FulfillmentOrderStatus.md) |  |
**status_updated_date** | [**\DateTime**](\DateTime.md) |  |
**notification_emails** | **string[]** | A list of email addresses that the seller provides that are used by Amazon to send ship-complete notifications to recipients on behalf of the seller. | [optional]
**feature_constraints** | [**\SellingPartnerApi\Model\FbaOutbound\FeatureSettings[]**](FeatureSettings.md) | A list of features and their fulfillment policies to apply to the order. | [optional]

[[FbaOutbound Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
