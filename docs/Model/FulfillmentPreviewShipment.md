# FulfillmentPreviewShipment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**earliest_ship_date** | [**\Evers\SellingPartnerApi\Model\Timestamp**](Timestamp.md) | The earliest date that the shipment is expected to be sent from the fulfillment center, in ISO 8601 date time format. | [optional] 
**latest_ship_date** | [**\Evers\SellingPartnerApi\Model\Timestamp**](Timestamp.md) | The latest date that the shipment is expected to be sent from the fulfillment center, in ISO 8601 date time format. | [optional] 
**earliest_arrival_date** | [**\Evers\SellingPartnerApi\Model\Timestamp**](Timestamp.md) | The earliest date that the shipment is expected to arrive at its destination. | [optional] 
**latest_arrival_date** | [**\Evers\SellingPartnerApi\Model\Timestamp**](Timestamp.md) | The latest date that the shipment is expected to arrive at its destination, in ISO 8601 date time format. | [optional] 
**shipping_notes** | **string[]** | Provides additional insight into the shipment timeline when exact delivery dates are not able to be precomputed. | [optional] 
**fulfillment_preview_items** | [**\Evers\SellingPartnerApi\Model\FulfillmentPreviewItemList**](FulfillmentPreviewItemList.md) | Information about the items in the shipment. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


