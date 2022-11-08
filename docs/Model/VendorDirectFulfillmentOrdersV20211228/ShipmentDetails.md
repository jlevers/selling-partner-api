## ShipmentDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_priority_shipment** | **bool** | When true, this is a priority shipment. |
**is_scheduled_delivery_shipment** | **bool** | When true, this order is part of a scheduled delivery program. | [optional]
**is_pslip_required** | **bool** | When true, a packing slip is required to be sent to the customer. |
**is_gift** | **bool** | When true, the order contain a gift. Include the gift message and gift wrap information. | [optional]
**ship_method** | **string** | Ship method to be used for shipping the order. Amazon defines ship method codes indicating the shipping carrier and shipment service level. To see the full list of ship methods in use, including both the code and the friendly name, search the 'Help' section on Vendor Central for 'ship methods'. |
**shipment_dates** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228\ShipmentDates**](ShipmentDates.md) |  |
**message_to_customer** | **string** | Message to customer for order status. |

[[VendorDirectFulfillmentOrdersV20211228 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
