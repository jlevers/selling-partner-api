# SellingPartnerApi\VendorDirectFulfillmentOrdersApi

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOrder()**](VendorDirectFulfillmentOrdersApi.md#getOrder) | **GET** /vendor/directFulfillment/orders/v1/purchaseOrders/{purchaseOrderNumber} | 
[**getOrders()**](VendorDirectFulfillmentOrdersApi.md#getOrders) | **GET** /vendor/directFulfillment/orders/v1/purchaseOrders | 
[**submitAcknowledgement()**](VendorDirectFulfillmentOrdersApi.md#submitAcknowledgement) | **POST** /vendor/directFulfillment/orders/v1/acknowledgements | 


## `getOrder()`

```php
getOrder($purchase_order_number): \SellingPartnerApi\Model\VendorDirectFulfillmentOrders\GetOrderResponse
```



Returns purchase order information for the purchaseOrderNumber that you specify.

**Usage Plans:**

| Plan type | Rate (requests per second) | Burst |
| ---- | ---- | ---- |
|Default| 10 | 10 |
|Selling partner specific| Variable | Variable |

The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

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

$apiInstance = new SellingPartnerApi\Api\VendorDirectFulfillmentOrdersApi($config);
$purchase_order_number = 'purchase_order_number_example'; // string | The order identifier for the purchase order that you want. Formatting Notes: alpha-numeric code.

try {
    $result = $apiInstance->getOrder($purchase_order_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorDirectFulfillmentOrdersApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **purchase_order_number** | **string**| The order identifier for the purchase order that you want. Formatting Notes: alpha-numeric code. |

### Return type

[**\SellingPartnerApi\Model\VendorDirectFulfillmentOrders\GetOrderResponse**](../Model/VendorDirectFulfillmentOrders/GetOrderResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[VendorDirectFulfillmentOrders Model list]](../Model/VendorDirectFulfillmentOrders)
[[README]](../../README.md)

## `getOrders()`

```php
getOrders($created_after, $created_before, $ship_from_party_id, $status, $limit, $sort_order, $next_token, $include_details): \SellingPartnerApi\Model\VendorDirectFulfillmentOrders\GetOrdersResponse
```



Returns a list of purchase orders created during the time frame that you specify. You define the time frame using the createdAfter and createdBefore parameters. You must use both parameters. You can choose to get only the purchase order numbers by setting the includeDetails parameter to false. In that case, the operation returns a list of purchase order numbers. You can then call the getOrder operation to return the details of a specific order.

**Usage Plans:**

| Plan type | Rate (requests per second) | Burst |
| ---- | ---- | ---- |
|Default| 10 | 10 |
|Selling partner specific| Variable | Variable |

The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

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

$apiInstance = new SellingPartnerApi\Api\VendorDirectFulfillmentOrdersApi($config);
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Purchase orders that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format.
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Purchase orders that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format.
$ship_from_party_id = 'ship_from_party_id_example'; // string | The vendor warehouse identifier for the fulfillment warehouse. If not specified, the result will contain orders for all warehouses.
$status = 'status_example'; // string | Returns only the purchase orders that match the specified status. If not specified, the result will contain orders that match any status.
$limit = 56; // int | The limit to the number of purchase orders returned.
$sort_order = 'sort_order_example'; // string | Sort the list in ascending or descending order by order creation date.
$next_token = 'next_token_example'; // string | Used for pagination when there are more orders than the specified result size limit. The token value is returned in the previous API call.
$include_details = 'true'; // bool | When true, returns the complete purchase order details. Otherwise, only purchase order numbers are returned.

try {
    $result = $apiInstance->getOrders($created_after, $created_before, $ship_from_party_id, $status, $limit, $sort_order, $next_token, $include_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorDirectFulfillmentOrdersApi->getOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **created_after** | **\DateTime**| Purchase orders that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format. |
 **created_before** | **\DateTime**| Purchase orders that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format. |
 **ship_from_party_id** | **string**| The vendor warehouse identifier for the fulfillment warehouse. If not specified, the result will contain orders for all warehouses. | [optional]
 **status** | **string**| Returns only the purchase orders that match the specified status. If not specified, the result will contain orders that match any status. | [optional]
 **limit** | **int**| The limit to the number of purchase orders returned. | [optional]
 **sort_order** | **string**| Sort the list in ascending or descending order by order creation date. | [optional]
 **next_token** | **string**| Used for pagination when there are more orders than the specified result size limit. The token value is returned in the previous API call. | [optional]
 **include_details** | **bool**| When true, returns the complete purchase order details. Otherwise, only purchase order numbers are returned. | [optional] [default to &#39;true&#39;]

### Return type

[**\SellingPartnerApi\Model\VendorDirectFulfillmentOrders\GetOrdersResponse**](../Model/VendorDirectFulfillmentOrders/GetOrdersResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `payload`

[[Top]](#) [[API list]](../)
[[VendorDirectFulfillmentOrders Model list]](../Model/VendorDirectFulfillmentOrders)
[[README]](../../README.md)

## `submitAcknowledgement()`

```php
submitAcknowledgement($body): \SellingPartnerApi\Model\VendorDirectFulfillmentOrders\SubmitAcknowledgementResponse
```



Submits acknowledgements for one or more purchase orders.

**Usage Plans:**

| Plan type | Rate (requests per second) | Burst |
| ---- | ---- | ---- |
|Default| 10 | 10 |
|Selling partner specific| Variable | Variable |

The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

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

$apiInstance = new SellingPartnerApi\Api\VendorDirectFulfillmentOrdersApi($config);
$body = new \SellingPartnerApi\Model\VendorDirectFulfillmentOrders\SubmitAcknowledgementRequest(); // \SellingPartnerApi\Model\VendorDirectFulfillmentOrders\SubmitAcknowledgementRequest

try {
    $result = $apiInstance->submitAcknowledgement($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorDirectFulfillmentOrdersApi->submitAcknowledgement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentOrders\SubmitAcknowledgementRequest**](../Model/VendorDirectFulfillmentOrders/SubmitAcknowledgementRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\VendorDirectFulfillmentOrders\SubmitAcknowledgementResponse**](../Model/VendorDirectFulfillmentOrders/SubmitAcknowledgementResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[VendorDirectFulfillmentOrders Model list]](../Model/VendorDirectFulfillmentOrders)
[[README]](../../README.md)
