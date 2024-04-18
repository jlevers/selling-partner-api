# SellingPartnerApi\VendorDirectFulfillmentOrdersV1Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOrder()**](VendorDirectFulfillmentOrdersV1Api.md#getOrder) | **GET** /vendor/directFulfillment/orders/v1/purchaseOrders/{purchaseOrderNumber} | 
[**getOrders()**](VendorDirectFulfillmentOrdersV1Api.md#getOrders) | **GET** /vendor/directFulfillment/orders/v1/purchaseOrders | 
[**submitAcknowledgement()**](VendorDirectFulfillmentOrdersV1Api.md#submitAcknowledgement) | **POST** /vendor/directFulfillment/orders/v1/acknowledgements | 


## `getOrder()`

```php
getOrder($purchase_order_number): \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\GetOrderResponse
```



Returns purchase order information for the purchaseOrderNumber that you specify.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 10 | 10 |

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

$apiInstance = new SellingPartnerApi\Api\VendorDirectFulfillmentOrdersV1Api($config);
$purchase_order_number = 'purchase_order_number_example'; // string | The order identifier for the purchase order that you want. Formatting Notes: alpha-numeric code.

try {
    $result = $apiInstance->getOrder($purchase_order_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorDirectFulfillmentOrdersV1Api->getOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **purchase_order_number** | **string**| The order identifier for the purchase order that you want. Formatting Notes: alpha-numeric code. |

### Return type

[**\SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\GetOrderResponse**](../Model/VendorDirectFulfillmentOrdersV1/GetOrderResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[VendorDirectFulfillmentOrdersV1 Model list]](../Model/VendorDirectFulfillmentOrdersV1)
[[README]](../../README.md)

## `getOrders()`

```php
getOrders($created_after, $created_before, $ship_from_party_id, $status, $limit, $sort_order, $next_token, $include_details): \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\GetOrdersResponse
```



Returns a list of purchase orders created during the time frame that you specify. You define the time frame using the createdAfter and createdBefore parameters. You must use both parameters. You can choose to get only the purchase order numbers by setting the includeDetails parameter to false. In that case, the operation returns a list of purchase order numbers. You can then call the getOrder operation to return the details of a specific order.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 10 | 10 |

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

$apiInstance = new SellingPartnerApi\Api\VendorDirectFulfillmentOrdersV1Api($config);
$created_after = 'created_after_example'; // string | Purchase orders that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format.
$created_before = 'created_before_example'; // string | Purchase orders that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format.
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
    echo 'Exception when calling VendorDirectFulfillmentOrdersV1Api->getOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **created_after** | **string**| Purchase orders that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format. |
 **created_before** | **string**| Purchase orders that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format. |
 **ship_from_party_id** | **string**| The vendor warehouse identifier for the fulfillment warehouse. If not specified, the result will contain orders for all warehouses. | [optional]
 **status** | **string**| Returns only the purchase orders that match the specified status. If not specified, the result will contain orders that match any status. | [optional]
 **limit** | **int**| The limit to the number of purchase orders returned. | [optional]
 **sort_order** | **string**| Sort the list in ascending or descending order by order creation date. | [optional]
 **next_token** | **string**| Used for pagination when there are more orders than the specified result size limit. The token value is returned in the previous API call. | [optional]
 **include_details** | **bool**| When true, returns the complete purchase order details. Otherwise, only purchase order numbers are returned. | [optional] [default to 'true']

### Return type

[**\SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\GetOrdersResponse**](../Model/VendorDirectFulfillmentOrdersV1/GetOrdersResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `payload`

[[Top]](#) [[API list]](../)
[[VendorDirectFulfillmentOrdersV1 Model list]](../Model/VendorDirectFulfillmentOrdersV1)
[[README]](../../README.md)

## `submitAcknowledgement()`

```php
submitAcknowledgement($body): \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\SubmitAcknowledgementResponse
```



Submits acknowledgements for one or more purchase orders.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 10 | 10 |

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

$apiInstance = new SellingPartnerApi\Api\VendorDirectFulfillmentOrdersV1Api($config);
$body = new \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\SubmitAcknowledgementRequest(); // \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\SubmitAcknowledgementRequest

try {
    $result = $apiInstance->submitAcknowledgement($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorDirectFulfillmentOrdersV1Api->submitAcknowledgement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\SubmitAcknowledgementRequest**](../Model/VendorDirectFulfillmentOrdersV1/SubmitAcknowledgementRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\SubmitAcknowledgementResponse**](../Model/VendorDirectFulfillmentOrdersV1/SubmitAcknowledgementResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[VendorDirectFulfillmentOrdersV1 Model list]](../Model/VendorDirectFulfillmentOrdersV1)
[[README]](../../README.md)
