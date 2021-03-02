## Shipment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipment_id** | **string** | An Amazon-defined shipment identifier. |
**amazon_order_id** | **string** | An Amazon-defined order identifier, in 3-7-7 format. &lt;br&gt;**Pattern** : &#x60;[0-9A-Z]{3}-[0-9]{7}-[0-9]{7}&#x60;. |
**seller_order_id** | **string** | A seller-defined order identifier. | [optional]
**item_list** | [**\Evers\SellingPartnerApi\Model\MerchantFulfillment\FBMItem[]**](FBMItem.md) | The list of items to be included in a shipment. |
**ship_from_address** | [**\Evers\SellingPartnerApi\Model\MerchantFulfillment\Address**](Address.md) |  |
**ship_to_address** | [**\Evers\SellingPartnerApi\Model\MerchantFulfillment\Address**](Address.md) |  |
**package_dimensions** | [**\Evers\SellingPartnerApi\Model\MerchantFulfillment\PackageDimensions**](PackageDimensions.md) |  |
**weight** | [**\Evers\SellingPartnerApi\Model\MerchantFulfillment\Weight**](Weight.md) |  |
**insurance** | [**\Evers\SellingPartnerApi\Model\MerchantFulfillment\CurrencyAmount**](CurrencyAmount.md) |  |
**shipping_service** | [**\Evers\SellingPartnerApi\Model\MerchantFulfillment\ShippingService**](ShippingService.md) |  |
**label** | [**\Evers\SellingPartnerApi\Model\MerchantFulfillment\Label**](Label.md) |  |
**status** | [**\Evers\SellingPartnerApi\Model\MerchantFulfillment\ShipmentStatus**](ShipmentStatus.md) |  |
**tracking_id** | **string** | The shipment tracking identifier provided by the carrier. | [optional]
**created_date** | [**\DateTime**](\DateTime.md) |  |
**last_updated_date** | [**\DateTime**](\DateTime.md) |  | [optional]

[[MerchantFulfillment Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
