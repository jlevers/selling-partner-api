# Evers\SellingPartnerApi\NotificationsApi

All URIs are relative to https://sellingpartnerapi-na.amazon.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDestination()**](NotificationsApi.md#createDestination) | **POST** /notifications/v1/destinations | 
[**createSubscription()**](NotificationsApi.md#createSubscription) | **POST** /notifications/v1/subscriptions/{notificationType} | 
[**deleteDestination()**](NotificationsApi.md#deleteDestination) | **DELETE** /notifications/v1/destinations/{destinationId} | 
[**deleteSubscriptionById()**](NotificationsApi.md#deleteSubscriptionById) | **DELETE** /notifications/v1/subscriptions/{notificationType}/{subscriptionId} | 
[**getDestination()**](NotificationsApi.md#getDestination) | **GET** /notifications/v1/destinations/{destinationId} | 
[**getDestinations()**](NotificationsApi.md#getDestinations) | **GET** /notifications/v1/destinations | 
[**getSubscription()**](NotificationsApi.md#getSubscription) | **GET** /notifications/v1/subscriptions/{notificationType} | 
[**getSubscriptionById()**](NotificationsApi.md#getSubscriptionById) | **GET** /notifications/v1/subscriptions/{notificationType}/{subscriptionId} | 


## `createDestination()`

```php
createDestination($body): \Evers\SellingPartnerApi\Model\Notifications\CreateDestinationResponse
```



Creates a destination resource to receive notifications. The createDestination API is grantless. For more information, see \"Grantless operations\" in the Selling Partner API Developer Guide.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\NotificationsApi();
$body = new \Evers\SellingPartnerApi\Model\Notifications\CreateDestinationRequest(); // \Evers\SellingPartnerApi\Model\Notifications\CreateDestinationRequest

try {
    $result = $apiInstance->createDestination($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->createDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Evers\SellingPartnerApi\Model\Notifications\CreateDestinationRequest**](../Model/CreateDestinationRequest.md)|  |

### Return type

[**\Evers\SellingPartnerApi\Model\Notifications\CreateDestinationResponse**](../Model/CreateDestinationResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `Successful Response`

[[Top]](#) [[API list]](../)
[[Model list]](../Models)
[[README]](../../README.md)

## `createSubscription()`

```php
createSubscription($notification_type, $body): \Evers\SellingPartnerApi\Model\Notifications\CreateSubscriptionResponse
```



Creates a subscription for the specified notification type to be delivered to the specified destination. Before you can subscribe, you must first create the destination by calling the createDestination operation.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\NotificationsApi();
$notification_type = 'notification_type_example'; // string | The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide.
$body = new \Evers\SellingPartnerApi\Model\Notifications\CreateSubscriptionRequest(); // \Evers\SellingPartnerApi\Model\Notifications\CreateSubscriptionRequest

try {
    $result = $apiInstance->createSubscription($notification_type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->createSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_type** | **string**| The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. |
 **body** | [**\Evers\SellingPartnerApi\Model\Notifications\CreateSubscriptionRequest**](../Model/CreateSubscriptionRequest.md)|  |

### Return type

[**\Evers\SellingPartnerApi\Model\Notifications\CreateSubscriptionResponse**](../Model/CreateSubscriptionResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `Successful Response`

[[Top]](#) [[API list]](../)
[[Model list]](../Models)
[[README]](../../README.md)

## `deleteDestination()`

```php
deleteDestination($destination_id): \Evers\SellingPartnerApi\Model\Notifications\DeleteDestinationResponse
```



Deletes the destination that you specify. The deleteDestination API is grantless. For more information, see \"Grantless operations\" in the Selling Partner API Developer Guide.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\NotificationsApi();
$destination_id = 'destination_id_example'; // string | The identifier for the destination that you want to delete.

try {
    $result = $apiInstance->deleteDestination($destination_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->deleteDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **destination_id** | **string**| The identifier for the destination that you want to delete. |

### Return type

[**\Evers\SellingPartnerApi\Model\Notifications\DeleteDestinationResponse**](../Model/DeleteDestinationResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `Successful Response`

[[Top]](#) [[API list]](../)
[[Model list]](../Models)
[[README]](../../README.md)

## `deleteSubscriptionById()`

```php
deleteSubscriptionById($subscription_id, $notification_type): \Evers\SellingPartnerApi\Model\Notifications\DeleteSubscriptionByIdResponse
```



Deletes the subscription indicated by the subscription identifier and notification type that you specify. The subscription identifier can be for any subscription associated with your application. After you successfully call this operation, notifications will stop being sent for the associated subscription. The deleteSubscriptionById API is grantless. For more information, see \"Grantless operations\" in the Selling Partner API Developer Guide.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\NotificationsApi();
$subscription_id = 'subscription_id_example'; // string | The identifier for the subscription that you want to delete.
$notification_type = 'notification_type_example'; // string | The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide.

try {
    $result = $apiInstance->deleteSubscriptionById($subscription_id, $notification_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->deleteSubscriptionById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **string**| The identifier for the subscription that you want to delete. |
 **notification_type** | **string**| The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. |

### Return type

[**\Evers\SellingPartnerApi\Model\Notifications\DeleteSubscriptionByIdResponse**](../Model/DeleteSubscriptionByIdResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `Successful Operation Response`

[[Top]](#) [[API list]](../)
[[Model list]](../Models)
[[README]](../../README.md)

## `getDestination()`

```php
getDestination($destination_id): \Evers\SellingPartnerApi\Model\Notifications\GetDestinationResponse
```



Returns information about the destination that you specify. The getDestination API is grantless. For more information, see \"Grantless operations\" in the Selling Partner API Developer Guide.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\NotificationsApi();
$destination_id = 'destination_id_example'; // string | The identifier generated when you created the destination.

try {
    $result = $apiInstance->getDestination($destination_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **destination_id** | **string**| The identifier generated when you created the destination. |

### Return type

[**\Evers\SellingPartnerApi\Model\Notifications\GetDestinationResponse**](../Model/GetDestinationResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `Successful Response`

[[Top]](#) [[API list]](../)
[[Model list]](../Models)
[[README]](../../README.md)

## `getDestinations()`

```php
getDestinations(): \Evers\SellingPartnerApi\Model\Notifications\GetDestinationsResponse
```



Returns information about all destinations. The getDestinations API is grantless. For more information, see \"Grantless operations\" in the Selling Partner API Developer Guide.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\NotificationsApi();

try {
    $result = $apiInstance->getDestinations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getDestinations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Evers\SellingPartnerApi\Model\Notifications\GetDestinationsResponse**](../Model/GetDestinationsResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `Successful Response`

[[Top]](#) [[API list]](../)
[[Model list]](../Models)
[[README]](../../README.md)

## `getSubscription()`

```php
getSubscription($notification_type): \Evers\SellingPartnerApi\Model\Notifications\GetSubscriptionResponse
```



Returns information about subscriptions of the specified notification type. You can use this API to get subscription information when you do not have a subscription identifier.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\NotificationsApi();
$notification_type = 'notification_type_example'; // string | The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide.

try {
    $result = $apiInstance->getSubscription($notification_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_type** | **string**| The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. |

### Return type

[**\Evers\SellingPartnerApi\Model\Notifications\GetSubscriptionResponse**](../Model/GetSubscriptionResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `Successful Response`

[[Top]](#) [[API list]](../)
[[Model list]](../Models)
[[README]](../../README.md)

## `getSubscriptionById()`

```php
getSubscriptionById($subscription_id, $notification_type): \Evers\SellingPartnerApi\Model\Notifications\GetSubscriptionByIdResponse
```



Returns information about a subscription for the specified notification type. The getSubscriptionById API is grantless. For more information, see \"Grantless operations\" in the Selling Partner API Developer Guide.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\NotificationsApi();
$subscription_id = 'subscription_id_example'; // string | The identifier for the subscription that you want to get.
$notification_type = 'notification_type_example'; // string | The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide.

try {
    $result = $apiInstance->getSubscriptionById($subscription_id, $notification_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getSubscriptionById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **string**| The identifier for the subscription that you want to get. |
 **notification_type** | **string**| The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. |

### Return type

[**\Evers\SellingPartnerApi\Model\Notifications\GetSubscriptionByIdResponse**](../Model/GetSubscriptionByIdResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `Successful Response`

[[Top]](#) [[API list]](../)
[[Model list]](../Models)
[[README]](../../README.md)
