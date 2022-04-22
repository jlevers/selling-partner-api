## Shipment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipment_id** | **string** | An Amazon-defined shipment identifier. |
**amazon_order_id** | **string** | An Amazon-defined order identifier, in 3-7-7 format. |
**seller_order_id** | **string** | A seller-defined order identifier. | [optional]
**item_list** | [**\SellingPartnerApi\Model\MerchantFulfillmentV0\FBMItem[]**](FBMItem.md) | The list of items to be included in a shipment. |
**ship_from_address** | [**\SellingPartnerApi\Model\MerchantFulfillmentV0\Address**](Address.md) |  |
**ship_to_address** | [**\SellingPartnerApi\Model\MerchantFulfillmentV0\Address**](Address.md) |  |
**package_dimensions** | [**\SellingPartnerApi\Model\MerchantFulfillmentV0\PackageDimensions**](PackageDimensions.md) |  |
**weight** | [**\SellingPartnerApi\Model\MerchantFulfillmentV0\Weight**](Weight.md) |  |
**insurance** | [**\SellingPartnerApi\Model\MerchantFulfillmentV0\CurrencyAmount**](CurrencyAmount.md) |  |
**shipping_service** | [**\SellingPartnerApi\Model\MerchantFulfillmentV0\ShippingService**](ShippingService.md) |  |
**label** | [**\SellingPartnerApi\Model\MerchantFulfillmentV0\Label**](Label.md) |  |
**status** | [**\SellingPartnerApi\Model\MerchantFulfillmentV0\ShipmentStatus**](ShipmentStatus.md) |  |
**tracking_id** | **string** | The shipment tracking identifier provided by the carrier. | [optional]
**created_date** | **string** | A timestamp in ISO 8601 format. |
**last_updated_date** | **string** | A timestamp in ISO 8601 format. | [optional]

[[MerchantFulfillmentV0 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
