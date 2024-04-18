## PurchaseShipmentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**request_token** | **string** | A unique token generated to identify a getRates operation. |
**rate_id** | **string** | An identifier for the rate (shipment offering) provided by a shipping service provider. |
**requested_document_specification** | [**\SellingPartnerApi\Model\ShippingV2\RequestedDocumentSpecification**](RequestedDocumentSpecification.md) |  |
**requested_value_added_services** | [**\SellingPartnerApi\Model\ShippingV2\RequestedValueAddedService[]**](RequestedValueAddedService.md) | The value-added services to be added to a shipping service purchase. | [optional]
**additional_inputs** | **object** | The additional inputs required to purchase a shipping offering, in JSON format. The JSON provided here must adhere to the JSON schema that is returned in the response to the getAdditionalInputs operation.<br><br>Additional inputs are only required when indicated by the requiresAdditionalInputs property in the response to the getRates operation. | [optional]

[[ShippingV2 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
