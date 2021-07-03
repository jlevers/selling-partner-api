# SellingPartnerApi\ServiceApi

Method | HTTP request | Description
------------- | ------------- | -------------
[**addAppointmentForServiceJobByServiceJobId()**](ServiceApi.md#addAppointmentForServiceJobByServiceJobId) | **POST** /service/v1/serviceJobs/{serviceJobId}/appointments | 
[**cancelServiceJobByServiceJobId()**](ServiceApi.md#cancelServiceJobByServiceJobId) | **PUT** /service/v1/serviceJobs/{serviceJobId}/cancellations | 
[**completeServiceJobByServiceJobId()**](ServiceApi.md#completeServiceJobByServiceJobId) | **PUT** /service/v1/serviceJobs/{serviceJobId}/completions | 
[**getServiceJobByServiceJobId()**](ServiceApi.md#getServiceJobByServiceJobId) | **GET** /service/v1/serviceJobs/{serviceJobId} | 
[**getServiceJobs()**](ServiceApi.md#getServiceJobs) | **GET** /service/v1/serviceJobs | 
[**rescheduleAppointmentForServiceJobByServiceJobId()**](ServiceApi.md#rescheduleAppointmentForServiceJobByServiceJobId) | **POST** /service/v1/serviceJobs/{serviceJobId}/appointments/{appointmentId} | 


## `addAppointmentForServiceJobByServiceJobId()`

```php
addAppointmentForServiceJobByServiceJobId($service_job_id, $body): \SellingPartnerApi\Model\Service\SetAppointmentResponse
```



Adds an appointment to the service job indicated by the service job identifier you specify.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 5 | 20 |

For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

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

$apiInstance = new SellingPartnerApi\Api\ServiceApi($config);
$service_job_id = 'service_job_id_example'; // string | An Amazon defined service job identifier.
$body = new \SellingPartnerApi\Model\Service\AddAppointmentRequest(); // \SellingPartnerApi\Model\Service\AddAppointmentRequest | Add appointment operation input details.

try {
    $result = $apiInstance->addAppointmentForServiceJobByServiceJobId($service_job_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->addAppointmentForServiceJobByServiceJobId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_job_id** | **string**| An Amazon defined service job identifier. |
 **body** | [**\SellingPartnerApi\Model\Service\AddAppointmentRequest**](../Model/Service/AddAppointmentRequest.md)| Add appointment operation input details. |

### Return type

[**\SellingPartnerApi\Model\Service\SetAppointmentResponse**](../Model/Service/SetAppointmentResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[Service Model list]](../Model/Service)
[[README]](../../README.md)

## `cancelServiceJobByServiceJobId()`

```php
cancelServiceJobByServiceJobId($service_job_id, $cancellation_reason_code): \SellingPartnerApi\Model\Service\CancelServiceJobByServiceJobIdResponse
```



Cancels the service job indicated by the service job identifier you specify.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 5 | 20 |

For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

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

$apiInstance = new SellingPartnerApi\Api\ServiceApi($config);
$service_job_id = 'service_job_id_example'; // string | An Amazon defined service job identifier.
$cancellation_reason_code = 'cancellation_reason_code_example'; // string | A cancel reason code that specifies the reason for cancelling a service job.

try {
    $result = $apiInstance->cancelServiceJobByServiceJobId($service_job_id, $cancellation_reason_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->cancelServiceJobByServiceJobId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_job_id** | **string**| An Amazon defined service job identifier. |
 **cancellation_reason_code** | **string**| A cancel reason code that specifies the reason for cancelling a service job. |

### Return type

[**\SellingPartnerApi\Model\Service\CancelServiceJobByServiceJobIdResponse**](../Model/Service/CancelServiceJobByServiceJobIdResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[Service Model list]](../Model/Service)
[[README]](../../README.md)

## `completeServiceJobByServiceJobId()`

```php
completeServiceJobByServiceJobId($service_job_id): \SellingPartnerApi\Model\Service\CompleteServiceJobByServiceJobIdResponse
```



Completes the service job indicated by the service job identifier you specify.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 5 | 20 |

For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

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

$apiInstance = new SellingPartnerApi\Api\ServiceApi($config);
$service_job_id = 'service_job_id_example'; // string | An Amazon defined service job identifier.

try {
    $result = $apiInstance->completeServiceJobByServiceJobId($service_job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->completeServiceJobByServiceJobId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_job_id** | **string**| An Amazon defined service job identifier. |

### Return type

[**\SellingPartnerApi\Model\Service\CompleteServiceJobByServiceJobIdResponse**](../Model/Service/CompleteServiceJobByServiceJobIdResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[Service Model list]](../Model/Service)
[[README]](../../README.md)

## `getServiceJobByServiceJobId()`

```php
getServiceJobByServiceJobId($service_job_id): \SellingPartnerApi\Model\Service\GetServiceJobByServiceJobIdResponse
```



Gets service job details for the service job indicated by the service job identifier you specify.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 20 | 40 |

For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

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

$apiInstance = new SellingPartnerApi\Api\ServiceApi($config);
$service_job_id = 'service_job_id_example'; // string | A service job identifier.

try {
    $result = $apiInstance->getServiceJobByServiceJobId($service_job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->getServiceJobByServiceJobId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_job_id** | **string**| A service job identifier. |

### Return type

[**\SellingPartnerApi\Model\Service\GetServiceJobByServiceJobIdResponse**](../Model/Service/GetServiceJobByServiceJobIdResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[Service Model list]](../Model/Service)
[[README]](../../README.md)

## `getServiceJobs()`

```php
getServiceJobs($marketplace_ids, $service_order_ids, $service_job_status, $page_token, $page_size, $sort_field, $sort_order, $created_after, $created_before, $last_updated_after, $last_updated_before, $schedule_start_date, $schedule_end_date): \SellingPartnerApi\Model\Service\GetServiceJobsResponse
```



Gets service job details for the specified filter query.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 10 | 40 |

For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

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

$apiInstance = new SellingPartnerApi\Api\ServiceApi($config);
$marketplace_ids = array('marketplace_ids_example'); // string[] | Used to select jobs that were placed in the specified marketplaces.
$service_order_ids = array('service_order_ids_example'); // string[] | List of service order ids for the query you want to perform.Max values supported 20.
$service_job_status = array('service_job_status_example'); // string[] | A list of one or more job status by which to filter the list of jobs.
$page_token = 'page_token_example'; // string | String returned in the response of your previous request.
$page_size = 20; // int | A non-negative integer that indicates the maximum number of jobs to return in the list, Value must be 1 - 20. Default 20.
$sort_field = 'sort_field_example'; // string | Sort fields on which you want to sort the output.
$sort_order = 'sort_order_example'; // string | Sort order for the query you want to perform.
$created_after = 'created_after_example'; // string | A date used for selecting jobs created after (or at) a specified time must be in ISO 8601 format. Required if LastUpdatedAfter is not specified.Specifying both CreatedAfter and LastUpdatedAfter returns an error.
$created_before = 'created_before_example'; // string | A date used for selecting jobs created before (or at) a specified time must be in ISO 8601 format.
$last_updated_after = 'last_updated_after_example'; // string | A date used for selecting jobs updated after (or at) a specified time must be in ISO 8601 format. Required if createdAfter is not specified.Specifying both CreatedAfter and LastUpdatedAfter returns an error.
$last_updated_before = 'last_updated_before_example'; // string | A date used for selecting jobs updated before (or at) a specified time must be in ISO 8601 format.
$schedule_start_date = 'schedule_start_date_example'; // string | A date used for filtering jobs schedule after (or at) a specified time must be in ISO 8601 format. schedule end date should not be earlier than schedule start date.
$schedule_end_date = 'schedule_end_date_example'; // string | A date used for filtering jobs schedule before (or at) a specified time must be in ISO 8601 format. schedule end date should not be earlier than schedule start date.

try {
    $result = $apiInstance->getServiceJobs($marketplace_ids, $service_order_ids, $service_job_status, $page_token, $page_size, $sort_field, $sort_order, $created_after, $created_before, $last_updated_after, $last_updated_before, $schedule_start_date, $schedule_end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->getServiceJobs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_ids** | [**string[]**](../Model/Service/string.md)| Used to select jobs that were placed in the specified marketplaces. |
 **service_order_ids** | [**string[]**](../Model/Service/string.md)| List of service order ids for the query you want to perform.Max values supported 20. | [optional]
 **service_job_status** | [**string[]**](../Model/Service/string.md)| A list of one or more job status by which to filter the list of jobs. | [optional]
 **page_token** | **string**| String returned in the response of your previous request. | [optional]
 **page_size** | **int**| A non-negative integer that indicates the maximum number of jobs to return in the list, Value must be 1 - 20. Default 20. | [optional] [default to 20]
 **sort_field** | **string**| Sort fields on which you want to sort the output. | [optional]
 **sort_order** | **string**| Sort order for the query you want to perform. | [optional]
 **created_after** | **string**| A date used for selecting jobs created after (or at) a specified time must be in ISO 8601 format. Required if LastUpdatedAfter is not specified.Specifying both CreatedAfter and LastUpdatedAfter returns an error. | [optional]
 **created_before** | **string**| A date used for selecting jobs created before (or at) a specified time must be in ISO 8601 format. | [optional]
 **last_updated_after** | **string**| A date used for selecting jobs updated after (or at) a specified time must be in ISO 8601 format. Required if createdAfter is not specified.Specifying both CreatedAfter and LastUpdatedAfter returns an error. | [optional]
 **last_updated_before** | **string**| A date used for selecting jobs updated before (or at) a specified time must be in ISO 8601 format. | [optional]
 **schedule_start_date** | **string**| A date used for filtering jobs schedule after (or at) a specified time must be in ISO 8601 format. schedule end date should not be earlier than schedule start date. | [optional]
 **schedule_end_date** | **string**| A date used for filtering jobs schedule before (or at) a specified time must be in ISO 8601 format. schedule end date should not be earlier than schedule start date. | [optional]

### Return type

[**\SellingPartnerApi\Model\Service\GetServiceJobsResponse**](../Model/Service/GetServiceJobsResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[Service Model list]](../Model/Service)
[[README]](../../README.md)

## `rescheduleAppointmentForServiceJobByServiceJobId()`

```php
rescheduleAppointmentForServiceJobByServiceJobId($service_job_id, $appointment_id, $body): \SellingPartnerApi\Model\Service\SetAppointmentResponse
```



Reschedules an appointment for the service job indicated by the service job identifier you specify.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 5 | 20 |

For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

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

$apiInstance = new SellingPartnerApi\Api\ServiceApi($config);
$service_job_id = 'service_job_id_example'; // string | An Amazon defined service job identifier.
$appointment_id = 'appointment_id_example'; // string | An existing appointment identifier for the Service Job.
$body = new \SellingPartnerApi\Model\Service\RescheduleAppointmentRequest(); // \SellingPartnerApi\Model\Service\RescheduleAppointmentRequest | Reschedule appointment operation input details.

try {
    $result = $apiInstance->rescheduleAppointmentForServiceJobByServiceJobId($service_job_id, $appointment_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->rescheduleAppointmentForServiceJobByServiceJobId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_job_id** | **string**| An Amazon defined service job identifier. |
 **appointment_id** | **string**| An existing appointment identifier for the Service Job. |
 **body** | [**\SellingPartnerApi\Model\Service\RescheduleAppointmentRequest**](../Model/Service/RescheduleAppointmentRequest.md)| Reschedule appointment operation input details. |

### Return type

[**\SellingPartnerApi\Model\Service\SetAppointmentResponse**](../Model/Service/SetAppointmentResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[Service Model list]](../Model/Service)
[[README]](../../README.md)
