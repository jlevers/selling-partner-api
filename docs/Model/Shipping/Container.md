# # Container

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**container_type** | **string** | The type of physical container being used. (always &#39;PACKAGE&#39;) | [optional]
**container_reference_id** | **string** | An identifier for the container. This must be unique within all the containers in the same shipment. |
**value** | [**\Evers\SellingPartnerApi\Model\Shipping\Currency**](Currency.md) |  |
**dimensions** | [**\Evers\SellingPartnerApi\Model\Shipping\Dimensions**](Dimensions.md) |  |
**items** | [**\Evers\SellingPartnerApi\Model\Shipping\ContainerItem[]**](ContainerItem.md) | A list of the items in the container. |
**weight** | [**\Evers\SellingPartnerApi\Model\Shipping\Weight**](Weight.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
