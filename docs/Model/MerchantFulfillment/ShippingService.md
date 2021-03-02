## ShippingService

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipping_service_name** | **string** | A plain text representation of a carrier&#39;s shipping service. For example, \&quot;UPS Ground\&quot; or \&quot;FedEx Standard Overnight\&quot;. |
**carrier_name** | **string** | The name of the carrier. |
**shipping_service_id** | **string** | An Amazon-defined shipping service identifier. |
**shipping_service_offer_id** | **string** | An Amazon-defined shipping service offer identifier. |
**ship_date** | [**\DateTime**](\DateTime.md) |  |
**earliest_estimated_delivery_date** | [**\DateTime**](\DateTime.md) |  | [optional]
**latest_estimated_delivery_date** | [**\DateTime**](\DateTime.md) |  | [optional]
**rate** | [**\SellingPartnerApi\Model\MerchantFulfillment\CurrencyAmount**](CurrencyAmount.md) |  |
**shipping_service_options** | [**\SellingPartnerApi\Model\MerchantFulfillment\ShippingServiceOptions**](ShippingServiceOptions.md) |  |
**available_shipping_service_options** | [**\SellingPartnerApi\Model\MerchantFulfillment\AvailableShippingServiceOptions**](AvailableShippingServiceOptions.md) |  | [optional]
**available_label_formats** | [**\SellingPartnerApi\Model\MerchantFulfillment\LabelFormat[]**](LabelFormat.md) | List of label formats. | [optional]
**available_format_options_for_label** | [**\SellingPartnerApi\Model\MerchantFulfillment\LabelFormatOption[]**](LabelFormatOption.md) | The available label formats. | [optional]
**requires_additional_seller_inputs** | **bool** | When true, additional seller inputs are required. |

[[MerchantFulfillment Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
