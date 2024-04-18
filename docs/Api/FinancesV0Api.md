# SellingPartnerApi\FinancesV0Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**listFinancialEventGroups()**](FinancesV0Api.md#listFinancialEventGroups) | **GET** /finances/v0/financialEventGroups | 
[**listFinancialEvents()**](FinancesV0Api.md#listFinancialEvents) | **GET** /finances/v0/financialEvents | 
[**listFinancialEventsByGroupId()**](FinancesV0Api.md#listFinancialEventsByGroupId) | **GET** /finances/v0/financialEventGroups/{eventGroupId}/financialEvents | 
[**listFinancialEventsByOrderId()**](FinancesV0Api.md#listFinancialEventsByOrderId) | **GET** /finances/v0/orders/{orderId}/financialEvents | 


## `listFinancialEventGroups()`

```php
listFinancialEventGroups($max_results_per_page, $financial_event_group_started_before, $financial_event_group_started_after, $next_token): \SellingPartnerApi\Model\FinancesV0\ListFinancialEventGroupsResponse
```



Returns financial event groups for a given date range. It may take up to 48 hours for orders to appear in your financial events.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 0.5 | 30 |

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

$apiInstance = new SellingPartnerApi\Api\FinancesV0Api($config);
$max_results_per_page = 100; // int | The maximum number of results to return per page. If the response exceeds the maximum number of transactions or 10 MB, the API responds with 'InvalidInput'.
$financial_event_group_started_before = 'financial_event_group_started_before_example'; // string | A date used for selecting financial event groups that opened before (but not at) a specified date and time, in ISO 8601 format. The date-time  must be later than FinancialEventGroupStartedAfter and no later than two minutes before the request was submitted. If FinancialEventGroupStartedAfter and FinancialEventGroupStartedBefore are more than 180 days apart, no financial event groups are returned.
$financial_event_group_started_after = 'financial_event_group_started_after_example'; // string | A date used for selecting financial event groups that opened after (or at) a specified date and time, in ISO 8601 format. The date-time must be no later than two minutes before the request was submitted.
$next_token = 'next_token_example'; // string | A string token returned in the response of your previous request.

try {
    $result = $apiInstance->listFinancialEventGroups($max_results_per_page, $financial_event_group_started_before, $financial_event_group_started_after, $next_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinancesV0Api->listFinancialEventGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **max_results_per_page** | **int**| The maximum number of results to return per page. If the response exceeds the maximum number of transactions or 10 MB, the API responds with 'InvalidInput'. | [optional] [default to 100]
 **financial_event_group_started_before** | **string**| A date used for selecting financial event groups that opened before (but not at) a specified date and time, in ISO 8601 format. The date-time  must be later than FinancialEventGroupStartedAfter and no later than two minutes before the request was submitted. If FinancialEventGroupStartedAfter and FinancialEventGroupStartedBefore are more than 180 days apart, no financial event groups are returned. | [optional]
 **financial_event_group_started_after** | **string**| A date used for selecting financial event groups that opened after (or at) a specified date and time, in ISO 8601 format. The date-time must be no later than two minutes before the request was submitted. | [optional]
 **next_token** | **string**| A string token returned in the response of your previous request. | [optional]

### Return type

[**\SellingPartnerApi\Model\FinancesV0\ListFinancialEventGroupsResponse**](../Model/FinancesV0/ListFinancialEventGroupsResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[FinancesV0 Model list]](../Model/FinancesV0)
[[README]](../../README.md)

## `listFinancialEvents()`

```php
listFinancialEvents($max_results_per_page, $posted_after, $posted_before, $next_token): \SellingPartnerApi\Model\FinancesV0\ListFinancialEventsResponse
```



Returns financial events for the specified data range. It may take up to 48 hours for orders to appear in your financial events.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 0.5 | 30 |

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

$apiInstance = new SellingPartnerApi\Api\FinancesV0Api($config);
$max_results_per_page = 100; // int | The maximum number of results to return per page. If the response exceeds the maximum number of transactions or 10 MB, the API responds with 'InvalidInput'.
$posted_after = 'posted_after_example'; // string | A date used for selecting financial events posted after (or at) a specified time. The date-time must be no later than two minutes before the request was submitted, in ISO 8601 date time format.
$posted_before = 'posted_before_example'; // string | A date used for selecting financial events posted before (but not at) a specified time. The date-time must be later than PostedAfter and no later than two minutes before the request was submitted, in ISO 8601 date time format. If PostedAfter and PostedBefore are more than 180 days apart, no financial events are returned. You must specify the PostedAfter parameter if you specify the PostedBefore parameter. Default: Now minus two minutes.
$next_token = 'next_token_example'; // string | A string token returned in the response of your previous request.

try {
    $result = $apiInstance->listFinancialEvents($max_results_per_page, $posted_after, $posted_before, $next_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinancesV0Api->listFinancialEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **max_results_per_page** | **int**| The maximum number of results to return per page. If the response exceeds the maximum number of transactions or 10 MB, the API responds with 'InvalidInput'. | [optional] [default to 100]
 **posted_after** | **string**| A date used for selecting financial events posted after (or at) a specified time. The date-time must be no later than two minutes before the request was submitted, in ISO 8601 date time format. | [optional]
 **posted_before** | **string**| A date used for selecting financial events posted before (but not at) a specified time. The date-time must be later than PostedAfter and no later than two minutes before the request was submitted, in ISO 8601 date time format. If PostedAfter and PostedBefore are more than 180 days apart, no financial events are returned. You must specify the PostedAfter parameter if you specify the PostedBefore parameter. Default: Now minus two minutes. | [optional]
 **next_token** | **string**| A string token returned in the response of your previous request. | [optional]

### Return type

[**\SellingPartnerApi\Model\FinancesV0\ListFinancialEventsResponse**](../Model/FinancesV0/ListFinancialEventsResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[FinancesV0 Model list]](../Model/FinancesV0)
[[README]](../../README.md)

## `listFinancialEventsByGroupId()`

```php
listFinancialEventsByGroupId($event_group_id, $max_results_per_page, $next_token, $posted_after, $posted_before): \SellingPartnerApi\Model\FinancesV0\ListFinancialEventsResponse
```



Returns all financial events for the specified financial event group. It may take up to 48 hours for orders to appear in your financial events.

**Note:** This operation will only retrieve group's data for the past two years. If a request is submitted for data spanning more than two years, an empty response is returned.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 0.5 | 30 |

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

$apiInstance = new SellingPartnerApi\Api\FinancesV0Api($config);
$event_group_id = 'event_group_id_example'; // string | The identifier of the financial event group to which the events belong.
$max_results_per_page = 100; // int | The maximum number of results to return per page. If the response exceeds the maximum number of transactions or 10 MB, the API responds with 'InvalidInput'.
$next_token = 'next_token_example'; // string | A string token returned in the response of your previous request.
$posted_after = 'posted_after_example'; // string | A date used for selecting financial events posted after (or at) a specified time. The date-time **must** be more than two minutes before the time of the request, in ISO 8601 date time format.
$posted_before = 'posted_before_example'; // string | A date used for selecting financial events posted before (but not at) a specified time. The date-time must be later than `PostedAfter` and no later than two minutes before the request was submitted, in ISO 8601 date time format. If `PostedAfter` and `PostedBefore` are more than 180 days apart, no financial events are returned. You must specify the `PostedAfter` parameter if you specify the `PostedBefore` parameter. Default: Now minus two minutes.

try {
    $result = $apiInstance->listFinancialEventsByGroupId($event_group_id, $max_results_per_page, $next_token, $posted_after, $posted_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinancesV0Api->listFinancialEventsByGroupId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_group_id** | **string**| The identifier of the financial event group to which the events belong. |
 **max_results_per_page** | **int**| The maximum number of results to return per page. If the response exceeds the maximum number of transactions or 10 MB, the API responds with 'InvalidInput'. | [optional] [default to 100]
 **next_token** | **string**| A string token returned in the response of your previous request. | [optional]
 **posted_after** | **string**| A date used for selecting financial events posted after (or at) a specified time. The date-time **must** be more than two minutes before the time of the request, in ISO 8601 date time format. | [optional]
 **posted_before** | **string**| A date used for selecting financial events posted before (but not at) a specified time. The date-time must be later than `PostedAfter` and no later than two minutes before the request was submitted, in ISO 8601 date time format. If `PostedAfter` and `PostedBefore` are more than 180 days apart, no financial events are returned. You must specify the `PostedAfter` parameter if you specify the `PostedBefore` parameter. Default: Now minus two minutes. | [optional]

### Return type

[**\SellingPartnerApi\Model\FinancesV0\ListFinancialEventsResponse**](../Model/FinancesV0/ListFinancialEventsResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[FinancesV0 Model list]](../Model/FinancesV0)
[[README]](../../README.md)

## `listFinancialEventsByOrderId()`

```php
listFinancialEventsByOrderId($order_id, $max_results_per_page, $next_token): \SellingPartnerApi\Model\FinancesV0\ListFinancialEventsResponse
```



Returns all financial events for the specified order. It may take up to 48 hours for orders to appear in your financial events.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 0.5 | 30 |

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

$apiInstance = new SellingPartnerApi\Api\FinancesV0Api($config);
$order_id = 'order_id_example'; // string | An Amazon-defined order identifier, in 3-7-7 format.
$max_results_per_page = 100; // int | The maximum number of results to return per page. If the response exceeds the maximum number of transactions or 10 MB, the API responds with 'InvalidInput'.
$next_token = 'next_token_example'; // string | A string token returned in the response of your previous request.

try {
    $result = $apiInstance->listFinancialEventsByOrderId($order_id, $max_results_per_page, $next_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinancesV0Api->listFinancialEventsByOrderId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| An Amazon-defined order identifier, in 3-7-7 format. |
 **max_results_per_page** | **int**| The maximum number of results to return per page. If the response exceeds the maximum number of transactions or 10 MB, the API responds with 'InvalidInput'. | [optional] [default to 100]
 **next_token** | **string**| A string token returned in the response of your previous request. | [optional]

### Return type

[**\SellingPartnerApi\Model\FinancesV0\ListFinancialEventsResponse**](../Model/FinancesV0/ListFinancialEventsResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[FinancesV0 Model list]](../Model/FinancesV0)
[[README]](../../README.md)
