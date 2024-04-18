## ShippingService

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipping_service_name** | **string** | A plain text representation of a carrier's shipping service. For example, \"UPS Ground\" or \"FedEx Standard Overnight\". |
**carrier_name** | **string** | The name of the carrier. |
**shipping_service_id** | **string** | An Amazon-defined shipping service identifier. |
**shipping_service_offer_id** | **string** | An Amazon-defined shipping service offer identifier. |
**ship_date** | **string** | A timestamp in ISO 8601 format. |
**earliest_estimated_delivery_date** | **string** | A timestamp in ISO 8601 format. | [optional]
**latest_estimated_delivery_date** | **string** | A timestamp in ISO 8601 format. | [optional]
**rate** | [**\SellingPartnerApi\Model\MerchantFulfillmentV0\CurrencyAmount**](CurrencyAmount.md) |  |
**shipping_service_options** | [**\SellingPartnerApi\Model\MerchantFulfillmentV0\ShippingServiceOptions**](ShippingServiceOptions.md) |  |
**available_shipping_service_options** | [**\SellingPartnerApi\Model\MerchantFulfillmentV0\AvailableShippingServiceOptions**](AvailableShippingServiceOptions.md) |  | [optional]
**available_label_formats** | [**\SellingPartnerApi\Model\MerchantFulfillmentV0\LabelFormat[]**](LabelFormat.md) | List of label formats. | [optional]
**available_format_options_for_label** | [**\SellingPartnerApi\Model\MerchantFulfillmentV0\LabelFormatOption[]**](LabelFormatOption.md) | The available label formats. | [optional]
**requires_additional_seller_inputs** | **bool** | When true, additional seller inputs are required. |

[[MerchantFulfillmentV0 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
