## Shipment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipment_id** | **string** | The unique shipment identifier. |
**client_reference_id** | **string** | Client reference id. |
**ship_from** | [**\SellingPartnerApi\Model\Shipping\Address**](Address.md) |  |
**ship_to** | [**\SellingPartnerApi\Model\Shipping\Address**](Address.md) |  |
**accepted_rate** | [**\SellingPartnerApi\Model\Shipping\AcceptedRate**](AcceptedRate.md) |  | [optional]
**shipper** | [**\SellingPartnerApi\Model\Shipping\Party**](Party.md) |  | [optional]
**containers** | [**\SellingPartnerApi\Model\Shipping\Container[]**](Container.md) | A list of container. |

[[Shipping Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
