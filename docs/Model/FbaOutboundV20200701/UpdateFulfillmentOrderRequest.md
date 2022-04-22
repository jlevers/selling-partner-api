## UpdateFulfillmentOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**marketplace_id** | **string** | The marketplace the fulfillment order is placed against. | [optional]
**displayable_order_id** | **string** | A fulfillment order identifier that the seller creates. This value displays as the order identifier in recipient-facing materials such as the outbound shipment packing slip. The value of DisplayableOrderId should match the order identifier that the seller provides to the recipient. The seller can use the SellerFulfillmentOrderId for this value or they can specify an alternate value if they want the recipient to reference an alternate order identifier. | [optional]
**displayable_order_date** | **string** | A datetime string in ISO 8601 format. | [optional]
**displayable_order_comment** | **string** | Order-specific text that appears in recipient-facing materials such as the outbound shipment packing slip. | [optional]
**shipping_speed_category** | [**\SellingPartnerApi\Model\FbaOutboundV20200701\ShippingSpeedCategory**](ShippingSpeedCategory.md) |  | [optional]
**destination_address** | [**\SellingPartnerApi\Model\FbaOutboundV20200701\Address**](Address.md) |  | [optional]
**fulfillment_action** | [**\SellingPartnerApi\Model\FbaOutboundV20200701\FulfillmentAction**](FulfillmentAction.md) |  | [optional]
**fulfillment_policy** | [**\SellingPartnerApi\Model\FbaOutboundV20200701\FulfillmentPolicy**](FulfillmentPolicy.md) |  | [optional]
**ship_from_country_code** | **string** | The two-character country code for the country from which the fulfillment order ships. Must be in ISO 3166-1 alpha-2 format. | [optional]
**notification_emails** | **string[]** | A list of email addresses that the seller provides that are used by Amazon to send ship-complete notifications to recipients on behalf of the seller. | [optional]
**feature_constraints** | [**\SellingPartnerApi\Model\FbaOutboundV20200701\FeatureSettings[]**](FeatureSettings.md) | A list of features and their fulfillment policies to apply to the order. | [optional]
**items** | [**\SellingPartnerApi\Model\FbaOutboundV20200701\UpdateFulfillmentOrderItem[]**](UpdateFulfillmentOrderItem.md) | An array of fulfillment order item information for updating a fulfillment order. | [optional]

[[FbaOutboundV20200701 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
