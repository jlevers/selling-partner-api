# SellingPartnerApi\NotificationsV1Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDestination()**](NotificationsV1Api.md#createDestination) | **POST** /notifications/v1/destinations | 
[**createSubscription()**](NotificationsV1Api.md#createSubscription) | **POST** /notifications/v1/subscriptions/{notificationType} | 
[**deleteDestination()**](NotificationsV1Api.md#deleteDestination) | **DELETE** /notifications/v1/destinations/{destinationId} | 
[**deleteSubscriptionById()**](NotificationsV1Api.md#deleteSubscriptionById) | **DELETE** /notifications/v1/subscriptions/{notificationType}/{subscriptionId} | 
[**getDestination()**](NotificationsV1Api.md#getDestination) | **GET** /notifications/v1/destinations/{destinationId} | 
[**getDestinations()**](NotificationsV1Api.md#getDestinations) | **GET** /notifications/v1/destinations | 
[**getSubscription()**](NotificationsV1Api.md#getSubscription) | **GET** /notifications/v1/subscriptions/{notificationType} | 
[**getSubscriptionById()**](NotificationsV1Api.md#getSubscriptionById) | **GET** /notifications/v1/subscriptions/{notificationType}/{subscriptionId} | 


## `createDestination()`

```php
createDestination($body): \SellingPartnerApi\Model\NotificationsV1\CreateDestinationResponse
```



Creates a destination resource to receive notifications. The createDestination API is grantless. For more information, see [Grantless operations](https://developer-docs.amazon.com/sp-api/docs/grantless-operations) in the Selling Partner API Developer Guide.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1 | 5 |

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

$apiInstance = new SellingPartnerApi\Api\NotificationsV1Api($config);
$body = new \SellingPartnerApi\Model\NotificationsV1\CreateDestinationRequest(); // \SellingPartnerApi\Model\NotificationsV1\CreateDestinationRequest

try {
    $result = $apiInstance->createDestination($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsV1Api->createDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\NotificationsV1\CreateDestinationRequest**](../Model/NotificationsV1/CreateDestinationRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\NotificationsV1\CreateDestinationResponse**](../Model/NotificationsV1/CreateDestinationResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `Successful Response`

[[Top]](#) [[API list]](../)
[[NotificationsV1 Model list]](../Model/NotificationsV1)
[[README]](../../README.md)

## `createSubscription()`

```php
createSubscription($notification_type, $body): \SellingPartnerApi\Model\NotificationsV1\CreateSubscriptionResponse
```



Creates a subscription for the specified notification type to be delivered to the specified destination. Before you can subscribe, you must first create the destination by calling the createDestination operation.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1 | 5 |

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

$apiInstance = new SellingPartnerApi\Api\NotificationsV1Api($config);
$notification_type = 'notification_type_example'; // string | The type of notification.

 For more information about notification types, see [the Notifications API Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/notifications-api-v1-use-case-guide).
$body = new \SellingPartnerApi\Model\NotificationsV1\CreateSubscriptionRequest(); // \SellingPartnerApi\Model\NotificationsV1\CreateSubscriptionRequest

try {
    $result = $apiInstance->createSubscription($notification_type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsV1Api->createSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_type** | **string**| The type of notification.

 For more information about notification types, see [the Notifications API Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/notifications-api-v1-use-case-guide). |
 **body** | [**\SellingPartnerApi\Model\NotificationsV1\CreateSubscriptionRequest**](../Model/NotificationsV1/CreateSubscriptionRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\NotificationsV1\CreateSubscriptionResponse**](../Model/NotificationsV1/CreateSubscriptionResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `Successful Response`

[[Top]](#) [[API list]](../)
[[NotificationsV1 Model list]](../Model/NotificationsV1)
[[README]](../../README.md)

## `deleteDestination()`

```php
deleteDestination($destination_id): \SellingPartnerApi\Model\NotificationsV1\DeleteDestinationResponse
```



Deletes the destination that you specify. The deleteDestination API is grantless. For more information, see [Grantless operations](https://developer-docs.amazon.com/sp-api/docs/grantless-operations) in the Selling Partner API Developer Guide.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1 | 5 |

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

$apiInstance = new SellingPartnerApi\Api\NotificationsV1Api($config);
$destination_id = 'destination_id_example'; // string | The identifier for the destination that you want to delete.

try {
    $result = $apiInstance->deleteDestination($destination_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsV1Api->deleteDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **destination_id** | **string**| The identifier for the destination that you want to delete. |

### Return type

[**\SellingPartnerApi\Model\NotificationsV1\DeleteDestinationResponse**](../Model/NotificationsV1/DeleteDestinationResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `Successful Response`

[[Top]](#) [[API list]](../)
[[NotificationsV1 Model list]](../Model/NotificationsV1)
[[README]](../../README.md)

## `deleteSubscriptionById()`

```php
deleteSubscriptionById($subscription_id, $notification_type): \SellingPartnerApi\Model\NotificationsV1\DeleteSubscriptionByIdResponse
```



Deletes the subscription indicated by the subscription identifier and notification type that you specify. The subscription identifier can be for any subscription associated with your application. After you successfully call this operation, notifications will stop being sent for the associated subscription. The deleteSubscriptionById API is grantless. For more information, see [Grantless operations](https://developer-docs.amazon.com/sp-api/docs/grantless-operations) in the Selling Partner API Developer Guide.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1 | 5 |

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

$apiInstance = new SellingPartnerApi\Api\NotificationsV1Api($config);
$subscription_id = 'subscription_id_example'; // string | The identifier for the subscription that you want to delete.
$notification_type = 'notification_type_example'; // string | The type of notification.

 For more information about notification types, see [the Notifications API Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/notifications-api-v1-use-case-guide).

try {
    $result = $apiInstance->deleteSubscriptionById($subscription_id, $notification_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsV1Api->deleteSubscriptionById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **string**| The identifier for the subscription that you want to delete. |
 **notification_type** | **string**| The type of notification.

 For more information about notification types, see [the Notifications API Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/notifications-api-v1-use-case-guide). |

### Return type

[**\SellingPartnerApi\Model\NotificationsV1\DeleteSubscriptionByIdResponse**](../Model/NotificationsV1/DeleteSubscriptionByIdResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `Successful Operation Response`

[[Top]](#) [[API list]](../)
[[NotificationsV1 Model list]](../Model/NotificationsV1)
[[README]](../../README.md)

## `getDestination()`

```php
getDestination($destination_id): \SellingPartnerApi\Model\NotificationsV1\GetDestinationResponse
```



Returns information about the destination that you specify. The getDestination API is grantless. For more information, see [Grantless operations](https://developer-docs.amazon.com/sp-api/docs/grantless-operations) in the Selling Partner API Developer Guide.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1 | 5 |

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

$apiInstance = new SellingPartnerApi\Api\NotificationsV1Api($config);
$destination_id = 'destination_id_example'; // string | The identifier generated when you created the destination.

try {
    $result = $apiInstance->getDestination($destination_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsV1Api->getDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **destination_id** | **string**| The identifier generated when you created the destination. |

### Return type

[**\SellingPartnerApi\Model\NotificationsV1\GetDestinationResponse**](../Model/NotificationsV1/GetDestinationResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `Successful Response`

[[Top]](#) [[API list]](../)
[[NotificationsV1 Model list]](../Model/NotificationsV1)
[[README]](../../README.md)

## `getDestinations()`

```php
getDestinations(): \SellingPartnerApi\Model\NotificationsV1\GetDestinationsResponse
```



Returns information about all destinations. The getDestinations API is grantless. For more information, see [Grantless operations](https://developer-docs.amazon.com/sp-api/docs/grantless-operations) in the Selling Partner API Developer Guide.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1 | 5 |

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

$apiInstance = new SellingPartnerApi\Api\NotificationsV1Api($config);

try {
    $result = $apiInstance->getDestinations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsV1Api->getDestinations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SellingPartnerApi\Model\NotificationsV1\GetDestinationsResponse**](../Model/NotificationsV1/GetDestinationsResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `Successful Response`

[[Top]](#) [[API list]](../)
[[NotificationsV1 Model list]](../Model/NotificationsV1)
[[README]](../../README.md)

## `getSubscription()`

```php
getSubscription($notification_type): \SellingPartnerApi\Model\NotificationsV1\GetSubscriptionResponse
```



Returns information about subscriptions of the specified notification type. You can use this API to get subscription information when you do not have a subscription identifier.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1 | 5 |

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

$apiInstance = new SellingPartnerApi\Api\NotificationsV1Api($config);
$notification_type = 'notification_type_example'; // string | The type of notification.

 For more information about notification types, see [the Notifications API Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/notifications-api-v1-use-case-guide).

try {
    $result = $apiInstance->getSubscription($notification_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsV1Api->getSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_type** | **string**| The type of notification.

 For more information about notification types, see [the Notifications API Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/notifications-api-v1-use-case-guide). |

### Return type

[**\SellingPartnerApi\Model\NotificationsV1\GetSubscriptionResponse**](../Model/NotificationsV1/GetSubscriptionResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `Successful Response`

[[Top]](#) [[API list]](../)
[[NotificationsV1 Model list]](../Model/NotificationsV1)
[[README]](../../README.md)

## `getSubscriptionById()`

```php
getSubscriptionById($subscription_id, $notification_type): \SellingPartnerApi\Model\NotificationsV1\GetSubscriptionByIdResponse
```



Returns information about a subscription for the specified notification type. The getSubscriptionById API is grantless. For more information, see [Grantless operations](https://developer-docs.amazon.com/sp-api/docs/grantless-operations) in the Selling Partner API Developer Guide.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1 | 5 |

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

$apiInstance = new SellingPartnerApi\Api\NotificationsV1Api($config);
$subscription_id = 'subscription_id_example'; // string | The identifier for the subscription that you want to get.
$notification_type = 'notification_type_example'; // string | The type of notification.

 For more information about notification types, see [the Notifications API Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/notifications-api-v1-use-case-guide).

try {
    $result = $apiInstance->getSubscriptionById($subscription_id, $notification_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsV1Api->getSubscriptionById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **string**| The identifier for the subscription that you want to get. |
 **notification_type** | **string**| The type of notification.

 For more information about notification types, see [the Notifications API Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/notifications-api-v1-use-case-guide). |

### Return type

[**\SellingPartnerApi\Model\NotificationsV1\GetSubscriptionByIdResponse**](../Model/NotificationsV1/GetSubscriptionByIdResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `Successful Response`

[[Top]](#) [[API list]](../)
[[NotificationsV1 Model list]](../Model/NotificationsV1)
[[README]](../../README.md)
