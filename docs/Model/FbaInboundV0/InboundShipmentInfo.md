## InboundShipmentInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipment_id** | **string** | The shipment identifier submitted in the request. | [optional]
**shipment_name** | **string** | The name for the inbound shipment. | [optional]
**ship_from_address** | [**\SellingPartnerApi\Model\FbaInboundV0\Address**](Address.md) |  |
**destination_fulfillment_center_id** | **string** | An Amazon fulfillment center identifier created by Amazon. | [optional]
**shipment_status** | [**\SellingPartnerApi\Model\FbaInboundV0\ShipmentStatus**](ShipmentStatus.md) |  | [optional]
**label_prep_type** | [**\SellingPartnerApi\Model\FbaInboundV0\LabelPrepType**](LabelPrepType.md) |  | [optional]
**are_cases_required** | **bool** | Indicates whether or not an inbound shipment contains case-packed boxes. When AreCasesRequired = true for an inbound shipment, all items in the inbound shipment must be case packed. |
**confirmed_need_by_date** | **string** | A date string in ISO 8601 format. | [optional]
**box_contents_source** | [**\SellingPartnerApi\Model\FbaInboundV0\BoxContentsSource**](BoxContentsSource.md) |  | [optional]
**estimated_box_contents_fee** | [**\SellingPartnerApi\Model\FbaInboundV0\BoxContentsFeeDetails**](BoxContentsFeeDetails.md) |  | [optional]

[[FbaInboundV0 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
