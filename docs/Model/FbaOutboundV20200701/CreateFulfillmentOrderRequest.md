## CreateFulfillmentOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**marketplace_id** | **string** | The marketplace the fulfillment order is placed against. | [optional]
**seller_fulfillment_order_id** | **string** | A fulfillment order identifier that the seller creates to track their fulfillment order. The SellerFulfillmentOrderId must be unique for each fulfillment order that a seller creates. If the seller's system already creates unique order identifiers, then these might be good values for them to use. |
**displayable_order_id** | **string** | A fulfillment order identifier that the seller creates. This value displays as the order identifier in recipient-facing materials such as the outbound shipment packing slip. The value of DisplayableOrderId should match the order identifier that the seller provides to the recipient. The seller can use the SellerFulfillmentOrderId for this value or they can specify an alternate value if they want the recipient to reference an alternate order identifier. The value must be an alpha-numeric or ISO 8859-1 compliant string from one to 40 characters in length. Cannot contain two spaces in a row. Leading and trailing white space is removed. |
**displayable_order_date** | **string** | A datetime string in ISO 8601 format. |
**displayable_order_comment** | **string** | Order-specific text that appears in recipient-facing materials such as the outbound shipment packing slip. |
**shipping_speed_category** | [**\SellingPartnerApi\Model\FbaOutboundV20200701\ShippingSpeedCategory**](ShippingSpeedCategory.md) |  |
**delivery_window** | [**\SellingPartnerApi\Model\FbaOutboundV20200701\DeliveryWindow**](DeliveryWindow.md) |  | [optional]
**destination_address** | [**\SellingPartnerApi\Model\FbaOutboundV20200701\Address**](Address.md) |  |
**fulfillment_action** | [**\SellingPartnerApi\Model\FbaOutboundV20200701\FulfillmentAction**](FulfillmentAction.md) |  | [optional]
**fulfillment_policy** | [**\SellingPartnerApi\Model\FbaOutboundV20200701\FulfillmentPolicy**](FulfillmentPolicy.md) |  | [optional]
**cod_settings** | [**\SellingPartnerApi\Model\FbaOutboundV20200701\CODSettings**](CODSettings.md) |  | [optional]
**ship_from_country_code** | **string** | The two-character country code for the country from which the fulfillment order ships. Must be in ISO 3166-1 alpha-2 format. | [optional]
**notification_emails** | **string[]** | A list of email addresses that the seller provides that are used by Amazon to send ship-complete notifications to recipients on behalf of the seller. | [optional]
**feature_constraints** | [**\SellingPartnerApi\Model\FbaOutboundV20200701\FeatureSettings[]**](FeatureSettings.md) | A list of features and their fulfillment policies to apply to the order. | [optional]
**items** | [**\SellingPartnerApi\Model\FbaOutboundV20200701\CreateFulfillmentOrderItem[]**](CreateFulfillmentOrderItem.md) | An array of item information for creating a fulfillment order. |

[[FbaOutboundV20200701 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
