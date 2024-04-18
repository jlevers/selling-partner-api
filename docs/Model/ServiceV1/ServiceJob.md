## ServiceJob

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**create_time** | **string** | The date and time of the creation of the job in ISO 8601 format. | [optional]
**service_job_id** | **string** | Amazon identifier for the service job. | [optional]
**service_job_status** | **string** | The status of the service job. | [optional]
**scope_of_work** | [**\SellingPartnerApi\Model\ServiceV1\ScopeOfWork**](ScopeOfWork.md) |  | [optional]
**seller** | [**\SellingPartnerApi\Model\ServiceV1\Seller**](Seller.md) |  | [optional]
**service_job_provider** | [**\SellingPartnerApi\Model\ServiceV1\ServiceJobProvider**](ServiceJobProvider.md) |  | [optional]
**preferred_appointment_times** | [**\SellingPartnerApi\Model\ServiceV1\AppointmentTime[]**](AppointmentTime.md) | A list of appointment windows preferred by the buyer. Included only if the buyer selected appointment windows when creating the order. | [optional]
**appointments** | [**\SellingPartnerApi\Model\ServiceV1\Appointment[]**](Appointment.md) | A list of appointments. | [optional]
**service_order_id** | **string** | The Amazon-defined identifier for an order placed by the buyer, in 3-7-7 format. | [optional]
**marketplace_id** | **string** | The marketplace identifier. | [optional]
**store_id** | **string** | The Amazon-defined identifier for the region scope. | [optional]
**buyer** | [**\SellingPartnerApi\Model\ServiceV1\Buyer**](Buyer.md) |  | [optional]
**associated_items** | [**\SellingPartnerApi\Model\ServiceV1\AssociatedItem[]**](AssociatedItem.md) | A list of items associated with the service job. | [optional]
**service_location** | [**\SellingPartnerApi\Model\ServiceV1\ServiceLocation**](ServiceLocation.md) |  | [optional]

[[ServiceV1 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
