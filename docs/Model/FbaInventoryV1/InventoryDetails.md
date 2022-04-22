## InventoryDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fulfillable_quantity** | **int** | The item quantity that can be picked, packed, and shipped. | [optional]
**inbound_working_quantity** | **int** | The number of units in an inbound shipment for which you have notified Amazon. | [optional]
**inbound_shipped_quantity** | **int** | The number of units in an inbound shipment that you have notified Amazon about and have provided a tracking number. | [optional]
**inbound_receiving_quantity** | **int** | The number of units that have not yet been received at an Amazon fulfillment center for processing, but are part of an inbound shipment with some units that have already been received and processed. | [optional]
**reserved_quantity** | [**\SellingPartnerApi\Model\FbaInventoryV1\ReservedQuantity**](ReservedQuantity.md) |  | [optional]
**researching_quantity** | [**\SellingPartnerApi\Model\FbaInventoryV1\ResearchingQuantity**](ResearchingQuantity.md) |  | [optional]
**unfulfillable_quantity** | [**\SellingPartnerApi\Model\FbaInventoryV1\UnfulfillableQuantity**](UnfulfillableQuantity.md) |  | [optional]

[[FbaInventoryV1 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
