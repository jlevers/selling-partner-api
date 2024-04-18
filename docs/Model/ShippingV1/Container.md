## Container

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**container_type** | **string** | The type of physical container being used. (always 'PACKAGE') | [optional]
**container_reference_id** | **string** | An identifier for the container. This must be unique within all the containers in the same shipment. |
**value** | [**\SellingPartnerApi\Model\ShippingV1\Currency**](Currency.md) |  |
**dimensions** | [**\SellingPartnerApi\Model\ShippingV1\Dimensions**](Dimensions.md) |  |
**items** | [**\SellingPartnerApi\Model\ShippingV1\ContainerItem[]**](ContainerItem.md) | A list of the items in the container. |
**weight** | [**\SellingPartnerApi\Model\ShippingV1\Weight**](Weight.md) |  |

[[ShippingV1 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
