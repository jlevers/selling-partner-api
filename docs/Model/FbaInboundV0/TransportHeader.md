## TransportHeader

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**seller_id** | **string** | The Amazon seller identifier. |
**shipment_id** | **string** | A shipment identifier originally returned by the createInboundShipmentPlan operation. |
**is_partnered** | **bool** | Indicates whether a putTransportDetails request is for a partnered carrier.

Possible values:

* true - Request is for an Amazon-partnered carrier.

* false - Request is for a non-Amazon-partnered carrier. |
**shipment_type** | [**\SellingPartnerApi\Model\FbaInboundV0\ShipmentType**](ShipmentType.md) |  |

[[FbaInboundV0 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
