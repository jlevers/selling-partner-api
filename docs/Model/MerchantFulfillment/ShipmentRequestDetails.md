# # ShipmentRequestDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amazon_order_id** | **string** | An Amazon-defined order identifier, in 3-7-7 format. &lt;br&gt;**Pattern** : &#x60;[0-9A-Z]{3}-[0-9]{7}-[0-9]{7}&#x60;. |
**seller_order_id** | **string** | A seller-defined order identifier. | [optional]
**item_list** | [**\Evers\SellingPartnerApi\Model\MerchantFulfillment\FBMItem[]**](FBMItem.md) | The list of items to be included in a shipment. |
**ship_from_address** | [**\Evers\SellingPartnerApi\Model\MerchantFulfillment\Address**](Address.md) |  |
**package_dimensions** | [**\Evers\SellingPartnerApi\Model\MerchantFulfillment\PackageDimensions**](PackageDimensions.md) |  |
**weight** | [**\Evers\SellingPartnerApi\Model\MerchantFulfillment\Weight**](Weight.md) |  |
**must_arrive_by_date** | [**\DateTime**](\DateTime.md) |  | [optional]
**ship_date** | [**\DateTime**](\DateTime.md) |  | [optional]
**shipping_service_options** | [**\Evers\SellingPartnerApi\Model\MerchantFulfillment\ShippingServiceOptions**](ShippingServiceOptions.md) |  |
**label_customization** | [**\Evers\SellingPartnerApi\Model\MerchantFulfillment\LabelCustomization**](LabelCustomization.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
