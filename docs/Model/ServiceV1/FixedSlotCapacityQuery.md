## FixedSlotCapacityQuery

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**capacity_types** | [**\SellingPartnerApi\Model\ServiceV1\CapacityType[]**](CapacityType.md) | An array of capacity types which are being requested. Default value is `[SCHEDULED_CAPACITY]`. | [optional]
**slot_duration** | **float** | Size in which slots are being requested. This value should be a multiple of 5 and fall in the range: 5 <= `slotDuration` <= 360. | [optional]
**start_date_time** | **string** | Start date time from which the capacity slots are being requested in ISO 8601 format. |
**end_date_time** | **string** | End date time up to which the capacity slots are being requested in ISO 8601 format. |

[[ServiceV1 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
