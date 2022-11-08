## StatusUpdateDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tracking_number** | **string** | This is required to be provided for every package and should match with the trackingNumber sent for the shipment confirmation. |
**status_code** | **string** | Indicates the shipment status code of the package that provides transportation information for Amazon tracking systems and ultimately for the final customer. |
**reason_code** | **string** | Provides a reason code for the status of the package that will provide additional information about the transportation status. |
**status_date_time** | **string** | The date and time when the shipment status was updated. This field is expected to be in ISO-8601 date/time format, with UTC time zone or UTC offset. For example, 2020-07-16T23:00:00Z or 2020-07-16T23:00:00+01:00. |
**status_location_address** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentShippingV20211228\Address**](Address.md) |  |
**shipment_schedule** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentShippingV20211228\ShipmentSchedule**](ShipmentSchedule.md) |  | [optional]

[[VendorDirectFulfillmentShippingV20211228 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
