# # Shipment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipment_id** | **string** | The unique shipment identifier. |
**client_reference_id** | **string** | Client reference id. |
**ship_from** | [**\Evers\SellingPartnerApi\Model\Shipping\Address**](Address.md) |  |
**ship_to** | [**\Evers\SellingPartnerApi\Model\Shipping\Address**](Address.md) |  |
**accepted_rate** | [**\Evers\SellingPartnerApi\Model\Shipping\AcceptedRate**](AcceptedRate.md) |  | [optional]
**shipper** | [**\Evers\SellingPartnerApi\Model\Shipping\Party**](Party.md) |  | [optional]
**containers** | [**\Evers\SellingPartnerApi\Model\Shipping\Container[]**](Container.md) | A list of container. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
