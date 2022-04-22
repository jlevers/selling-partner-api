## CreateShipmentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipment_request_details** | [**\SellingPartnerApi\Model\MerchantFulfillmentV0\ShipmentRequestDetails**](ShipmentRequestDetails.md) |  |
**shipping_service_id** | **string** | An Amazon-defined shipping service identifier. |
**shipping_service_offer_id** | **string** | Identifies a shipping service order made by a carrier. | [optional]
**hazmat_type** | [**\SellingPartnerApi\Model\MerchantFulfillmentV0\HazmatType**](HazmatType.md) |  | [optional]
**label_format_option** | [**\SellingPartnerApi\Model\MerchantFulfillmentV0\LabelFormatOptionRequest**](LabelFormatOptionRequest.md) |  | [optional]
**shipment_level_seller_inputs_list** | [**\SellingPartnerApi\Model\MerchantFulfillmentV0\AdditionalSellerInputs[]**](AdditionalSellerInputs.md) | A list of additional seller input pairs required to purchase shipping. | [optional]

[[MerchantFulfillmentV0 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
