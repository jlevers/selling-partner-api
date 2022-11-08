## FulfillmentShipment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amazon_shipment_id** | **string** | A shipment identifier assigned by Amazon. |
**fulfillment_center_id** | **string** | An identifier for the fulfillment center that the shipment will be sent from. |
**fulfillment_shipment_status** | **string** | The current status of the shipment. |
**shipping_date** | **string** | A datetime string in ISO 8601 format. | [optional]
**estimated_arrival_date** | **string** | A datetime string in ISO 8601 format. | [optional]
**shipping_notes** | **string[]** | Provides additional insight into shipment timeline. Primairly used to communicate that actual delivery dates aren't available. | [optional]
**fulfillment_shipment_item** | [**\SellingPartnerApi\Model\FbaOutboundV20200701\FulfillmentShipmentItem[]**](FulfillmentShipmentItem.md) | An array of fulfillment shipment item information. |
**fulfillment_shipment_package** | [**\SellingPartnerApi\Model\FbaOutboundV20200701\FulfillmentShipmentPackage[]**](FulfillmentShipmentPackage.md) | An array of fulfillment shipment package information. | [optional]

[[FbaOutboundV20200701 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
