# # ServiceJob

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**create_time** | [**\DateTime**](\DateTime.md) | The date and time of the creation of the job, in ISO 8601 format. | [optional]
**service_job_id** | **string** | Amazon identifier for the service job. | [optional]
**service_job_status** | **string** | The status of the service job. | [optional]
**scope_of_work** | [**\Evers\SellingPartnerApi\Model\Service\ScopeOfWork**](ScopeOfWork.md) |  | [optional]
**seller** | [**\Evers\SellingPartnerApi\Model\Service\Seller**](Seller.md) |  | [optional]
**service_job_provider** | [**\Evers\SellingPartnerApi\Model\Service\ServiceJobProvider**](ServiceJobProvider.md) |  | [optional]
**preferred_appointment_times** | [**\Evers\SellingPartnerApi\Model\Service\AppointmentTime[]**](AppointmentTime.md) | A list of appointment windows preferred by the buyer. Included only if the buyer selected appointment windows when creating the order. | [optional]
**appointments** | [**\Evers\SellingPartnerApi\Model\Service\Appointment[]**](Appointment.md) | A list of appointments. | [optional]
**service_order_id** | **string** | The Amazon-defined identifier for an order placed by the buyer, in 3-7-7 format. | [optional]
**marketplace_id** | **string** | The marketplace identifier. | [optional]
**buyer** | [**\Evers\SellingPartnerApi\Model\Service\Buyer**](Buyer.md) |  | [optional]
**associated_items** | [**\Evers\SellingPartnerApi\Model\Service\AssociatedItem[]**](AssociatedItem.md) | A list of items associated with the service job. | [optional]
**service_location** | [**\Evers\SellingPartnerApi\Model\Service\ServiceLocation**](ServiceLocation.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
