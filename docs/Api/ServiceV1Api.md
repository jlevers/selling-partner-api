# SellingPartnerApi\ServiceV1Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**addAppointmentForServiceJobByServiceJobId()**](ServiceV1Api.md#addAppointmentForServiceJobByServiceJobId) | **POST** /service/v1/serviceJobs/{serviceJobId}/appointments | 
[**assignAppointmentResources()**](ServiceV1Api.md#assignAppointmentResources) | **PUT** /service/v1/serviceJobs/{serviceJobId}/appointments/{appointmentId}/resources | 
[**cancelReservation()**](ServiceV1Api.md#cancelReservation) | **DELETE** /service/v1/reservation/{reservationId} | 
[**cancelServiceJobByServiceJobId()**](ServiceV1Api.md#cancelServiceJobByServiceJobId) | **PUT** /service/v1/serviceJobs/{serviceJobId}/cancellations | 
[**completeServiceJobByServiceJobId()**](ServiceV1Api.md#completeServiceJobByServiceJobId) | **PUT** /service/v1/serviceJobs/{serviceJobId}/completions | 
[**createReservation()**](ServiceV1Api.md#createReservation) | **POST** /service/v1/reservation | 
[**createServiceDocumentUploadDestination()**](ServiceV1Api.md#createServiceDocumentUploadDestination) | **POST** /service/v1/documents | 
[**getAppointmentSlots()**](ServiceV1Api.md#getAppointmentSlots) | **GET** /service/v1/appointmentSlots | 
[**getAppointmmentSlotsByJobId()**](ServiceV1Api.md#getAppointmmentSlotsByJobId) | **GET** /service/v1/serviceJobs/{serviceJobId}/appointmentSlots | 
[**getFixedSlotCapacity()**](ServiceV1Api.md#getFixedSlotCapacity) | **POST** /service/v1/serviceResources/{resourceId}/capacity/fixed | 
[**getRangeSlotCapacity()**](ServiceV1Api.md#getRangeSlotCapacity) | **POST** /service/v1/serviceResources/{resourceId}/capacity/range | 
[**getServiceJobByServiceJobId()**](ServiceV1Api.md#getServiceJobByServiceJobId) | **GET** /service/v1/serviceJobs/{serviceJobId} | 
[**getServiceJobs()**](ServiceV1Api.md#getServiceJobs) | **GET** /service/v1/serviceJobs | 
[**rescheduleAppointmentForServiceJobByServiceJobId()**](ServiceV1Api.md#rescheduleAppointmentForServiceJobByServiceJobId) | **POST** /service/v1/serviceJobs/{serviceJobId}/appointments/{appointmentId} | 
[**setAppointmentFulfillmentData()**](ServiceV1Api.md#setAppointmentFulfillmentData) | **PUT** /service/v1/serviceJobs/{serviceJobId}/appointments/{appointmentId}/fulfillment | 
[**updateReservation()**](ServiceV1Api.md#updateReservation) | **PUT** /service/v1/reservation/{reservationId} | 
[**updateSchedule()**](ServiceV1Api.md#updateSchedule) | **PUT** /service/v1/serviceResources/{resourceId}/schedules | 


## `addAppointmentForServiceJobByServiceJobId()`

```php
addAppointmentForServiceJobByServiceJobId($service_job_id, $body): \SellingPartnerApi\Model\ServiceV1\SetAppointmentResponse
```



Adds an appointment to the service job indicated by the service job identifier specified.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 5 | 20 |

The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// See README for more information on the Configuration object's options
$config = new SellingPartnerApi\Configuration([
    "lwaClientId" => "<LWA client ID>",
    "lwaClientSecret" => "<LWA client secret>",
    "lwaRefreshToken" => "<LWA refresh token>",
    "awsAccessKeyId" => "<AWS access key ID>",
    "awsSecretAccessKey" => "<AWS secret access key>",
    "endpoint" => SellingPartnerApi\Endpoint::NA  // or another endpoint from lib/Endpoints.php
]);

$apiInstance = new SellingPartnerApi\Api\ServiceV1Api($config);
$service_job_id = 'service_job_id_example'; // string | An Amazon defined service job identifier.
$body = new \SellingPartnerApi\Model\ServiceV1\AddAppointmentRequest(); // \SellingPartnerApi\Model\ServiceV1\AddAppointmentRequest | Add appointment operation input details.

try {
    $result = $apiInstance->addAppointmentForServiceJobByServiceJobId($service_job_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceV1Api->addAppointmentForServiceJobByServiceJobId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_job_id** | **string**| An Amazon defined service job identifier. |
 **body** | [**\SellingPartnerApi\Model\ServiceV1\AddAppointmentRequest**](../Model/ServiceV1/AddAppointmentRequest.md)| Add appointment operation input details. |

### Return type

[**\SellingPartnerApi\Model\ServiceV1\SetAppointmentResponse**](../Model/ServiceV1/SetAppointmentResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ServiceV1 Model list]](../Model/ServiceV1)
[[README]](../../README.md)

## `assignAppointmentResources()`

```php
assignAppointmentResources($service_job_id, $appointment_id, $body): \SellingPartnerApi\Model\ServiceV1\AssignAppointmentResourcesResponse
```



Assigns new resource(s) or overwrite/update the existing one(s) to a service job appointment.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1 | 2 |

The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// See README for more information on the Configuration object's options
$config = new SellingPartnerApi\Configuration([
    "lwaClientId" => "<LWA client ID>",
    "lwaClientSecret" => "<LWA client secret>",
    "lwaRefreshToken" => "<LWA refresh token>",
    "awsAccessKeyId" => "<AWS access key ID>",
    "awsSecretAccessKey" => "<AWS secret access key>",
    "endpoint" => SellingPartnerApi\Endpoint::NA  // or another endpoint from lib/Endpoints.php
]);

$apiInstance = new SellingPartnerApi\Api\ServiceV1Api($config);
$service_job_id = 'service_job_id_example'; // string | An Amazon-defined service job identifier. Get this value by calling the `getServiceJobs` operation of the Services API.
$appointment_id = 'appointment_id_example'; // string | An Amazon-defined identifier of active service job appointment.
$body = new \SellingPartnerApi\Model\ServiceV1\AssignAppointmentResourcesRequest(); // \SellingPartnerApi\Model\ServiceV1\AssignAppointmentResourcesRequest

try {
    $result = $apiInstance->assignAppointmentResources($service_job_id, $appointment_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceV1Api->assignAppointmentResources: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_job_id** | **string**| An Amazon-defined service job identifier. Get this value by calling the `getServiceJobs` operation of the Services API. |
 **appointment_id** | **string**| An Amazon-defined identifier of active service job appointment. |
 **body** | [**\SellingPartnerApi\Model\ServiceV1\AssignAppointmentResourcesRequest**](../Model/ServiceV1/AssignAppointmentResourcesRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\ServiceV1\AssignAppointmentResourcesResponse**](../Model/ServiceV1/AssignAppointmentResourcesResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ServiceV1 Model list]](../Model/ServiceV1)
[[README]](../../README.md)

## `cancelReservation()`

```php
cancelReservation($reservation_id, $marketplace_ids): \SellingPartnerApi\Model\ServiceV1\CancelReservationResponse
```



Cancel a reservation. 

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 5 | 20 |

The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// See README for more information on the Configuration object's options
$config = new SellingPartnerApi\Configuration([
    "lwaClientId" => "<LWA client ID>",
    "lwaClientSecret" => "<LWA client secret>",
    "lwaRefreshToken" => "<LWA refresh token>",
    "awsAccessKeyId" => "<AWS access key ID>",
    "awsSecretAccessKey" => "<AWS secret access key>",
    "endpoint" => SellingPartnerApi\Endpoint::NA  // or another endpoint from lib/Endpoints.php
]);

$apiInstance = new SellingPartnerApi\Api\ServiceV1Api($config);
$reservation_id = 'reservation_id_example'; // string | Reservation Identifier
$marketplace_ids = array('marketplace_ids_example'); // string[] | An identifier for the marketplace in which the resource operates.

try {
    $result = $apiInstance->cancelReservation($reservation_id, $marketplace_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceV1Api->cancelReservation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reservation_id** | **string**| Reservation Identifier |
 **marketplace_ids** | [**string[]**](../Model/ServiceV1/string.md)| An identifier for the marketplace in which the resource operates. |

### Return type

[**\SellingPartnerApi\Model\ServiceV1\CancelReservationResponse**](../Model/ServiceV1/CancelReservationResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ServiceV1 Model list]](../Model/ServiceV1)
[[README]](../../README.md)

## `cancelServiceJobByServiceJobId()`

```php
cancelServiceJobByServiceJobId($service_job_id, $cancellation_reason_code): \SellingPartnerApi\Model\ServiceV1\CancelServiceJobByServiceJobIdResponse
```



Cancels the service job indicated by the service job identifier specified.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 5 | 20 |

The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// See README for more information on the Configuration object's options
$config = new SellingPartnerApi\Configuration([
    "lwaClientId" => "<LWA client ID>",
    "lwaClientSecret" => "<LWA client secret>",
    "lwaRefreshToken" => "<LWA refresh token>",
    "awsAccessKeyId" => "<AWS access key ID>",
    "awsSecretAccessKey" => "<AWS secret access key>",
    "endpoint" => SellingPartnerApi\Endpoint::NA  // or another endpoint from lib/Endpoints.php
]);

$apiInstance = new SellingPartnerApi\Api\ServiceV1Api($config);
$service_job_id = 'service_job_id_example'; // string | An Amazon defined service job identifier.
$cancellation_reason_code = 'cancellation_reason_code_example'; // string | A cancel reason code that specifies the reason for cancelling a service job.

try {
    $result = $apiInstance->cancelServiceJobByServiceJobId($service_job_id, $cancellation_reason_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceV1Api->cancelServiceJobByServiceJobId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_job_id** | **string**| An Amazon defined service job identifier. |
 **cancellation_reason_code** | **string**| A cancel reason code that specifies the reason for cancelling a service job. |

### Return type

[**\SellingPartnerApi\Model\ServiceV1\CancelServiceJobByServiceJobIdResponse**](../Model/ServiceV1/CancelServiceJobByServiceJobIdResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ServiceV1 Model list]](../Model/ServiceV1)
[[README]](../../README.md)

## `completeServiceJobByServiceJobId()`

```php
completeServiceJobByServiceJobId($service_job_id): \SellingPartnerApi\Model\ServiceV1\CompleteServiceJobByServiceJobIdResponse
```



Completes the service job indicated by the service job identifier specified.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 5 | 20 |

The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// See README for more information on the Configuration object's options
$config = new SellingPartnerApi\Configuration([
    "lwaClientId" => "<LWA client ID>",
    "lwaClientSecret" => "<LWA client secret>",
    "lwaRefreshToken" => "<LWA refresh token>",
    "awsAccessKeyId" => "<AWS access key ID>",
    "awsSecretAccessKey" => "<AWS secret access key>",
    "endpoint" => SellingPartnerApi\Endpoint::NA  // or another endpoint from lib/Endpoints.php
]);

$apiInstance = new SellingPartnerApi\Api\ServiceV1Api($config);
$service_job_id = 'service_job_id_example'; // string | An Amazon defined service job identifier.

try {
    $result = $apiInstance->completeServiceJobByServiceJobId($service_job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceV1Api->completeServiceJobByServiceJobId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_job_id** | **string**| An Amazon defined service job identifier. |

### Return type

[**\SellingPartnerApi\Model\ServiceV1\CompleteServiceJobByServiceJobIdResponse**](../Model/ServiceV1/CompleteServiceJobByServiceJobIdResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ServiceV1 Model list]](../Model/ServiceV1)
[[README]](../../README.md)

## `createReservation()`

```php
createReservation($marketplace_ids, $body): \SellingPartnerApi\Model\ServiceV1\CreateReservationResponse
```



Create a reservation.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 5 | 20 |

The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// See README for more information on the Configuration object's options
$config = new SellingPartnerApi\Configuration([
    "lwaClientId" => "<LWA client ID>",
    "lwaClientSecret" => "<LWA client secret>",
    "lwaRefreshToken" => "<LWA refresh token>",
    "awsAccessKeyId" => "<AWS access key ID>",
    "awsSecretAccessKey" => "<AWS secret access key>",
    "endpoint" => SellingPartnerApi\Endpoint::NA  // or another endpoint from lib/Endpoints.php
]);

$apiInstance = new SellingPartnerApi\Api\ServiceV1Api($config);
$marketplace_ids = array('marketplace_ids_example'); // string[] | An identifier for the marketplace in which the resource operates.
$body = new \SellingPartnerApi\Model\ServiceV1\CreateReservationRequest(); // \SellingPartnerApi\Model\ServiceV1\CreateReservationRequest | Reservation details

try {
    $result = $apiInstance->createReservation($marketplace_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceV1Api->createReservation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_ids** | [**string[]**](../Model/ServiceV1/string.md)| An identifier for the marketplace in which the resource operates. |
 **body** | [**\SellingPartnerApi\Model\ServiceV1\CreateReservationRequest**](../Model/ServiceV1/CreateReservationRequest.md)| Reservation details |

### Return type

[**\SellingPartnerApi\Model\ServiceV1\CreateReservationResponse**](../Model/ServiceV1/CreateReservationResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ServiceV1 Model list]](../Model/ServiceV1)
[[README]](../../README.md)

## `createServiceDocumentUploadDestination()`

```php
createServiceDocumentUploadDestination($body): \SellingPartnerApi\Model\ServiceV1\CreateServiceDocumentUploadDestination
```



Creates an upload destination.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 5 | 20 |

The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// See README for more information on the Configuration object's options
$config = new SellingPartnerApi\Configuration([
    "lwaClientId" => "<LWA client ID>",
    "lwaClientSecret" => "<LWA client secret>",
    "lwaRefreshToken" => "<LWA refresh token>",
    "awsAccessKeyId" => "<AWS access key ID>",
    "awsSecretAccessKey" => "<AWS secret access key>",
    "endpoint" => SellingPartnerApi\Endpoint::NA  // or another endpoint from lib/Endpoints.php
]);

$apiInstance = new SellingPartnerApi\Api\ServiceV1Api($config);
$body = new \SellingPartnerApi\Model\ServiceV1\ServiceUploadDocument(); // \SellingPartnerApi\Model\ServiceV1\ServiceUploadDocument | Upload document operation input details.

try {
    $result = $apiInstance->createServiceDocumentUploadDestination($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceV1Api->createServiceDocumentUploadDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\ServiceV1\ServiceUploadDocument**](../Model/ServiceV1/ServiceUploadDocument.md)| Upload document operation input details. |

### Return type

[**\SellingPartnerApi\Model\ServiceV1\CreateServiceDocumentUploadDestination**](../Model/ServiceV1/CreateServiceDocumentUploadDestination.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ServiceV1 Model list]](../Model/ServiceV1)
[[README]](../../README.md)

## `getAppointmentSlots()`

```php
getAppointmentSlots($asin, $store_id, $marketplace_ids, $start_time, $end_time): \SellingPartnerApi\Model\ServiceV1\GetAppointmentSlotsResponse
```



Gets appointment slots as per the service context specified.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 20 | 40 |

The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// See README for more information on the Configuration object's options
$config = new SellingPartnerApi\Configuration([
    "lwaClientId" => "<LWA client ID>",
    "lwaClientSecret" => "<LWA client secret>",
    "lwaRefreshToken" => "<LWA refresh token>",
    "awsAccessKeyId" => "<AWS access key ID>",
    "awsSecretAccessKey" => "<AWS secret access key>",
    "endpoint" => SellingPartnerApi\Endpoint::NA  // or another endpoint from lib/Endpoints.php
]);

$apiInstance = new SellingPartnerApi\Api\ServiceV1Api($config);
$asin = 'asin_example'; // string | ASIN associated with the service.
$store_id = 'store_id_example'; // string | Store identifier defining the region scope to retrive appointment slots.
$marketplace_ids = array('marketplace_ids_example'); // string[] | An identifier for the marketplace for which appointment slots are queried
$start_time = 'start_time_example'; // string | A time from which the appointment slots will be retrieved. The specified time must be in ISO 8601 format. If `startTime` is provided, `endTime` should also be provided. Default value is as per business configuration.
$end_time = 'end_time_example'; // string | A time up to which the appointment slots will be retrieved. The specified time must be in ISO 8601 format. If `endTime` is provided, `startTime` should also be provided. Default value is as per business configuration. Maximum range of appointment slots can be 90 days.

try {
    $result = $apiInstance->getAppointmentSlots($asin, $store_id, $marketplace_ids, $start_time, $end_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceV1Api->getAppointmentSlots: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asin** | **string**| ASIN associated with the service. |
 **store_id** | **string**| Store identifier defining the region scope to retrive appointment slots. |
 **marketplace_ids** | [**string[]**](../Model/ServiceV1/string.md)| An identifier for the marketplace for which appointment slots are queried |
 **start_time** | **string**| A time from which the appointment slots will be retrieved. The specified time must be in ISO 8601 format. If `startTime` is provided, `endTime` should also be provided. Default value is as per business configuration. | [optional]
 **end_time** | **string**| A time up to which the appointment slots will be retrieved. The specified time must be in ISO 8601 format. If `endTime` is provided, `startTime` should also be provided. Default value is as per business configuration. Maximum range of appointment slots can be 90 days. | [optional]

### Return type

[**\SellingPartnerApi\Model\ServiceV1\GetAppointmentSlotsResponse**](../Model/ServiceV1/GetAppointmentSlotsResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ServiceV1 Model list]](../Model/ServiceV1)
[[README]](../../README.md)

## `getAppointmmentSlotsByJobId()`

```php
getAppointmmentSlotsByJobId($service_job_id, $marketplace_ids, $start_time, $end_time): \SellingPartnerApi\Model\ServiceV1\GetAppointmentSlotsResponse
```



Gets appointment slots for the service associated with the service job id specified.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 5 | 20 |

The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// See README for more information on the Configuration object's options
$config = new SellingPartnerApi\Configuration([
    "lwaClientId" => "<LWA client ID>",
    "lwaClientSecret" => "<LWA client secret>",
    "lwaRefreshToken" => "<LWA refresh token>",
    "awsAccessKeyId" => "<AWS access key ID>",
    "awsSecretAccessKey" => "<AWS secret access key>",
    "endpoint" => SellingPartnerApi\Endpoint::NA  // or another endpoint from lib/Endpoints.php
]);

$apiInstance = new SellingPartnerApi\Api\ServiceV1Api($config);
$service_job_id = 'service_job_id_example'; // string | A service job identifier to retrive appointment slots for associated service.
$marketplace_ids = array('marketplace_ids_example'); // string[] | An identifier for the marketplace in which the resource operates.
$start_time = 'start_time_example'; // string | A time from which the appointment slots will be retrieved. The specified time must be in ISO 8601 format. If `startTime` is provided, `endTime` should also be provided. Default value is as per business configuration.
$end_time = 'end_time_example'; // string | A time up to which the appointment slots will be retrieved. The specified time must be in ISO 8601 format. If `endTime` is provided, `startTime` should also be provided. Default value is as per business configuration. Maximum range of appointment slots can be 90 days.

try {
    $result = $apiInstance->getAppointmmentSlotsByJobId($service_job_id, $marketplace_ids, $start_time, $end_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceV1Api->getAppointmmentSlotsByJobId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_job_id** | **string**| A service job identifier to retrive appointment slots for associated service. |
 **marketplace_ids** | [**string[]**](../Model/ServiceV1/string.md)| An identifier for the marketplace in which the resource operates. |
 **start_time** | **string**| A time from which the appointment slots will be retrieved. The specified time must be in ISO 8601 format. If `startTime` is provided, `endTime` should also be provided. Default value is as per business configuration. | [optional]
 **end_time** | **string**| A time up to which the appointment slots will be retrieved. The specified time must be in ISO 8601 format. If `endTime` is provided, `startTime` should also be provided. Default value is as per business configuration. Maximum range of appointment slots can be 90 days. | [optional]

### Return type

[**\SellingPartnerApi\Model\ServiceV1\GetAppointmentSlotsResponse**](../Model/ServiceV1/GetAppointmentSlotsResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ServiceV1 Model list]](../Model/ServiceV1)
[[README]](../../README.md)

## `getFixedSlotCapacity()`

```php
getFixedSlotCapacity($resource_id, $marketplace_ids, $body, $next_page_token): \SellingPartnerApi\Model\ServiceV1\FixedSlotCapacity
```



Provides capacity in fixed-size slots. 

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 5 | 20 |

The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// See README for more information on the Configuration object's options
$config = new SellingPartnerApi\Configuration([
    "lwaClientId" => "<LWA client ID>",
    "lwaClientSecret" => "<LWA client secret>",
    "lwaRefreshToken" => "<LWA refresh token>",
    "awsAccessKeyId" => "<AWS access key ID>",
    "awsSecretAccessKey" => "<AWS secret access key>",
    "endpoint" => SellingPartnerApi\Endpoint::NA  // or another endpoint from lib/Endpoints.php
]);

$apiInstance = new SellingPartnerApi\Api\ServiceV1Api($config);
$resource_id = 'resource_id_example'; // string | Resource Identifier.
$marketplace_ids = array('marketplace_ids_example'); // string[] | An identifier for the marketplace in which the resource operates.
$body = new \SellingPartnerApi\Model\ServiceV1\FixedSlotCapacityQuery(); // \SellingPartnerApi\Model\ServiceV1\FixedSlotCapacityQuery | Request body.
$next_page_token = 'next_page_token_example'; // string | Next page token returned in the response of your previous request.

try {
    $result = $apiInstance->getFixedSlotCapacity($resource_id, $marketplace_ids, $body, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceV1Api->getFixedSlotCapacity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_id** | **string**| Resource Identifier. |
 **marketplace_ids** | [**string[]**](../Model/ServiceV1/string.md)| An identifier for the marketplace in which the resource operates. |
 **body** | [**\SellingPartnerApi\Model\ServiceV1\FixedSlotCapacityQuery**](../Model/ServiceV1/FixedSlotCapacityQuery.md)| Request body. |
 **next_page_token** | **string**| Next page token returned in the response of your previous request. | [optional]

### Return type

[**\SellingPartnerApi\Model\ServiceV1\FixedSlotCapacity**](../Model/ServiceV1/FixedSlotCapacity.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ServiceV1 Model list]](../Model/ServiceV1)
[[README]](../../README.md)

## `getRangeSlotCapacity()`

```php
getRangeSlotCapacity($resource_id, $marketplace_ids, $body, $next_page_token): \SellingPartnerApi\Model\ServiceV1\RangeSlotCapacity
```



Provides capacity slots in a format similar to availability records.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 5 | 20 |

The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// See README for more information on the Configuration object's options
$config = new SellingPartnerApi\Configuration([
    "lwaClientId" => "<LWA client ID>",
    "lwaClientSecret" => "<LWA client secret>",
    "lwaRefreshToken" => "<LWA refresh token>",
    "awsAccessKeyId" => "<AWS access key ID>",
    "awsSecretAccessKey" => "<AWS secret access key>",
    "endpoint" => SellingPartnerApi\Endpoint::NA  // or another endpoint from lib/Endpoints.php
]);

$apiInstance = new SellingPartnerApi\Api\ServiceV1Api($config);
$resource_id = 'resource_id_example'; // string | Resource Identifier.
$marketplace_ids = array('marketplace_ids_example'); // string[] | An identifier for the marketplace in which the resource operates.
$body = new \SellingPartnerApi\Model\ServiceV1\RangeSlotCapacityQuery(); // \SellingPartnerApi\Model\ServiceV1\RangeSlotCapacityQuery | Request body.
$next_page_token = 'next_page_token_example'; // string | Next page token returned in the response of your previous request.

try {
    $result = $apiInstance->getRangeSlotCapacity($resource_id, $marketplace_ids, $body, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceV1Api->getRangeSlotCapacity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_id** | **string**| Resource Identifier. |
 **marketplace_ids** | [**string[]**](../Model/ServiceV1/string.md)| An identifier for the marketplace in which the resource operates. |
 **body** | [**\SellingPartnerApi\Model\ServiceV1\RangeSlotCapacityQuery**](../Model/ServiceV1/RangeSlotCapacityQuery.md)| Request body. |
 **next_page_token** | **string**| Next page token returned in the response of your previous request. | [optional]

### Return type

[**\SellingPartnerApi\Model\ServiceV1\RangeSlotCapacity**](../Model/ServiceV1/RangeSlotCapacity.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ServiceV1 Model list]](../Model/ServiceV1)
[[README]](../../README.md)

## `getServiceJobByServiceJobId()`

```php
getServiceJobByServiceJobId($service_job_id): \SellingPartnerApi\Model\ServiceV1\GetServiceJobByServiceJobIdResponse
```



Gets details of service job indicated by the provided `serviceJobID`.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 20 | 40 |

The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// See README for more information on the Configuration object's options
$config = new SellingPartnerApi\Configuration([
    "lwaClientId" => "<LWA client ID>",
    "lwaClientSecret" => "<LWA client secret>",
    "lwaRefreshToken" => "<LWA refresh token>",
    "awsAccessKeyId" => "<AWS access key ID>",
    "awsSecretAccessKey" => "<AWS secret access key>",
    "endpoint" => SellingPartnerApi\Endpoint::NA  // or another endpoint from lib/Endpoints.php
]);

$apiInstance = new SellingPartnerApi\Api\ServiceV1Api($config);
$service_job_id = 'service_job_id_example'; // string | A service job identifier.

try {
    $result = $apiInstance->getServiceJobByServiceJobId($service_job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceV1Api->getServiceJobByServiceJobId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_job_id** | **string**| A service job identifier. |

### Return type

[**\SellingPartnerApi\Model\ServiceV1\GetServiceJobByServiceJobIdResponse**](../Model/ServiceV1/GetServiceJobByServiceJobIdResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ServiceV1 Model list]](../Model/ServiceV1)
[[README]](../../README.md)

## `getServiceJobs()`

```php
getServiceJobs($marketplace_ids, $service_order_ids, $service_job_status, $page_token, $page_size, $sort_field, $sort_order, $created_after, $created_before, $last_updated_after, $last_updated_before, $schedule_start_date, $schedule_end_date, $asins, $required_skills, $store_ids): \SellingPartnerApi\Model\ServiceV1\GetServiceJobsResponse
```



Gets service job details for the specified filter query.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 10 | 40 |

The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// See README for more information on the Configuration object's options
$config = new SellingPartnerApi\Configuration([
    "lwaClientId" => "<LWA client ID>",
    "lwaClientSecret" => "<LWA client secret>",
    "lwaRefreshToken" => "<LWA refresh token>",
    "awsAccessKeyId" => "<AWS access key ID>",
    "awsSecretAccessKey" => "<AWS secret access key>",
    "endpoint" => SellingPartnerApi\Endpoint::NA  // or another endpoint from lib/Endpoints.php
]);

$apiInstance = new SellingPartnerApi\Api\ServiceV1Api($config);
$marketplace_ids = array('marketplace_ids_example'); // string[] | Used to select jobs that were placed in the specified marketplaces.
$service_order_ids = array('service_order_ids_example'); // string[] | List of service order ids for the query you want to perform.Max values supported 20.
$service_job_status = array('service_job_status_example'); // string[] | A list of one or more job status by which to filter the list of jobs.
$page_token = 'page_token_example'; // string | String returned in the response of your previous request.
$page_size = 20; // int | A non-negative integer that indicates the maximum number of jobs to return in the list, Value must be 1 - 20. Default 20.
$sort_field = 'sort_field_example'; // string | Sort fields on which you want to sort the output.
$sort_order = 'sort_order_example'; // string | Sort order for the query you want to perform.
$created_after = 'created_after_example'; // string | A date used for selecting jobs created at or after a specified time. Must be in ISO 8601 format. Required if `LastUpdatedAfter` is not specified. Specifying both `CreatedAfter` and `LastUpdatedAfter` returns an error.
$created_before = 'created_before_example'; // string | A date used for selecting jobs created at or before a specified time. Must be in ISO 8601 format.
$last_updated_after = 'last_updated_after_example'; // string | A date used for selecting jobs updated at or after a specified time. Must be in ISO 8601 format. Required if `createdAfter` is not specified. Specifying both `CreatedAfter` and `LastUpdatedAfter` returns an error.
$last_updated_before = 'last_updated_before_example'; // string | A date used for selecting jobs updated at or before a specified time. Must be in ISO 8601 format.
$schedule_start_date = 'schedule_start_date_example'; // string | A date used for filtering jobs schedules at or after a specified time. Must be in ISO 8601 format. Schedule end date should not be earlier than schedule start date.
$schedule_end_date = 'schedule_end_date_example'; // string | A date used for filtering jobs schedules at or before a specified time. Must be in ISO 8601 format. Schedule end date should not be earlier than schedule start date.
$asins = array('asins_example'); // string[] | List of Amazon Standard Identification Numbers (ASIN) of the items. Max values supported is 20.
$required_skills = array('required_skills_example'); // string[] | A defined set of related knowledge, skills, experience, tools, materials, and work processes common to service delivery for a set of products and/or service scenarios. Max values supported is 20.
$store_ids = array('store_ids_example'); // string[] | List of Amazon-defined identifiers for the region scope. Max values supported is 50.

try {
    $result = $apiInstance->getServiceJobs($marketplace_ids, $service_order_ids, $service_job_status, $page_token, $page_size, $sort_field, $sort_order, $created_after, $created_before, $last_updated_after, $last_updated_before, $schedule_start_date, $schedule_end_date, $asins, $required_skills, $store_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceV1Api->getServiceJobs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_ids** | [**string[]**](../Model/ServiceV1/string.md)| Used to select jobs that were placed in the specified marketplaces. |
 **service_order_ids** | [**string[]**](../Model/ServiceV1/string.md)| List of service order ids for the query you want to perform.Max values supported 20. | [optional]
 **service_job_status** | [**string[]**](../Model/ServiceV1/string.md)| A list of one or more job status by which to filter the list of jobs. | [optional]
 **page_token** | **string**| String returned in the response of your previous request. | [optional]
 **page_size** | **int**| A non-negative integer that indicates the maximum number of jobs to return in the list, Value must be 1 - 20. Default 20. | [optional] [default to 20]
 **sort_field** | **string**| Sort fields on which you want to sort the output. | [optional]
 **sort_order** | **string**| Sort order for the query you want to perform. | [optional]
 **created_after** | **string**| A date used for selecting jobs created at or after a specified time. Must be in ISO 8601 format. Required if `LastUpdatedAfter` is not specified. Specifying both `CreatedAfter` and `LastUpdatedAfter` returns an error. | [optional]
 **created_before** | **string**| A date used for selecting jobs created at or before a specified time. Must be in ISO 8601 format. | [optional]
 **last_updated_after** | **string**| A date used for selecting jobs updated at or after a specified time. Must be in ISO 8601 format. Required if `createdAfter` is not specified. Specifying both `CreatedAfter` and `LastUpdatedAfter` returns an error. | [optional]
 **last_updated_before** | **string**| A date used for selecting jobs updated at or before a specified time. Must be in ISO 8601 format. | [optional]
 **schedule_start_date** | **string**| A date used for filtering jobs schedules at or after a specified time. Must be in ISO 8601 format. Schedule end date should not be earlier than schedule start date. | [optional]
 **schedule_end_date** | **string**| A date used for filtering jobs schedules at or before a specified time. Must be in ISO 8601 format. Schedule end date should not be earlier than schedule start date. | [optional]
 **asins** | [**string[]**](../Model/ServiceV1/string.md)| List of Amazon Standard Identification Numbers (ASIN) of the items. Max values supported is 20. | [optional]
 **required_skills** | [**string[]**](../Model/ServiceV1/string.md)| A defined set of related knowledge, skills, experience, tools, materials, and work processes common to service delivery for a set of products and/or service scenarios. Max values supported is 20. | [optional]
 **store_ids** | [**string[]**](../Model/ServiceV1/string.md)| List of Amazon-defined identifiers for the region scope. Max values supported is 50. | [optional]

### Return type

[**\SellingPartnerApi\Model\ServiceV1\GetServiceJobsResponse**](../Model/ServiceV1/GetServiceJobsResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ServiceV1 Model list]](../Model/ServiceV1)
[[README]](../../README.md)

## `rescheduleAppointmentForServiceJobByServiceJobId()`

```php
rescheduleAppointmentForServiceJobByServiceJobId($service_job_id, $appointment_id, $body): \SellingPartnerApi\Model\ServiceV1\SetAppointmentResponse
```



Reschedules an appointment for the service job indicated by the service job identifier specified.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 5 | 20 |

The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// See README for more information on the Configuration object's options
$config = new SellingPartnerApi\Configuration([
    "lwaClientId" => "<LWA client ID>",
    "lwaClientSecret" => "<LWA client secret>",
    "lwaRefreshToken" => "<LWA refresh token>",
    "awsAccessKeyId" => "<AWS access key ID>",
    "awsSecretAccessKey" => "<AWS secret access key>",
    "endpoint" => SellingPartnerApi\Endpoint::NA  // or another endpoint from lib/Endpoints.php
]);

$apiInstance = new SellingPartnerApi\Api\ServiceV1Api($config);
$service_job_id = 'service_job_id_example'; // string | An Amazon defined service job identifier.
$appointment_id = 'appointment_id_example'; // string | An existing appointment identifier for the Service Job.
$body = new \SellingPartnerApi\Model\ServiceV1\RescheduleAppointmentRequest(); // \SellingPartnerApi\Model\ServiceV1\RescheduleAppointmentRequest | Reschedule appointment operation input details.

try {
    $result = $apiInstance->rescheduleAppointmentForServiceJobByServiceJobId($service_job_id, $appointment_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceV1Api->rescheduleAppointmentForServiceJobByServiceJobId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_job_id** | **string**| An Amazon defined service job identifier. |
 **appointment_id** | **string**| An existing appointment identifier for the Service Job. |
 **body** | [**\SellingPartnerApi\Model\ServiceV1\RescheduleAppointmentRequest**](../Model/ServiceV1/RescheduleAppointmentRequest.md)| Reschedule appointment operation input details. |

### Return type

[**\SellingPartnerApi\Model\ServiceV1\SetAppointmentResponse**](../Model/ServiceV1/SetAppointmentResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ServiceV1 Model list]](../Model/ServiceV1)
[[README]](../../README.md)

## `setAppointmentFulfillmentData()`

```php
setAppointmentFulfillmentData($service_job_id, $appointment_id, $body): string
```



Updates the appointment fulfillment data related to a given `jobID` and `appointmentID`.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 5 | 20 |

The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// See README for more information on the Configuration object's options
$config = new SellingPartnerApi\Configuration([
    "lwaClientId" => "<LWA client ID>",
    "lwaClientSecret" => "<LWA client secret>",
    "lwaRefreshToken" => "<LWA refresh token>",
    "awsAccessKeyId" => "<AWS access key ID>",
    "awsSecretAccessKey" => "<AWS secret access key>",
    "endpoint" => SellingPartnerApi\Endpoint::NA  // or another endpoint from lib/Endpoints.php
]);

$apiInstance = new SellingPartnerApi\Api\ServiceV1Api($config);
$service_job_id = 'service_job_id_example'; // string | An Amazon-defined service job identifier. Get this value by calling the `getServiceJobs` operation of the Services API.
$appointment_id = 'appointment_id_example'; // string | An Amazon-defined identifier of active service job appointment.
$body = new \SellingPartnerApi\Model\ServiceV1\SetAppointmentFulfillmentDataRequest(); // \SellingPartnerApi\Model\ServiceV1\SetAppointmentFulfillmentDataRequest | Appointment fulfillment data collection details.

try {
    $result = $apiInstance->setAppointmentFulfillmentData($service_job_id, $appointment_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceV1Api->setAppointmentFulfillmentData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_job_id** | **string**| An Amazon-defined service job identifier. Get this value by calling the `getServiceJobs` operation of the Services API. |
 **appointment_id** | **string**| An Amazon-defined identifier of active service job appointment. |
 **body** | [**\SellingPartnerApi\Model\ServiceV1\SetAppointmentFulfillmentDataRequest**](../Model/ServiceV1/SetAppointmentFulfillmentDataRequest.md)| Appointment fulfillment data collection details. |

### Return type

**string**

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ServiceV1 Model list]](../Model/ServiceV1)
[[README]](../../README.md)

## `updateReservation()`

```php
updateReservation($reservation_id, $marketplace_ids, $body): \SellingPartnerApi\Model\ServiceV1\UpdateReservationResponse
```



Update a reservation.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 5 | 20 |

The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// See README for more information on the Configuration object's options
$config = new SellingPartnerApi\Configuration([
    "lwaClientId" => "<LWA client ID>",
    "lwaClientSecret" => "<LWA client secret>",
    "lwaRefreshToken" => "<LWA refresh token>",
    "awsAccessKeyId" => "<AWS access key ID>",
    "awsSecretAccessKey" => "<AWS secret access key>",
    "endpoint" => SellingPartnerApi\Endpoint::NA  // or another endpoint from lib/Endpoints.php
]);

$apiInstance = new SellingPartnerApi\Api\ServiceV1Api($config);
$reservation_id = 'reservation_id_example'; // string | Reservation Identifier
$marketplace_ids = array('marketplace_ids_example'); // string[] | An identifier for the marketplace in which the resource operates.
$body = new \SellingPartnerApi\Model\ServiceV1\UpdateReservationRequest(); // \SellingPartnerApi\Model\ServiceV1\UpdateReservationRequest | Reservation details

try {
    $result = $apiInstance->updateReservation($reservation_id, $marketplace_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceV1Api->updateReservation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reservation_id** | **string**| Reservation Identifier |
 **marketplace_ids** | [**string[]**](../Model/ServiceV1/string.md)| An identifier for the marketplace in which the resource operates. |
 **body** | [**\SellingPartnerApi\Model\ServiceV1\UpdateReservationRequest**](../Model/ServiceV1/UpdateReservationRequest.md)| Reservation details |

### Return type

[**\SellingPartnerApi\Model\ServiceV1\UpdateReservationResponse**](../Model/ServiceV1/UpdateReservationResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ServiceV1 Model list]](../Model/ServiceV1)
[[README]](../../README.md)

## `updateSchedule()`

```php
updateSchedule($resource_id, $marketplace_ids, $body): \SellingPartnerApi\Model\ServiceV1\UpdateScheduleResponse
```



Update the schedule of the given resource.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 5 | 20 |

The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// See README for more information on the Configuration object's options
$config = new SellingPartnerApi\Configuration([
    "lwaClientId" => "<LWA client ID>",
    "lwaClientSecret" => "<LWA client secret>",
    "lwaRefreshToken" => "<LWA refresh token>",
    "awsAccessKeyId" => "<AWS access key ID>",
    "awsSecretAccessKey" => "<AWS secret access key>",
    "endpoint" => SellingPartnerApi\Endpoint::NA  // or another endpoint from lib/Endpoints.php
]);

$apiInstance = new SellingPartnerApi\Api\ServiceV1Api($config);
$resource_id = 'resource_id_example'; // string | Resource (store) Identifier
$marketplace_ids = array('marketplace_ids_example'); // string[] | An identifier for the marketplace in which the resource operates.
$body = new \SellingPartnerApi\Model\ServiceV1\UpdateScheduleRequest(); // \SellingPartnerApi\Model\ServiceV1\UpdateScheduleRequest | Schedule details

try {
    $result = $apiInstance->updateSchedule($resource_id, $marketplace_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceV1Api->updateSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_id** | **string**| Resource (store) Identifier |
 **marketplace_ids** | [**string[]**](../Model/ServiceV1/string.md)| An identifier for the marketplace in which the resource operates. |
 **body** | [**\SellingPartnerApi\Model\ServiceV1\UpdateScheduleRequest**](../Model/ServiceV1/UpdateScheduleRequest.md)| Schedule details |

### Return type

[**\SellingPartnerApi\Model\ServiceV1\UpdateScheduleResponse**](../Model/ServiceV1/UpdateScheduleResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ServiceV1 Model list]](../Model/ServiceV1)
[[README]](../../README.md)
