## GetEligibleShipmentServicesResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipping_service_list** | [**\SellingPartnerApi\Model\MerchantFulfillmentV0\ShippingService[]**](ShippingService.md) | A list of shipping services offers. |
**rejected_shipping_service_list** | [**\SellingPartnerApi\Model\MerchantFulfillmentV0\RejectedShippingService[]**](RejectedShippingService.md) | List of services that were for some reason unavailable for this request | [optional]
**temporarily_unavailable_carrier_list** | [**\SellingPartnerApi\Model\MerchantFulfillmentV0\TemporarilyUnavailableCarrier[]**](TemporarilyUnavailableCarrier.md) | A list of temporarily unavailable carriers. | [optional]
**terms_and_conditions_not_accepted_carrier_list** | [**\SellingPartnerApi\Model\MerchantFulfillmentV0\TermsAndConditionsNotAcceptedCarrier[]**](TermsAndConditionsNotAcceptedCarrier.md) | List of carriers whose terms and conditions were not accepted by the seller. | [optional]

[[MerchantFulfillmentV0 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
