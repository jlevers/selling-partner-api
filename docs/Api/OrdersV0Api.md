# SellingPartnerApi\OrdersV0Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**confirmShipment()**](OrdersV0Api.md#confirmShipment) | **POST** /orders/v0/orders/{orderId}/shipmentConfirmation | 
[**getOrder()**](OrdersV0Api.md#getOrder) | **GET** /orders/v0/orders/{orderId} | 
[**getOrderAddress()**](OrdersV0Api.md#getOrderAddress) | **GET** /orders/v0/orders/{orderId}/address | 
[**getOrderBuyerInfo()**](OrdersV0Api.md#getOrderBuyerInfo) | **GET** /orders/v0/orders/{orderId}/buyerInfo | 
[**getOrderItems()**](OrdersV0Api.md#getOrderItems) | **GET** /orders/v0/orders/{orderId}/orderItems | 
[**getOrderItemsBuyerInfo()**](OrdersV0Api.md#getOrderItemsBuyerInfo) | **GET** /orders/v0/orders/{orderId}/orderItems/buyerInfo | 
[**getOrderRegulatedInfo()**](OrdersV0Api.md#getOrderRegulatedInfo) | **GET** /orders/v0/orders/{orderId}/regulatedInfo | 
[**getOrders()**](OrdersV0Api.md#getOrders) | **GET** /orders/v0/orders | 
[**updateShipmentStatus()**](OrdersV0Api.md#updateShipmentStatus) | **POST** /orders/v0/orders/{orderId}/shipment | 
[**updateVerificationStatus()**](OrdersV0Api.md#updateVerificationStatus) | **PATCH** /orders/v0/orders/{orderId}/regulatedInfo | 


## `confirmShipment()`

```php
confirmShipment($order_id, $payload)
```



Updates the shipment confirmation status for a specified order.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 2 | 10 |

The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values then those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

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

$apiInstance = new SellingPartnerApi\Api\OrdersV0Api($config);
$order_id = 'order_id_example'; // string | An Amazon-defined order identifier, in 3-7-7 format.
$payload = new \SellingPartnerApi\Model\OrdersV0\ConfirmShipmentRequest(); // \SellingPartnerApi\Model\OrdersV0\ConfirmShipmentRequest | Request body of confirmShipment.

try {
    $apiInstance->confirmShipment($order_id, $payload);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV0Api->confirmShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| An Amazon-defined order identifier, in 3-7-7 format. |
 **payload** | [**\SellingPartnerApi\Model\OrdersV0\ConfirmShipmentRequest**](../Model/OrdersV0/ConfirmShipmentRequest.md)| Request body of confirmShipment. |

### Return type

void (empty response body)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[OrdersV0 Model list]](../Model/OrdersV0)
[[README]](../../README.md)

## `getOrder()`

```php
getOrder($order_id, $data_elements): \SellingPartnerApi\Model\OrdersV0\GetOrderResponse
```



Returns the order that you specify.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 0.0167 | 20 |

The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values then those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

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

$apiInstance = new SellingPartnerApi\Api\OrdersV0Api($config);
$order_id = 'order_id_example'; // string | An Amazon-defined order identifier, in 3-7-7 format.
$data_elements = array('data_elements_example'); // string[] | An array of restricted order data elements to retrieve (valid array elements are \"buyerInfo\" and \"shippingAddress\")

try {
    $result = $apiInstance->getOrder($order_id, $data_elements);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV0Api->getOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| An Amazon-defined order identifier, in 3-7-7 format. |
 **data_elements** | [**string[]**](../Model/OrdersV0/string.md)| An array of restricted order data elements to retrieve (valid array elements are \"buyerInfo\" and \"shippingAddress\") | [optional]

### Return type

[**\SellingPartnerApi\Model\OrdersV0\GetOrderResponse**](../Model/OrdersV0/GetOrderResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[OrdersV0 Model list]](../Model/OrdersV0)
[[README]](../../README.md)

## `getOrderAddress()`

```php
getOrderAddress($order_id): \SellingPartnerApi\Model\OrdersV0\GetOrderAddressResponse
```



Returns the shipping address for the order that you specify.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 0.0167 | 20 |

The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values then those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

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

$apiInstance = new SellingPartnerApi\Api\OrdersV0Api($config);
$order_id = 'order_id_example'; // string | An orderId is an Amazon-defined order identifier, in 3-7-7 format.

try {
    $result = $apiInstance->getOrderAddress($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV0Api->getOrderAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| An orderId is an Amazon-defined order identifier, in 3-7-7 format. |

### Return type

[**\SellingPartnerApi\Model\OrdersV0\GetOrderAddressResponse**](../Model/OrdersV0/GetOrderAddressResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[OrdersV0 Model list]](../Model/OrdersV0)
[[README]](../../README.md)

## `getOrderBuyerInfo()`

```php
getOrderBuyerInfo($order_id): \SellingPartnerApi\Model\OrdersV0\GetOrderBuyerInfoResponse
```



Returns buyer information for the order that you specify.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 0.0167 | 20 |

The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values then those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

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

$apiInstance = new SellingPartnerApi\Api\OrdersV0Api($config);
$order_id = 'order_id_example'; // string | An orderId is an Amazon-defined order identifier, in 3-7-7 format.

try {
    $result = $apiInstance->getOrderBuyerInfo($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV0Api->getOrderBuyerInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| An orderId is an Amazon-defined order identifier, in 3-7-7 format. |

### Return type

[**\SellingPartnerApi\Model\OrdersV0\GetOrderBuyerInfoResponse**](../Model/OrdersV0/GetOrderBuyerInfoResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[OrdersV0 Model list]](../Model/OrdersV0)
[[README]](../../README.md)

## `getOrderItems()`

```php
getOrderItems($order_id, $next_token, $data_elements): \SellingPartnerApi\Model\OrdersV0\GetOrderItemsResponse
```



Returns detailed order item information for the order that you specify. If NextToken is provided, it's used to retrieve the next page of order items.

__Note__: When an order is in the Pending state (the order has been placed but payment has not been authorized), the getOrderItems operation does not return information about pricing, taxes, shipping charges, gift status or promotions for the order items in the order. After an order leaves the Pending state (this occurs when payment has been authorized) and enters the Unshipped, Partially Shipped, or Shipped state, the getOrderItems operation returns information about pricing, taxes, shipping charges, gift status and promotions for the order items in the order.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 0.5 | 30 |

The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values then those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

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

$apiInstance = new SellingPartnerApi\Api\OrdersV0Api($config);
$order_id = 'order_id_example'; // string | An Amazon-defined order identifier, in 3-7-7 format.
$next_token = 'next_token_example'; // string | A string token returned in the response of your previous request.
$data_elements = array('data_elements_example'); // string[] | An array of restricted order data elements to retrieve (the only valid array element is \"buyerInfo\")

try {
    $result = $apiInstance->getOrderItems($order_id, $next_token, $data_elements);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV0Api->getOrderItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| An Amazon-defined order identifier, in 3-7-7 format. |
 **next_token** | **string**| A string token returned in the response of your previous request. | [optional]
 **data_elements** | [**string[]**](../Model/OrdersV0/string.md)| An array of restricted order data elements to retrieve (the only valid array element is \"buyerInfo\") | [optional]

### Return type

[**\SellingPartnerApi\Model\OrdersV0\GetOrderItemsResponse**](../Model/OrdersV0/GetOrderItemsResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[OrdersV0 Model list]](../Model/OrdersV0)
[[README]](../../README.md)

## `getOrderItemsBuyerInfo()`

```php
getOrderItemsBuyerInfo($order_id, $next_token): \SellingPartnerApi\Model\OrdersV0\GetOrderItemsBuyerInfoResponse
```



Returns buyer information for the order items in the order that you specify.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 0.5 | 30 |

The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values then those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

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

$apiInstance = new SellingPartnerApi\Api\OrdersV0Api($config);
$order_id = 'order_id_example'; // string | An Amazon-defined order identifier, in 3-7-7 format.
$next_token = 'next_token_example'; // string | A string token returned in the response of your previous request.

try {
    $result = $apiInstance->getOrderItemsBuyerInfo($order_id, $next_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV0Api->getOrderItemsBuyerInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| An Amazon-defined order identifier, in 3-7-7 format. |
 **next_token** | **string**| A string token returned in the response of your previous request. | [optional]

### Return type

[**\SellingPartnerApi\Model\OrdersV0\GetOrderItemsBuyerInfoResponse**](../Model/OrdersV0/GetOrderItemsBuyerInfoResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[OrdersV0 Model list]](../Model/OrdersV0)
[[README]](../../README.md)

## `getOrderRegulatedInfo()`

```php
getOrderRegulatedInfo($order_id): \SellingPartnerApi\Model\OrdersV0\GetOrderRegulatedInfoResponse
```



Returns regulated information for the order that you specify.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 0.5 | 30 |

The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values then those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

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

$apiInstance = new SellingPartnerApi\Api\OrdersV0Api($config);
$order_id = 'order_id_example'; // string | An orderId is an Amazon-defined order identifier, in 3-7-7 format.

try {
    $result = $apiInstance->getOrderRegulatedInfo($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV0Api->getOrderRegulatedInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| An orderId is an Amazon-defined order identifier, in 3-7-7 format. |

### Return type

[**\SellingPartnerApi\Model\OrdersV0\GetOrderRegulatedInfoResponse**](../Model/OrdersV0/GetOrderRegulatedInfoResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `PendingOrder`, `ApprovedOrder`, `RejectedOrder`

[[Top]](#) [[API list]](../)
[[OrdersV0 Model list]](../Model/OrdersV0)
[[README]](../../README.md)

## `getOrders()`

```php
getOrders($marketplace_ids, $created_after, $created_before, $last_updated_after, $last_updated_before, $order_statuses, $fulfillment_channels, $payment_methods, $buyer_email, $seller_order_id, $max_results_per_page, $easy_ship_shipment_statuses, $electronic_invoice_statuses, $next_token, $amazon_order_ids, $actual_fulfillment_supply_source_id, $is_ispu, $store_chain_store_id, $data_elements): \SellingPartnerApi\Model\OrdersV0\GetOrdersResponse
```



Returns orders created or updated during the time frame indicated by the specified parameters. You can also apply a range of filtering criteria to narrow the list of orders returned. If NextToken is present, that will be used to retrieve the orders instead of other criteria.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 0.0167 | 20 |

The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values then those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

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

$apiInstance = new SellingPartnerApi\Api\OrdersV0Api($config);
$marketplace_ids = array('marketplace_ids_example'); // string[] | A list of MarketplaceId values. Used to select orders that were placed in the specified marketplaces. See the [Selling Partner API Developer Guide](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids) for a complete list of marketplaceId values.
$created_after = 'created_after_example'; // string | A date used for selecting orders created after (or at) a specified time. Only orders placed after the specified time are returned. Either the CreatedAfter parameter or the LastUpdatedAfter parameter is required. Both cannot be empty. The date must be in ISO 8601 format.
$created_before = 'created_before_example'; // string | A date used for selecting orders created before (or at) a specified time. Only orders placed before the specified time are returned. The date must be in ISO 8601 format.
$last_updated_after = 'last_updated_after_example'; // string | A date used for selecting orders that were last updated after (or at) a specified time. An update is defined as any change in order status, including the creation of a new order. Includes updates made by Amazon and by the seller. The date must be in ISO 8601 format.
$last_updated_before = 'last_updated_before_example'; // string | A date used for selecting orders that were last updated before (or at) a specified time. An update is defined as any change in order status, including the creation of a new order. Includes updates made by Amazon and by the seller. The date must be in ISO 8601 format.
$order_statuses = array('order_statuses_example'); // string[] | A list of `OrderStatus` values used to filter the results.
    // **Possible values:**
    // - `PendingAvailability` (This status is available for pre-orders only. The order has been placed, payment has not been authorized, and the release date of the item is in the future.)
    // - `Pending` (The order has been placed but payment has not been authorized.)
    // - `Unshipped` (Payment has been authorized and the order is ready for shipment, but no items in the order have been shipped.)
    // - `PartiallyShipped` (One or more, but not all, items in the order have been shipped.)
    // - `Shipped` (All items in the order have been shipped.)
    // - `InvoiceUnconfirmed` (All items in the order have been shipped. The seller has not yet given confirmation to Amazon that the invoice has been shipped to the buyer.)
    // - `Canceled` (The order has been canceled.)
    // - `Unfulfillable` (The order cannot be fulfilled. This state applies only to Multi-Channel Fulfillment orders.)
$fulfillment_channels = array('fulfillment_channels_example'); // string[] | A list that indicates how an order was fulfilled. Filters the results by fulfillment channel. Possible values: AFN (Fulfillment by Amazon); MFN (Fulfilled by the seller).
$payment_methods = array('payment_methods_example'); // string[] | A list of payment method values. Used to select orders paid using the specified payment methods. Possible values: COD (Cash on delivery); CVS (Convenience store payment); Other (Any payment method other than COD or CVS).
$buyer_email = 'buyer_email_example'; // string | The email address of a buyer. Used to select orders that contain the specified email address.
$seller_order_id = 'seller_order_id_example'; // string | An order identifier that is specified by the seller. Used to select only the orders that match the order identifier. If SellerOrderId is specified, then FulfillmentChannels, OrderStatuses, PaymentMethod, LastUpdatedAfter, LastUpdatedBefore, and BuyerEmail cannot be specified.
$max_results_per_page = 56; // int | A number that indicates the maximum number of orders that can be returned per page. Value must be 1 - 100. Default 100.
$easy_ship_shipment_statuses = array('easy_ship_shipment_statuses_example'); // string[] | A list of `EasyShipShipmentStatus` values. Used to select Easy Ship orders with statuses that match the specified values. If `EasyShipShipmentStatus` is specified, only Amazon Easy Ship orders are returned.
    // **Possible values:**
    // - `PendingSchedule` (The package is awaiting the schedule for pick-up.)
    // - `PendingPickUp` (Amazon has not yet picked up the package from the seller.)
    // - `PendingDropOff` (The seller will deliver the package to the carrier.)
    // - `LabelCanceled` (The seller canceled the pickup.)
    // - `PickedUp` (Amazon has picked up the package from the seller.)
    // - `DroppedOff` (The package is delivered to the carrier by the seller.)
    // - `AtOriginFC` (The packaged is at the origin fulfillment center.)
    // - `AtDestinationFC` (The package is at the destination fulfillment center.)
    // - `Delivered` (The package has been delivered.)
    // - `RejectedByBuyer` (The package has been rejected by the buyer.)
    // - `Undeliverable` (The package cannot be delivered.)
    // - `ReturningToSeller` (The package was not delivered and is being returned to the seller.)
    // - `ReturnedToSeller` (The package was not delivered and was returned to the seller.)
    // - `Lost` (The package is lost.)
    // - `OutForDelivery` (The package is out for delivery.)
    // - `Damaged` (The package was damaged by the carrier.)
$electronic_invoice_statuses = array('electronic_invoice_statuses_example'); // string[] | A list of `ElectronicInvoiceStatus` values. Used to select orders with electronic invoice statuses that match the specified values.
    // **Possible values:**
    // - `NotRequired` (Electronic invoice submission is not required for this order.)
    // - `NotFound` (The electronic invoice was not submitted for this order.)
    // - `Processing` (The electronic invoice is being processed for this order.)
    // - `Errored` (The last submitted electronic invoice was rejected for this order.)
    // - `Accepted` (The last submitted electronic invoice was submitted and accepted.)
$next_token = 'next_token_example'; // string | A string token returned in the response of your previous request.
$amazon_order_ids = array('amazon_order_ids_example'); // string[] | A list of AmazonOrderId values. An AmazonOrderId is an Amazon-defined order identifier, in 3-7-7 format.
$actual_fulfillment_supply_source_id = 'actual_fulfillment_supply_source_id_example'; // string | Denotes the recommended sourceId where the order should be fulfilled from.
$is_ispu = True; // bool | When true, this order is marked to be picked up from a store rather than delivered.
$store_chain_store_id = 'store_chain_store_id_example'; // string | The store chain store identifier. Linked to a specific store in a store chain.
$data_elements = array('data_elements_example'); // string[] | An array of restricted order data elements to retrieve (valid array elements are \"buyerInfo\" and \"shippingAddress\")

try {
    $result = $apiInstance->getOrders($marketplace_ids, $created_after, $created_before, $last_updated_after, $last_updated_before, $order_statuses, $fulfillment_channels, $payment_methods, $buyer_email, $seller_order_id, $max_results_per_page, $easy_ship_shipment_statuses, $electronic_invoice_statuses, $next_token, $amazon_order_ids, $actual_fulfillment_supply_source_id, $is_ispu, $store_chain_store_id, $data_elements);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV0Api->getOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_ids** | [**string[]**](../Model/OrdersV0/string.md)| A list of MarketplaceId values. Used to select orders that were placed in the specified marketplaces. See the [Selling Partner API Developer Guide](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids) for a complete list of marketplaceId values. |
 **created_after** | **string**| A date used for selecting orders created after (or at) a specified time. Only orders placed after the specified time are returned. Either the CreatedAfter parameter or the LastUpdatedAfter parameter is required. Both cannot be empty. The date must be in ISO 8601 format. | [optional]
 **created_before** | **string**| A date used for selecting orders created before (or at) a specified time. Only orders placed before the specified time are returned. The date must be in ISO 8601 format. | [optional]
 **last_updated_after** | **string**| A date used for selecting orders that were last updated after (or at) a specified time. An update is defined as any change in order status, including the creation of a new order. Includes updates made by Amazon and by the seller. The date must be in ISO 8601 format. | [optional]
 **last_updated_before** | **string**| A date used for selecting orders that were last updated before (or at) a specified time. An update is defined as any change in order status, including the creation of a new order. Includes updates made by Amazon and by the seller. The date must be in ISO 8601 format. | [optional]
 **order_statuses** | [**string[]**](../Model/OrdersV0/string.md)| A list of `OrderStatus` values used to filter the results.<br><br>**Possible values:**<br>- `PendingAvailability` (This status is available for pre-orders only. The order has been placed, payment has not been authorized, and the release date of the item is in the future.)<br>- `Pending` (The order has been placed but payment has not been authorized.)<br>- `Unshipped` (Payment has been authorized and the order is ready for shipment, but no items in the order have been shipped.)<br>- `PartiallyShipped` (One or more, but not all, items in the order have been shipped.)<br>- `Shipped` (All items in the order have been shipped.)<br>- `InvoiceUnconfirmed` (All items in the order have been shipped. The seller has not yet given confirmation to Amazon that the invoice has been shipped to the buyer.)<br>- `Canceled` (The order has been canceled.)<br>- `Unfulfillable` (The order cannot be fulfilled. This state applies only to Multi-Channel Fulfillment orders.) | [optional]
 **fulfillment_channels** | [**string[]**](../Model/OrdersV0/string.md)| A list that indicates how an order was fulfilled. Filters the results by fulfillment channel. Possible values: AFN (Fulfillment by Amazon); MFN (Fulfilled by the seller). | [optional]
 **payment_methods** | [**string[]**](../Model/OrdersV0/string.md)| A list of payment method values. Used to select orders paid using the specified payment methods. Possible values: COD (Cash on delivery); CVS (Convenience store payment); Other (Any payment method other than COD or CVS). | [optional]
 **buyer_email** | **string**| The email address of a buyer. Used to select orders that contain the specified email address. | [optional]
 **seller_order_id** | **string**| An order identifier that is specified by the seller. Used to select only the orders that match the order identifier. If SellerOrderId is specified, then FulfillmentChannels, OrderStatuses, PaymentMethod, LastUpdatedAfter, LastUpdatedBefore, and BuyerEmail cannot be specified. | [optional]
 **max_results_per_page** | **int**| A number that indicates the maximum number of orders that can be returned per page. Value must be 1 - 100. Default 100. | [optional]
 **easy_ship_shipment_statuses** | [**string[]**](../Model/OrdersV0/string.md)| A list of `EasyShipShipmentStatus` values. Used to select Easy Ship orders with statuses that match the specified values. If `EasyShipShipmentStatus` is specified, only Amazon Easy Ship orders are returned.<br><br>**Possible values:**<br>- `PendingSchedule` (The package is awaiting the schedule for pick-up.)<br>- `PendingPickUp` (Amazon has not yet picked up the package from the seller.)<br>- `PendingDropOff` (The seller will deliver the package to the carrier.)<br>- `LabelCanceled` (The seller canceled the pickup.)<br>- `PickedUp` (Amazon has picked up the package from the seller.)<br>- `DroppedOff` (The package is delivered to the carrier by the seller.)<br>- `AtOriginFC` (The packaged is at the origin fulfillment center.)<br>- `AtDestinationFC` (The package is at the destination fulfillment center.)<br>- `Delivered` (The package has been delivered.)<br>- `RejectedByBuyer` (The package has been rejected by the buyer.)<br>- `Undeliverable` (The package cannot be delivered.)<br>- `ReturningToSeller` (The package was not delivered and is being returned to the seller.)<br>- `ReturnedToSeller` (The package was not delivered and was returned to the seller.)<br>- `Lost` (The package is lost.)<br>- `OutForDelivery` (The package is out for delivery.)<br>- `Damaged` (The package was damaged by the carrier.) | [optional]
 **electronic_invoice_statuses** | [**string[]**](../Model/OrdersV0/string.md)| A list of `ElectronicInvoiceStatus` values. Used to select orders with electronic invoice statuses that match the specified values.<br><br>**Possible values:**<br>- `NotRequired` (Electronic invoice submission is not required for this order.)<br>- `NotFound` (The electronic invoice was not submitted for this order.)<br>- `Processing` (The electronic invoice is being processed for this order.)<br>- `Errored` (The last submitted electronic invoice was rejected for this order.)<br>- `Accepted` (The last submitted electronic invoice was submitted and accepted.) | [optional]
 **next_token** | **string**| A string token returned in the response of your previous request. | [optional]
 **amazon_order_ids** | [**string[]**](../Model/OrdersV0/string.md)| A list of AmazonOrderId values. An AmazonOrderId is an Amazon-defined order identifier, in 3-7-7 format. | [optional]
 **actual_fulfillment_supply_source_id** | **string**| Denotes the recommended sourceId where the order should be fulfilled from. | [optional]
 **is_ispu** | **bool**| When true, this order is marked to be picked up from a store rather than delivered. | [optional]
 **store_chain_store_id** | **string**| The store chain store identifier. Linked to a specific store in a store chain. | [optional]
 **data_elements** | [**string[]**](../Model/OrdersV0/string.md)| An array of restricted order data elements to retrieve (valid array elements are \"buyerInfo\" and \"shippingAddress\") | [optional]

### Return type

[**\SellingPartnerApi\Model\OrdersV0\GetOrdersResponse**](../Model/OrdersV0/GetOrdersResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[OrdersV0 Model list]](../Model/OrdersV0)
[[README]](../../README.md)

## `updateShipmentStatus()`

```php
updateShipmentStatus($order_id, $payload)
```



Update the shipment status for an order that you specify.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 5 | 15 |

The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values then those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

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

$apiInstance = new SellingPartnerApi\Api\OrdersV0Api($config);
$order_id = 'order_id_example'; // string | An Amazon-defined order identifier, in 3-7-7 format.
$payload = new \SellingPartnerApi\Model\OrdersV0\UpdateShipmentStatusRequest(); // \SellingPartnerApi\Model\OrdersV0\UpdateShipmentStatusRequest | The request body for the updateShipmentStatus operation.

try {
    $apiInstance->updateShipmentStatus($order_id, $payload);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV0Api->updateShipmentStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| An Amazon-defined order identifier, in 3-7-7 format. |
 **payload** | [**\SellingPartnerApi\Model\OrdersV0\UpdateShipmentStatusRequest**](../Model/OrdersV0/UpdateShipmentStatusRequest.md)| The request body for the updateShipmentStatus operation. |

### Return type

void (empty response body)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[OrdersV0 Model list]](../Model/OrdersV0)
[[README]](../../README.md)

## `updateVerificationStatus()`

```php
updateVerificationStatus($order_id, $payload)
```



Updates (approves or rejects) the verification status of an order containing regulated products.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 0.5 | 30 |

The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values then those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

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

$apiInstance = new SellingPartnerApi\Api\OrdersV0Api($config);
$order_id = 'order_id_example'; // string | An orderId is an Amazon-defined order identifier, in 3-7-7 format.
$payload = new \SellingPartnerApi\Model\OrdersV0\UpdateVerificationStatusRequest(); // \SellingPartnerApi\Model\OrdersV0\UpdateVerificationStatusRequest | The request body for the updateVerificationStatus operation.

try {
    $apiInstance->updateVerificationStatus($order_id, $payload);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV0Api->updateVerificationStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| An orderId is an Amazon-defined order identifier, in 3-7-7 format. |
 **payload** | [**\SellingPartnerApi\Model\OrdersV0\UpdateVerificationStatusRequest**](../Model/OrdersV0/UpdateVerificationStatusRequest.md)| The request body for the updateVerificationStatus operation. |

### Return type

void (empty response body)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[OrdersV0 Model list]](../Model/OrdersV0)
[[README]](../../README.md)
