## InboundShipmentInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipment_id** | **string** | The shipment identifier submitted in the request. | [optional]
**shipment_name** | **string** | The name for the inbound shipment. | [optional]
**ship_from_address** | [**\SellingPartnerApi\Model\FbaInbound\Address**](Address.md) |  |
**destination_fulfillment_center_id** | **string** | An Amazon fulfillment center identifier created by Amazon. | [optional]
**shipment_status** | [**\SellingPartnerApi\Model\FbaInbound\ShipmentStatus**](ShipmentStatus.md) |  | [optional]
**label_prep_type** | [**\SellingPartnerApi\Model\FbaInbound\LabelPrepType**](LabelPrepType.md) |  | [optional]
**are_cases_required** | **bool** | Indicates whether or not an inbound shipment contains case-packed boxes. When AreCasesRequired &#x3D; true for an inbound shipment, all items in the inbound shipment must be case packed. |
**confirmed_need_by_date** | [**\DateTime**](\DateTime.md) |  | [optional]
**box_contents_source** | [**\SellingPartnerApi\Model\FbaInbound\BoxContentsSource**](BoxContentsSource.md) |  | [optional]
**estimated_box_contents_fee** | [**\SellingPartnerApi\Model\FbaInbound\BoxContentsFeeDetails**](BoxContentsFeeDetails.md) |  | [optional]

[[FbaInbound Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
