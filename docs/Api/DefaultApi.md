# Evers\SellingPartnerApi\DefaultApi

All URIs are relative to *https://sellingpartnerapi-na.amazon.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listFinancialEventGroups**](DefaultApi.md#listFinancialEventGroups) | **GET** /finances/v0/financialEventGroups | 
[**listFinancialEvents**](DefaultApi.md#listFinancialEvents) | **GET** /finances/v0/financialEvents | 
[**listFinancialEventsByGroupId**](DefaultApi.md#listFinancialEventsByGroupId) | **GET** /finances/v0/financialEventGroups/{eventGroupId}/financialEvents | 
[**listFinancialEventsByOrderId**](DefaultApi.md#listFinancialEventsByOrderId) | **GET** /finances/v0/orders/{orderId}/financialEvents | 


# **listFinancialEventGroups**
> \Evers\SellingPartnerApi\Model\ListFinancialEventGroupsResponse listFinancialEventGroups($max_results_per_page, $financial_event_group_started_before, $financial_event_group_started_after, $next_token)



Returns financial event groups for a given date range.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 0.5 | 30 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\DefaultApi(
);
$max_results_per_page = 100; // int | The maximum number of results to return per page.
$financial_event_group_started_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | A date used for selecting financial event groups that opened before (but not at) a specified date and time, in ISO 8601 format. The date-time  must be later than FinancialEventGroupStartedAfter and no later than two minutes before the request was submitted. If FinancialEventGroupStartedAfter and FinancialEventGroupStartedBefore are more than 180 days apart, no financial event groups are returned.
$financial_event_group_started_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | A date used for selecting financial event groups that opened after (or at) a specified date and time, in ISO 8601 format. The date-time must be no later than two minutes before the request was submitted.
$next_token = "next_token_example"; // string | A string token returned in the response of your previous request.

try {
    $result = $apiInstance->listFinancialEventGroups($max_results_per_page, $financial_event_group_started_before, $financial_event_group_started_after, $next_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listFinancialEventGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **max_results_per_page** | **int**| The maximum number of results to return per page. | [optional] [default to 100]
 **financial_event_group_started_before** | **\DateTime**| A date used for selecting financial event groups that opened before (but not at) a specified date and time, in ISO 8601 format. The date-time  must be later than FinancialEventGroupStartedAfter and no later than two minutes before the request was submitted. If FinancialEventGroupStartedAfter and FinancialEventGroupStartedBefore are more than 180 days apart, no financial event groups are returned. | [optional]
 **financial_event_group_started_after** | **\DateTime**| A date used for selecting financial event groups that opened after (or at) a specified date and time, in ISO 8601 format. The date-time must be no later than two minutes before the request was submitted. | [optional]
 **next_token** | **string**| A string token returned in the response of your previous request. | [optional]

### Return type

[**\Evers\SellingPartnerApi\Model\ListFinancialEventGroupsResponse**](../Model/ListFinancialEventGroupsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Top]](#) [[API list]](../) [[Model list]](../Model) [[README]](../../README.md)

# **listFinancialEvents**
> \Evers\SellingPartnerApi\Model\ListFinancialEventsResponse listFinancialEvents($max_results_per_page, $posted_after, $posted_before, $next_token)



Returns financial events for the specified data range.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 0.5 | 30 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\DefaultApi(
);
$max_results_per_page = 100; // int | The maximum number of results to return per page.
$posted_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | A date used for selecting financial events posted after (or at) a specified time. The date-time must be no later than two minutes before the request was submitted, in ISO 8601 date time format.
$posted_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | A date used for selecting financial events posted before (but not at) a specified time. The date-time must be later than PostedAfter and no later than two minutes before the request was submitted, in ISO 8601 date time format. If PostedAfter and PostedBefore are more than 180 days apart, no financial events are returned. You must specify the PostedAfter parameter if you specify the PostedBefore parameter. Default: Now minus two minutes.
$next_token = "next_token_example"; // string | A string token returned in the response of your previous request.

try {
    $result = $apiInstance->listFinancialEvents($max_results_per_page, $posted_after, $posted_before, $next_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listFinancialEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **max_results_per_page** | **int**| The maximum number of results to return per page. | [optional] [default to 100]
 **posted_after** | **\DateTime**| A date used for selecting financial events posted after (or at) a specified time. The date-time must be no later than two minutes before the request was submitted, in ISO 8601 date time format. | [optional]
 **posted_before** | **\DateTime**| A date used for selecting financial events posted before (but not at) a specified time. The date-time must be later than PostedAfter and no later than two minutes before the request was submitted, in ISO 8601 date time format. If PostedAfter and PostedBefore are more than 180 days apart, no financial events are returned. You must specify the PostedAfter parameter if you specify the PostedBefore parameter. Default: Now minus two minutes. | [optional]
 **next_token** | **string**| A string token returned in the response of your previous request. | [optional]

### Return type

[**\Evers\SellingPartnerApi\Model\ListFinancialEventsResponse**](../Model/ListFinancialEventsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Top]](#) [[API list]](../) [[Model list]](../Model) [[README]](../../README.md)

# **listFinancialEventsByGroupId**
> \Evers\SellingPartnerApi\Model\ListFinancialEventsResponse listFinancialEventsByGroupId($event_group_id, $max_results_per_page, $next_token)



Returns all financial events for the specified financial event group.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 0.5 | 30 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\DefaultApi(
);
$event_group_id = "event_group_id_example"; // string | The identifier of the financial event group to which the events belong.
$max_results_per_page = 100; // int | The maximum number of results to return per page.
$next_token = "next_token_example"; // string | A string token returned in the response of your previous request.

try {
    $result = $apiInstance->listFinancialEventsByGroupId($event_group_id, $max_results_per_page, $next_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listFinancialEventsByGroupId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_group_id** | **string**| The identifier of the financial event group to which the events belong. |
 **max_results_per_page** | **int**| The maximum number of results to return per page. | [optional] [default to 100]
 **next_token** | **string**| A string token returned in the response of your previous request. | [optional]

### Return type

[**\Evers\SellingPartnerApi\Model\ListFinancialEventsResponse**](../Model/ListFinancialEventsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Top]](#) [[API list]](../) [[Model list]](../Model) [[README]](../../README.md)

# **listFinancialEventsByOrderId**
> \Evers\SellingPartnerApi\Model\ListFinancialEventsResponse listFinancialEventsByOrderId($order_id, $max_results_per_page, $next_token)



Returns all financial events for the specified order.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 0.5 | 30 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\DefaultApi(
);
$order_id = "order_id_example"; // string | An Amazon-defined order identifier, in 3-7-7 format.
$max_results_per_page = 100; // int | The maximum number of results to return per page.
$next_token = "next_token_example"; // string | A string token returned in the response of your previous request.

try {
    $result = $apiInstance->listFinancialEventsByOrderId($order_id, $max_results_per_page, $next_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listFinancialEventsByOrderId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| An Amazon-defined order identifier, in 3-7-7 format. |
 **max_results_per_page** | **int**| The maximum number of results to return per page. | [optional] [default to 100]
 **next_token** | **string**| A string token returned in the response of your previous request. | [optional]

### Return type

[**\Evers\SellingPartnerApi\Model\ListFinancialEventsResponse**](../Model/ListFinancialEventsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Top]](#) [[API list]](../) [[Model list]](../Model) [[README]](../../README.md)

