# SellingPartnerApi\FinancesApi

Method | HTTP request | Description
------------- | ------------- | -------------
[**listFinancialEventGroups()**](FinancesApi.md#listFinancialEventGroups) | **GET** /finances/v0/financialEventGroups | 
[**listFinancialEvents()**](FinancesApi.md#listFinancialEvents) | **GET** /finances/v0/financialEvents | 
[**listFinancialEventsByGroupId()**](FinancesApi.md#listFinancialEventsByGroupId) | **GET** /finances/v0/financialEventGroups/{eventGroupId}/financialEvents | 
[**listFinancialEventsByOrderId()**](FinancesApi.md#listFinancialEventsByOrderId) | **GET** /finances/v0/orders/{orderId}/financialEvents | 


## `listFinancialEventGroups()`

```php
listFinancialEventGroups($max_results_per_page, $financial_event_group_started_before, $financial_event_group_started_after, $next_token): \SellingPartnerApi\Model\Finances\ListFinancialEventGroupsResponse
```



Returns financial event groups for a given date range.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 0.5 | 30 |

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

$apiInstance = new SellingPartnerApi\Api\FinancesApi($config);
$max_results_per_page = 100; // int | The maximum number of results to return per page.
$financial_event_group_started_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | A date used for selecting financial event groups that opened before (but not at) a specified date and time, in ISO 8601 format. The date-time  must be later than FinancialEventGroupStartedAfter and no later than two minutes before the request was submitted. If FinancialEventGroupStartedAfter and FinancialEventGroupStartedBefore are more than 180 days apart, no financial event groups are returned.
$financial_event_group_started_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | A date used for selecting financial event groups that opened after (or at) a specified date and time, in ISO 8601 format. The date-time must be no later than two minutes before the request was submitted.
$next_token = 'next_token_example'; // string | A string token returned in the response of your previous request.

try {
    $result = $apiInstance->listFinancialEventGroups($max_results_per_page, $financial_event_group_started_before, $financial_event_group_started_after, $next_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinancesApi->listFinancialEventGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **max_results_per_page** | **int**| The maximum number of results to return per page. | [optional] [default to 100]
 **financial_event_group_started_before** | **\DateTime**| A date used for selecting financial event groups that opened before (but not at) a specified date and time, in ISO 8601 format. The date-time  must be later than FinancialEventGroupStartedAfter and no later than two minutes before the request was submitted. If FinancialEventGroupStartedAfter and FinancialEventGroupStartedBefore are more than 180 days apart, no financial event groups are returned. | [optional]
 **financial_event_group_started_after** | **\DateTime**| A date used for selecting financial event groups that opened after (or at) a specified date and time, in ISO 8601 format. The date-time must be no later than two minutes before the request was submitted. | [optional]
 **next_token** | **string**| A string token returned in the response of your previous request. | [optional]

### Return type

[**\SellingPartnerApi\Model\Finances\ListFinancialEventGroupsResponse**](../Model/Finances/ListFinancialEventGroupsResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[Finances Model list]](../Model/Finances)
[[README]](../../README.md)

## `listFinancialEvents()`

```php
listFinancialEvents($max_results_per_page, $posted_after, $posted_before, $next_token): \SellingPartnerApi\Model\Finances\ListFinancialEventsResponse
```



Returns financial events for the specified data range.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 0.5 | 30 |

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

$apiInstance = new SellingPartnerApi\Api\FinancesApi($config);
$max_results_per_page = 100; // int | The maximum number of results to return per page.
$posted_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | A date used for selecting financial events posted after (or at) a specified time. The date-time must be no later than two minutes before the request was submitted, in ISO 8601 date time format.
$posted_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | A date used for selecting financial events posted before (but not at) a specified time. The date-time must be later than PostedAfter and no later than two minutes before the request was submitted, in ISO 8601 date time format. If PostedAfter and PostedBefore are more than 180 days apart, no financial events are returned. You must specify the PostedAfter parameter if you specify the PostedBefore parameter. Default: Now minus two minutes.
$next_token = 'next_token_example'; // string | A string token returned in the response of your previous request.

try {
    $result = $apiInstance->listFinancialEvents($max_results_per_page, $posted_after, $posted_before, $next_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinancesApi->listFinancialEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **max_results_per_page** | **int**| The maximum number of results to return per page. | [optional] [default to 100]
 **posted_after** | **\DateTime**| A date used for selecting financial events posted after (or at) a specified time. The date-time must be no later than two minutes before the request was submitted, in ISO 8601 date time format. | [optional]
 **posted_before** | **\DateTime**| A date used for selecting financial events posted before (but not at) a specified time. The date-time must be later than PostedAfter and no later than two minutes before the request was submitted, in ISO 8601 date time format. If PostedAfter and PostedBefore are more than 180 days apart, no financial events are returned. You must specify the PostedAfter parameter if you specify the PostedBefore parameter. Default: Now minus two minutes. | [optional]
 **next_token** | **string**| A string token returned in the response of your previous request. | [optional]

### Return type

[**\SellingPartnerApi\Model\Finances\ListFinancialEventsResponse**](../Model/Finances/ListFinancialEventsResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[Finances Model list]](../Model/Finances)
[[README]](../../README.md)

## `listFinancialEventsByGroupId()`

```php
listFinancialEventsByGroupId($event_group_id, $max_results_per_page, $next_token): \SellingPartnerApi\Model\Finances\ListFinancialEventsResponse
```



Returns all financial events for the specified financial event group.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 0.5 | 30 |

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

$apiInstance = new SellingPartnerApi\Api\FinancesApi($config);
$event_group_id = 'event_group_id_example'; // string | The identifier of the financial event group to which the events belong.
$max_results_per_page = 100; // int | The maximum number of results to return per page.
$next_token = 'next_token_example'; // string | A string token returned in the response of your previous request.

try {
    $result = $apiInstance->listFinancialEventsByGroupId($event_group_id, $max_results_per_page, $next_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinancesApi->listFinancialEventsByGroupId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_group_id** | **string**| The identifier of the financial event group to which the events belong. |
 **max_results_per_page** | **int**| The maximum number of results to return per page. | [optional] [default to 100]
 **next_token** | **string**| A string token returned in the response of your previous request. | [optional]

### Return type

[**\SellingPartnerApi\Model\Finances\ListFinancialEventsResponse**](../Model/Finances/ListFinancialEventsResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[Finances Model list]](../Model/Finances)
[[README]](../../README.md)

## `listFinancialEventsByOrderId()`

```php
listFinancialEventsByOrderId($order_id, $max_results_per_page, $next_token): \SellingPartnerApi\Model\Finances\ListFinancialEventsResponse
```



Returns all financial events for the specified order.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 0.5 | 30 |

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

$apiInstance = new SellingPartnerApi\Api\FinancesApi($config);
$order_id = 'order_id_example'; // string | An Amazon-defined order identifier, in 3-7-7 format.
$max_results_per_page = 100; // int | The maximum number of results to return per page.
$next_token = 'next_token_example'; // string | A string token returned in the response of your previous request.

try {
    $result = $apiInstance->listFinancialEventsByOrderId($order_id, $max_results_per_page, $next_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinancesApi->listFinancialEventsByOrderId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| An Amazon-defined order identifier, in 3-7-7 format. |
 **max_results_per_page** | **int**| The maximum number of results to return per page. | [optional] [default to 100]
 **next_token** | **string**| A string token returned in the response of your previous request. | [optional]

### Return type

[**\SellingPartnerApi\Model\Finances\ListFinancialEventsResponse**](../Model/Finances/ListFinancialEventsResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[Finances Model list]](../Model/Finances)
[[README]](../../README.md)
