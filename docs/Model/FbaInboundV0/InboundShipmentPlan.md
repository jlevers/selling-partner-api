## InboundShipmentPlan

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipment_id** | **string** | A shipment identifier originally returned by the createInboundShipmentPlan operation. |
**destination_fulfillment_center_id** | **string** | An Amazon fulfillment center identifier created by Amazon. |
**ship_to_address** | [**\SellingPartnerApi\Model\FbaInboundV0\Address**](Address.md) |  |
**label_prep_type** | [**\SellingPartnerApi\Model\FbaInboundV0\LabelPrepType**](LabelPrepType.md) |  |
**items** | [**\SellingPartnerApi\Model\FbaInboundV0\InboundShipmentPlanItem[]**](InboundShipmentPlanItem.md) | A list of inbound shipment plan item information. |
**estimated_box_contents_fee** | [**\SellingPartnerApi\Model\FbaInboundV0\BoxContentsFeeDetails**](BoxContentsFeeDetails.md) |  | [optional]

[[FbaInboundV0 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
