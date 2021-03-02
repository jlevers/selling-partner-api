## GetRatesRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ship_to** | [**\SellingPartnerApi\Model\Shipping\Address**](Address.md) |  |
**ship_from** | [**\SellingPartnerApi\Model\Shipping\Address**](Address.md) |  |
**service_types** | [**\SellingPartnerApi\Model\Shipping\ServiceType[]**](ServiceType.md) | A list of service types that can be used to send the shipment. |
**ship_date** | [**\DateTime**](\DateTime.md) | The start date and time. This defaults to the current date and time. | [optional]
**container_specifications** | [**\SellingPartnerApi\Model\Shipping\ContainerSpecification[]**](ContainerSpecification.md) | A list of container specifications. |

[[Shipping Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
