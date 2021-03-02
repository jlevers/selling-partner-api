## PurchaseShipmentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_reference_id** | **string** | Client reference id. |
**ship_to** | [**\SellingPartnerApi\Model\Shipping\Address**](Address.md) |  |
**ship_from** | [**\SellingPartnerApi\Model\Shipping\Address**](Address.md) |  |
**ship_date** | [**\DateTime**](\DateTime.md) | The start date and time. This defaults to the current date and time. | [optional]
**service_type** | [**\SellingPartnerApi\Model\Shipping\ServiceType**](ServiceType.md) |  |
**containers** | [**\SellingPartnerApi\Model\Shipping\Container[]**](Container.md) | A list of container. |
**label_specification** | [**\SellingPartnerApi\Model\Shipping\LabelSpecification**](LabelSpecification.md) |  |

[[Shipping Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
