# SellingPartnerApi\VendorDirectFulfillmentShippingV20211228Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**createShippingLabels()**](VendorDirectFulfillmentShippingV20211228Api.md#createShippingLabels) | **POST** /vendor/directFulfillment/shipping/2021-12-28/shippingLabels/{purchaseOrderNumber} | 
[**getCustomerInvoice()**](VendorDirectFulfillmentShippingV20211228Api.md#getCustomerInvoice) | **GET** /vendor/directFulfillment/shipping/2021-12-28/customerInvoices/{purchaseOrderNumber} | 
[**getCustomerInvoices()**](VendorDirectFulfillmentShippingV20211228Api.md#getCustomerInvoices) | **GET** /vendor/directFulfillment/shipping/2021-12-28/customerInvoices | 
[**getPackingSlip()**](VendorDirectFulfillmentShippingV20211228Api.md#getPackingSlip) | **GET** /vendor/directFulfillment/shipping/2021-12-28/packingSlips/{purchaseOrderNumber} | 
[**getPackingSlips()**](VendorDirectFulfillmentShippingV20211228Api.md#getPackingSlips) | **GET** /vendor/directFulfillment/shipping/2021-12-28/packingSlips | 
[**getShippingLabel()**](VendorDirectFulfillmentShippingV20211228Api.md#getShippingLabel) | **GET** /vendor/directFulfillment/shipping/2021-12-28/shippingLabels/{purchaseOrderNumber} | 
[**getShippingLabels()**](VendorDirectFulfillmentShippingV20211228Api.md#getShippingLabels) | **GET** /vendor/directFulfillment/shipping/2021-12-28/shippingLabels | 
[**submitShipmentConfirmations()**](VendorDirectFulfillmentShippingV20211228Api.md#submitShipmentConfirmations) | **POST** /vendor/directFulfillment/shipping/2021-12-28/shipmentConfirmations | 
[**submitShipmentStatusUpdates()**](VendorDirectFulfillmentShippingV20211228Api.md#submitShipmentStatusUpdates) | **POST** /vendor/directFulfillment/shipping/2021-12-28/shipmentStatusUpdates | 
[**submitShippingLabelRequest()**](VendorDirectFulfillmentShippingV20211228Api.md#submitShippingLabelRequest) | **POST** /vendor/directFulfillment/shipping/2021-12-28/shippingLabels | 


## `createShippingLabels()`

```php
createShippingLabels($purchase_order_number, $body): \SellingPartnerApi\Model\VendorDirectFulfillmentShippingV20211228\ShippingLabel
```



Creates shipping labels for a purchase order and returns the labels.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 10 | 10 |

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

$apiInstance = new SellingPartnerApi\Api\VendorDirectFulfillmentShippingV20211228Api($config);
$purchase_order_number = 'purchase_order_number_example'; // string | The purchase order number for which you want to return the shipping labels. It should be the same purchaseOrderNumber as received in the order.
$body = new \SellingPartnerApi\Model\VendorDirectFulfillmentShippingV20211228\CreateShippingLabelsRequest(); // \SellingPartnerApi\Model\VendorDirectFulfillmentShippingV20211228\CreateShippingLabelsRequest

try {
    $result = $apiInstance->createShippingLabels($purchase_order_number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorDirectFulfillmentShippingV20211228Api->createShippingLabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **purchase_order_number** | **string**| The purchase order number for which you want to return the shipping labels. It should be the same purchaseOrderNumber as received in the order. |
 **body** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentShippingV20211228\CreateShippingLabelsRequest**](../Model/VendorDirectFulfillmentShippingV20211228/CreateShippingLabelsRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\VendorDirectFulfillmentShippingV20211228\ShippingLabel**](../Model/VendorDirectFulfillmentShippingV20211228/ShippingLabel.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[VendorDirectFulfillmentShippingV20211228 Model list]](../Model/VendorDirectFulfillmentShippingV20211228)
[[README]](../../README.md)

## `getCustomerInvoice()`

```php
getCustomerInvoice($purchase_order_number): \SellingPartnerApi\Model\VendorDirectFulfillmentShippingV20211228\CustomerInvoice
```



Returns a customer invoice based on the purchaseOrderNumber that you specify.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 10 | 10 |

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

$apiInstance = new SellingPartnerApi\Api\VendorDirectFulfillmentShippingV20211228Api($config);
$purchase_order_number = 'purchase_order_number_example'; // string | Purchase order number of the shipment for which to return the invoice.

try {
    $result = $apiInstance->getCustomerInvoice($purchase_order_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorDirectFulfillmentShippingV20211228Api->getCustomerInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **purchase_order_number** | **string**| Purchase order number of the shipment for which to return the invoice. |

### Return type

[**\SellingPartnerApi\Model\VendorDirectFulfillmentShippingV20211228\CustomerInvoice**](../Model/VendorDirectFulfillmentShippingV20211228/CustomerInvoice.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[VendorDirectFulfillmentShippingV20211228 Model list]](../Model/VendorDirectFulfillmentShippingV20211228)
[[README]](../../README.md)

## `getCustomerInvoices()`

```php
getCustomerInvoices($created_after, $created_before, $ship_from_party_id, $limit, $sort_order, $next_token): \SellingPartnerApi\Model\VendorDirectFulfillmentShippingV20211228\CustomerInvoiceList
```



Returns a list of customer invoices created during a time frame that you specify. You define the time frame using the createdAfter and createdBefore parameters. You must use both of these parameters. The date range to search must be no more than 7 days.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 10 | 10 |

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

$apiInstance = new SellingPartnerApi\Api\VendorDirectFulfillmentShippingV20211228Api($config);
$created_after = 'created_after_example'; // string | Orders that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format.
$created_before = 'created_before_example'; // string | Orders that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format.
$ship_from_party_id = 'ship_from_party_id_example'; // string | The vendor warehouseId for order fulfillment. If not specified, the result will contain orders for all warehouses.
$limit = 56; // int | The limit to the number of records returned
$sort_order = 'sort_order_example'; // string | Sort ASC or DESC by order creation date.
$next_token = 'next_token_example'; // string | Used for pagination when there are more orders than the specified result size limit. The token value is returned in the previous API call.

try {
    $result = $apiInstance->getCustomerInvoices($created_after, $created_before, $ship_from_party_id, $limit, $sort_order, $next_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorDirectFulfillmentShippingV20211228Api->getCustomerInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **created_after** | **string**| Orders that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format. |
 **created_before** | **string**| Orders that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format. |
 **ship_from_party_id** | **string**| The vendor warehouseId for order fulfillment. If not specified, the result will contain orders for all warehouses. | [optional]
 **limit** | **int**| The limit to the number of records returned | [optional]
 **sort_order** | **string**| Sort ASC or DESC by order creation date. | [optional]
 **next_token** | **string**| Used for pagination when there are more orders than the specified result size limit. The token value is returned in the previous API call. | [optional]

### Return type

[**\SellingPartnerApi\Model\VendorDirectFulfillmentShippingV20211228\CustomerInvoiceList**](../Model/VendorDirectFulfillmentShippingV20211228/CustomerInvoiceList.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `payload`

[[Top]](#) [[API list]](../)
[[VendorDirectFulfillmentShippingV20211228 Model list]](../Model/VendorDirectFulfillmentShippingV20211228)
[[README]](../../README.md)

## `getPackingSlip()`

```php
getPackingSlip($purchase_order_number): \SellingPartnerApi\Model\VendorDirectFulfillmentShippingV20211228\PackingSlip
```



Returns a packing slip based on the purchaseOrderNumber that you specify.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 10 | 10 |

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

$apiInstance = new SellingPartnerApi\Api\VendorDirectFulfillmentShippingV20211228Api($config);
$purchase_order_number = 'purchase_order_number_example'; // string | The purchaseOrderNumber for the packing slip you want.

try {
    $result = $apiInstance->getPackingSlip($purchase_order_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorDirectFulfillmentShippingV20211228Api->getPackingSlip: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **purchase_order_number** | **string**| The purchaseOrderNumber for the packing slip you want. |

### Return type

[**\SellingPartnerApi\Model\VendorDirectFulfillmentShippingV20211228\PackingSlip**](../Model/VendorDirectFulfillmentShippingV20211228/PackingSlip.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[VendorDirectFulfillmentShippingV20211228 Model list]](../Model/VendorDirectFulfillmentShippingV20211228)
[[README]](../../README.md)

## `getPackingSlips()`

```php
getPackingSlips($created_after, $created_before, $ship_from_party_id, $limit, $sort_order, $next_token): \SellingPartnerApi\Model\VendorDirectFulfillmentShippingV20211228\PackingSlipList
```



Returns a list of packing slips for the purchase orders that match the criteria specified. Date range to search must not be more than 7 days.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 10 | 10 |

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

$apiInstance = new SellingPartnerApi\Api\VendorDirectFulfillmentShippingV20211228Api($config);
$created_after = 'created_after_example'; // string | Packing slips that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format.
$created_before = 'created_before_example'; // string | Packing slips that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format.
$ship_from_party_id = 'ship_from_party_id_example'; // string | The vendor warehouseId for order fulfillment. If not specified the result will contain orders for all warehouses.
$limit = 56; // int | The limit to the number of records returned
$sort_order = 'ASC'; // string | Sort ASC or DESC by packing slip creation date.
$next_token = 'next_token_example'; // string | Used for pagination when there are more packing slips than the specified result size limit. The token value is returned in the previous API call.

try {
    $result = $apiInstance->getPackingSlips($created_after, $created_before, $ship_from_party_id, $limit, $sort_order, $next_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorDirectFulfillmentShippingV20211228Api->getPackingSlips: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **created_after** | **string**| Packing slips that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format. |
 **created_before** | **string**| Packing slips that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format. |
 **ship_from_party_id** | **string**| The vendor warehouseId for order fulfillment. If not specified the result will contain orders for all warehouses. | [optional]
 **limit** | **int**| The limit to the number of records returned | [optional]
 **sort_order** | **string**| Sort ASC or DESC by packing slip creation date. | [optional] [default to 'ASC']
 **next_token** | **string**| Used for pagination when there are more packing slips than the specified result size limit. The token value is returned in the previous API call. | [optional]

### Return type

[**\SellingPartnerApi\Model\VendorDirectFulfillmentShippingV20211228\PackingSlipList**](../Model/VendorDirectFulfillmentShippingV20211228/PackingSlipList.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[VendorDirectFulfillmentShippingV20211228 Model list]](../Model/VendorDirectFulfillmentShippingV20211228)
[[README]](../../README.md)

## `getShippingLabel()`

```php
getShippingLabel($purchase_order_number): \SellingPartnerApi\Model\VendorDirectFulfillmentShippingV20211228\ShippingLabel
```



Returns a shipping label for the purchaseOrderNumber that you specify.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 10 | 10 |

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

$apiInstance = new SellingPartnerApi\Api\VendorDirectFulfillmentShippingV20211228Api($config);
$purchase_order_number = 'purchase_order_number_example'; // string | The purchase order number for which you want to return the shipping label. It should be the same purchaseOrderNumber as received in the order.

try {
    $result = $apiInstance->getShippingLabel($purchase_order_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorDirectFulfillmentShippingV20211228Api->getShippingLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **purchase_order_number** | **string**| The purchase order number for which you want to return the shipping label. It should be the same purchaseOrderNumber as received in the order. |

### Return type

[**\SellingPartnerApi\Model\VendorDirectFulfillmentShippingV20211228\ShippingLabel**](../Model/VendorDirectFulfillmentShippingV20211228/ShippingLabel.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[VendorDirectFulfillmentShippingV20211228 Model list]](../Model/VendorDirectFulfillmentShippingV20211228)
[[README]](../../README.md)

## `getShippingLabels()`

```php
getShippingLabels($created_after, $created_before, $ship_from_party_id, $limit, $sort_order, $next_token): \SellingPartnerApi\Model\VendorDirectFulfillmentShippingV20211228\ShippingLabelList
```



Returns a list of shipping labels created during the time frame that you specify. You define that time frame using the createdAfter and createdBefore parameters. You must use both of these parameters. The date range to search must not be more than 7 days.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 10 | 10 |

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

$apiInstance = new SellingPartnerApi\Api\VendorDirectFulfillmentShippingV20211228Api($config);
$created_after = 'created_after_example'; // string | Shipping labels that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format.
$created_before = 'created_before_example'; // string | Shipping labels that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format.
$ship_from_party_id = 'ship_from_party_id_example'; // string | The vendor warehouseId for order fulfillment. If not specified, the result will contain orders for all warehouses.
$limit = 56; // int | The limit to the number of records returned.
$sort_order = 'ASC'; // string | Sort ASC or DESC by order creation date.
$next_token = 'next_token_example'; // string | Used for pagination when there are more ship labels than the specified result size limit. The token value is returned in the previous API call.

try {
    $result = $apiInstance->getShippingLabels($created_after, $created_before, $ship_from_party_id, $limit, $sort_order, $next_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorDirectFulfillmentShippingV20211228Api->getShippingLabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **created_after** | **string**| Shipping labels that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format. |
 **created_before** | **string**| Shipping labels that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format. |
 **ship_from_party_id** | **string**| The vendor warehouseId for order fulfillment. If not specified, the result will contain orders for all warehouses. | [optional]
 **limit** | **int**| The limit to the number of records returned. | [optional]
 **sort_order** | **string**| Sort ASC or DESC by order creation date. | [optional] [default to 'ASC']
 **next_token** | **string**| Used for pagination when there are more ship labels than the specified result size limit. The token value is returned in the previous API call. | [optional]

### Return type

[**\SellingPartnerApi\Model\VendorDirectFulfillmentShippingV20211228\ShippingLabelList**](../Model/VendorDirectFulfillmentShippingV20211228/ShippingLabelList.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `pagination`, `shippingLabels`

[[Top]](#) [[API list]](../)
[[VendorDirectFulfillmentShippingV20211228 Model list]](../Model/VendorDirectFulfillmentShippingV20211228)
[[README]](../../README.md)

## `submitShipmentConfirmations()`

```php
submitShipmentConfirmations($body): \SellingPartnerApi\Model\VendorDirectFulfillmentShippingV20211228\TransactionReference
```



Submits one or more shipment confirmations for vendor orders.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 10 | 10 |

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

$apiInstance = new SellingPartnerApi\Api\VendorDirectFulfillmentShippingV20211228Api($config);
$body = new \SellingPartnerApi\Model\VendorDirectFulfillmentShippingV20211228\SubmitShipmentConfirmationsRequest(); // \SellingPartnerApi\Model\VendorDirectFulfillmentShippingV20211228\SubmitShipmentConfirmationsRequest

try {
    $result = $apiInstance->submitShipmentConfirmations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorDirectFulfillmentShippingV20211228Api->submitShipmentConfirmations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentShippingV20211228\SubmitShipmentConfirmationsRequest**](../Model/VendorDirectFulfillmentShippingV20211228/SubmitShipmentConfirmationsRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\VendorDirectFulfillmentShippingV20211228\TransactionReference**](../Model/VendorDirectFulfillmentShippingV20211228/TransactionReference.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[VendorDirectFulfillmentShippingV20211228 Model list]](../Model/VendorDirectFulfillmentShippingV20211228)
[[README]](../../README.md)

## `submitShipmentStatusUpdates()`

```php
submitShipmentStatusUpdates($body): \SellingPartnerApi\Model\VendorDirectFulfillmentShippingV20211228\TransactionReference
```



This operation is only to be used by Vendor-Own-Carrier (VOC) vendors. Calling this API submits a shipment status update for the package that a vendor has shipped. It will provide the Amazon customer visibility on their order, when the package is outside of Amazon Network visibility.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 10 | 10 |

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

$apiInstance = new SellingPartnerApi\Api\VendorDirectFulfillmentShippingV20211228Api($config);
$body = new \SellingPartnerApi\Model\VendorDirectFulfillmentShippingV20211228\SubmitShipmentStatusUpdatesRequest(); // \SellingPartnerApi\Model\VendorDirectFulfillmentShippingV20211228\SubmitShipmentStatusUpdatesRequest

try {
    $result = $apiInstance->submitShipmentStatusUpdates($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorDirectFulfillmentShippingV20211228Api->submitShipmentStatusUpdates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentShippingV20211228\SubmitShipmentStatusUpdatesRequest**](../Model/VendorDirectFulfillmentShippingV20211228/SubmitShipmentStatusUpdatesRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\VendorDirectFulfillmentShippingV20211228\TransactionReference**](../Model/VendorDirectFulfillmentShippingV20211228/TransactionReference.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[VendorDirectFulfillmentShippingV20211228 Model list]](../Model/VendorDirectFulfillmentShippingV20211228)
[[README]](../../README.md)

## `submitShippingLabelRequest()`

```php
submitShippingLabelRequest($body): \SellingPartnerApi\Model\VendorDirectFulfillmentShippingV20211228\TransactionReference
```



Creates a shipping label for a purchase order and returns a transactionId for reference.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 10 | 10 |

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

$apiInstance = new SellingPartnerApi\Api\VendorDirectFulfillmentShippingV20211228Api($config);
$body = new \SellingPartnerApi\Model\VendorDirectFulfillmentShippingV20211228\SubmitShippingLabelsRequest(); // \SellingPartnerApi\Model\VendorDirectFulfillmentShippingV20211228\SubmitShippingLabelsRequest

try {
    $result = $apiInstance->submitShippingLabelRequest($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorDirectFulfillmentShippingV20211228Api->submitShippingLabelRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentShippingV20211228\SubmitShippingLabelsRequest**](../Model/VendorDirectFulfillmentShippingV20211228/SubmitShippingLabelsRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\VendorDirectFulfillmentShippingV20211228\TransactionReference**](../Model/VendorDirectFulfillmentShippingV20211228/TransactionReference.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[VendorDirectFulfillmentShippingV20211228 Model list]](../Model/VendorDirectFulfillmentShippingV20211228)
[[README]](../../README.md)
