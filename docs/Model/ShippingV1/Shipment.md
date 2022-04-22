## Shipment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipment_id** | **string** | The unique shipment identifier. |
**client_reference_id** | **string** | Client reference id. |
**ship_from** | [**\SellingPartnerApi\Model\ShippingV1\Address**](Address.md) |  |
**ship_to** | [**\SellingPartnerApi\Model\ShippingV1\Address**](Address.md) |  |
**accepted_rate** | [**\SellingPartnerApi\Model\ShippingV1\AcceptedRate**](AcceptedRate.md) |  | [optional]
**shipper** | [**\SellingPartnerApi\Model\ShippingV1\Party**](Party.md) |  | [optional]
**containers** | [**\SellingPartnerApi\Model\ShippingV1\Container[]**](Container.md) | A list of container. |

[[ShippingV1 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
