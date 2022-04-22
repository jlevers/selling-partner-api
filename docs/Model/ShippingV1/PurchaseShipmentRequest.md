## PurchaseShipmentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_reference_id** | **string** | Client reference id. |
**ship_to** | [**\SellingPartnerApi\Model\ShippingV1\Address**](Address.md) |  |
**ship_from** | [**\SellingPartnerApi\Model\ShippingV1\Address**](Address.md) |  |
**ship_date** | **string** | The start date and time. Must be in ISO 8601 format. This defaults to the current date and time. | [optional]
**service_type** | [**\SellingPartnerApi\Model\ShippingV1\ServiceType**](ServiceType.md) |  |
**containers** | [**\SellingPartnerApi\Model\ShippingV1\Container[]**](Container.md) | A list of container. |
**label_specification** | [**\SellingPartnerApi\Model\ShippingV1\LabelSpecification**](LabelSpecification.md) |  |

[[ShippingV1 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
