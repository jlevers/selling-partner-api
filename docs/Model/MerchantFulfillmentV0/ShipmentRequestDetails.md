## ShipmentRequestDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amazon_order_id** | **string** | An Amazon-defined order identifier, in 3-7-7 format. |
**seller_order_id** | **string** | A seller-defined order identifier. | [optional]
**item_list** | [**\SellingPartnerApi\Model\MerchantFulfillmentV0\FBMItem[]**](FBMItem.md) | The list of items to be included in a shipment. |
**ship_from_address** | [**\SellingPartnerApi\Model\MerchantFulfillmentV0\Address**](Address.md) |  |
**package_dimensions** | [**\SellingPartnerApi\Model\MerchantFulfillmentV0\PackageDimensions**](PackageDimensions.md) |  |
**weight** | [**\SellingPartnerApi\Model\MerchantFulfillmentV0\Weight**](Weight.md) |  |
**must_arrive_by_date** | **string** | A timestamp in ISO 8601 format. | [optional]
**ship_date** | **string** | A timestamp in ISO 8601 format. | [optional]
**shipping_service_options** | [**\SellingPartnerApi\Model\MerchantFulfillmentV0\ShippingServiceOptions**](ShippingServiceOptions.md) |  |
**label_customization** | [**\SellingPartnerApi\Model\MerchantFulfillmentV0\LabelCustomization**](LabelCustomization.md) |  | [optional]

[[MerchantFulfillmentV0 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
