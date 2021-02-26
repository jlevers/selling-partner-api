# # PurchaseShipmentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_reference_id** | **string** | Client reference id. |
**ship_to** | [**\Evers\SellingPartnerApi\Model\Address**](Address.md) |  |
**ship_from** | [**\Evers\SellingPartnerApi\Model\Address**](Address.md) |  |
**ship_date** | [**\DateTime**](\DateTime.md) | The start date and time. This defaults to the current date and time. | [optional]
**service_type** | [**\Evers\SellingPartnerApi\Model\ServiceType**](ServiceType.md) |  |
**containers** | [**\Evers\SellingPartnerApi\Model\Container[]**](Container.md) | A list of container. |
**label_specification** | [**\Evers\SellingPartnerApi\Model\LabelSpecification**](LabelSpecification.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
