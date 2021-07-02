# SellingPartnerApi\VendorDirectFulfillmentShippingApi

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCustomerInvoice()**](VendorDirectFulfillmentShippingApi.md#getCustomerInvoice) | **GET** /vendor/directFulfillment/shipping/v1/customerInvoices/{purchaseOrderNumber} | 
[**getCustomerInvoices()**](VendorDirectFulfillmentShippingApi.md#getCustomerInvoices) | **GET** /vendor/directFulfillment/shipping/v1/customerInvoices | 
[**getPackingSlip()**](VendorDirectFulfillmentShippingApi.md#getPackingSlip) | **GET** /vendor/directFulfillment/shipping/v1/packingSlips/{purchaseOrderNumber} | 
[**getPackingSlips()**](VendorDirectFulfillmentShippingApi.md#getPackingSlips) | **GET** /vendor/directFulfillment/shipping/v1/packingSlips | 
[**getShippingLabel()**](VendorDirectFulfillmentShippingApi.md#getShippingLabel) | **GET** /vendor/directFulfillment/shipping/v1/shippingLabels/{purchaseOrderNumber} | 
[**getShippingLabels()**](VendorDirectFulfillmentShippingApi.md#getShippingLabels) | **GET** /vendor/directFulfillment/shipping/v1/shippingLabels | 
[**submitShipmentConfirmations()**](VendorDirectFulfillmentShippingApi.md#submitShipmentConfirmations) | **POST** /vendor/directFulfillment/shipping/v1/shipmentConfirmations | 
[**submitShipmentStatusUpdates()**](VendorDirectFulfillmentShippingApi.md#submitShipmentStatusUpdates) | **POST** /vendor/directFulfillment/shipping/v1/shipmentStatusUpdates | 
[**submitShippingLabelRequest()**](VendorDirectFulfillmentShippingApi.md#submitShippingLabelRequest) | **POST** /vendor/directFulfillment/shipping/v1/shippingLabels | 


## `getCustomerInvoice()`

```php
getCustomerInvoice($purchase_order_number): \SellingPartnerApi\Model\VendorDirectFulfillmentShipping\GetCustomerInvoiceResponse
```



Returns a customer invoice based on the purchaseOrderNumber that you specify.

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

$apiInstance = new SellingPartnerApi\Api\VendorDirectFulfillmentShippingApi($config);
$purchase_order_number = 'purchase_order_number_example'; // string | Purchase order number of the shipment for which to return the invoice.

try {
    $result = $apiInstance->getCustomerInvoice($purchase_order_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorDirectFulfillmentShippingApi->getCustomerInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **purchase_order_number** | **string**| Purchase order number of the shipment for which to return the invoice. |

### Return type

[**\SellingPartnerApi\Model\VendorDirectFulfillmentShipping\GetCustomerInvoiceResponse**](../Model/VendorDirectFulfillmentShipping/GetCustomerInvoiceResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[VendorDirectFulfillmentShipping Model list]](../Model/VendorDirectFulfillmentShipping)
[[README]](../../README.md)

## `getCustomerInvoices()`

```php
getCustomerInvoices($created_after, $created_before, $ship_from_party_id, $limit, $sort_order, $next_token): \SellingPartnerApi\Model\VendorDirectFulfillmentShipping\GetCustomerInvoicesResponse
```



Returns a list of customer invoices created during a time frame that you specify. You define the  time frame using the createdAfter and createdBefore parameters. You must use both of these parameters. The date range to search must be no more than 7 days.

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

$apiInstance = new SellingPartnerApi\Api\VendorDirectFulfillmentShippingApi($config);
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Orders that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format.
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Orders that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format.
$ship_from_party_id = 'ship_from_party_id_example'; // string | The vendor warehouseId for order fulfillment. If not specified, the result will contain orders for all warehouses.
$limit = 56; // int | The limit to the number of records returned
$sort_order = 'sort_order_example'; // string | Sort ASC or DESC by order creation date.
$next_token = 'next_token_example'; // string | Used for pagination when there are more orders than the specified result size limit. The token value is returned in the previous API call.

try {
    $result = $apiInstance->getCustomerInvoices($created_after, $created_before, $ship_from_party_id, $limit, $sort_order, $next_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorDirectFulfillmentShippingApi->getCustomerInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **created_after** | **\DateTime**| Orders that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format. |
 **created_before** | **\DateTime**| Orders that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format. |
 **ship_from_party_id** | **string**| The vendor warehouseId for order fulfillment. If not specified, the result will contain orders for all warehouses. | [optional]
 **limit** | **int**| The limit to the number of records returned | [optional]
 **sort_order** | **string**| Sort ASC or DESC by order creation date. | [optional]
 **next_token** | **string**| Used for pagination when there are more orders than the specified result size limit. The token value is returned in the previous API call. | [optional]

### Return type

[**\SellingPartnerApi\Model\VendorDirectFulfillmentShipping\GetCustomerInvoicesResponse**](../Model/VendorDirectFulfillmentShipping/GetCustomerInvoicesResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `payload`

[[Top]](#) [[API list]](../)
[[VendorDirectFulfillmentShipping Model list]](../Model/VendorDirectFulfillmentShipping)
[[README]](../../README.md)

## `getPackingSlip()`

```php
getPackingSlip($purchase_order_number): \SellingPartnerApi\Model\VendorDirectFulfillmentShipping\GetPackingSlipResponse
```



Returns a packing slip based on the purchaseOrderNumber that you specify.

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

$apiInstance = new SellingPartnerApi\Api\VendorDirectFulfillmentShippingApi($config);
$purchase_order_number = 'purchase_order_number_example'; // string | The purchaseOrderNumber for the packing slip you want.

try {
    $result = $apiInstance->getPackingSlip($purchase_order_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorDirectFulfillmentShippingApi->getPackingSlip: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **purchase_order_number** | **string**| The purchaseOrderNumber for the packing slip you want. |

### Return type

[**\SellingPartnerApi\Model\VendorDirectFulfillmentShipping\GetPackingSlipResponse**](../Model/VendorDirectFulfillmentShipping/GetPackingSlipResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[VendorDirectFulfillmentShipping Model list]](../Model/VendorDirectFulfillmentShipping)
[[README]](../../README.md)

## `getPackingSlips()`

```php
getPackingSlips($created_after, $created_before, $ship_from_party_id, $limit, $sort_order, $next_token): \SellingPartnerApi\Model\VendorDirectFulfillmentShipping\GetPackingSlipListResponse
```



Returns a list of packing slips for the purchase orders that match the criteria specified. Date range to search must not be more than 7 days.

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

$apiInstance = new SellingPartnerApi\Api\VendorDirectFulfillmentShippingApi($config);
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Packing slips that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format.
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Packing slips that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format.
$ship_from_party_id = 'ship_from_party_id_example'; // string | The vendor warehouseId for order fulfillment. If not specified the result will contain orders for all warehouses.
$limit = 56; // int | The limit to the number of records returned
$sort_order = 'ASC'; // string | Sort ASC or DESC by packing slip creation date.
$next_token = 'next_token_example'; // string | Used for pagination when there are more packing slips than the specified result size limit. The token value is returned in the previous API call.

try {
    $result = $apiInstance->getPackingSlips($created_after, $created_before, $ship_from_party_id, $limit, $sort_order, $next_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorDirectFulfillmentShippingApi->getPackingSlips: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **created_after** | **\DateTime**| Packing slips that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format. |
 **created_before** | **\DateTime**| Packing slips that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format. |
 **ship_from_party_id** | **string**| The vendor warehouseId for order fulfillment. If not specified the result will contain orders for all warehouses. | [optional]
 **limit** | **int**| The limit to the number of records returned | [optional]
 **sort_order** | **string**| Sort ASC or DESC by packing slip creation date. | [optional] [default to &#39;ASC&#39;]
 **next_token** | **string**| Used for pagination when there are more packing slips than the specified result size limit. The token value is returned in the previous API call. | [optional]

### Return type

[**\SellingPartnerApi\Model\VendorDirectFulfillmentShipping\GetPackingSlipListResponse**](../Model/VendorDirectFulfillmentShipping/GetPackingSlipListResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[VendorDirectFulfillmentShipping Model list]](../Model/VendorDirectFulfillmentShipping)
[[README]](../../README.md)

## `getShippingLabel()`

```php
getShippingLabel($purchase_order_number): \SellingPartnerApi\Model\VendorDirectFulfillmentShipping\GetShippingLabelResponse
```



Returns a shipping label for the purchaseOrderNumber that you specify.

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

$apiInstance = new SellingPartnerApi\Api\VendorDirectFulfillmentShippingApi($config);
$purchase_order_number = 'purchase_order_number_example'; // string | The purchase order number for which you want to return the shipping label. It should be the same purchaseOrderNumber as received in the order.

try {
    $result = $apiInstance->getShippingLabel($purchase_order_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorDirectFulfillmentShippingApi->getShippingLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **purchase_order_number** | **string**| The purchase order number for which you want to return the shipping label. It should be the same purchaseOrderNumber as received in the order. |

### Return type

[**\SellingPartnerApi\Model\VendorDirectFulfillmentShipping\GetShippingLabelResponse**](../Model/VendorDirectFulfillmentShipping/GetShippingLabelResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[VendorDirectFulfillmentShipping Model list]](../Model/VendorDirectFulfillmentShipping)
[[README]](../../README.md)

## `getShippingLabels()`

```php
getShippingLabels($created_after, $created_before, $ship_from_party_id, $limit, $sort_order, $next_token): \SellingPartnerApi\Model\VendorDirectFulfillmentShipping\GetShippingLabelListResponse
```



Returns a list of shipping labels created during the time frame that you specify. You define that time frame using the createdAfter and createdBefore parameters. You must use both of these parameters. The date range to search must not be more than 7 days.

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

$apiInstance = new SellingPartnerApi\Api\VendorDirectFulfillmentShippingApi($config);
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Shipping labels that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format.
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Shipping labels that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format.
$ship_from_party_id = 'ship_from_party_id_example'; // string | The vendor warehouseId for order fulfillment. If not specified, the result will contain orders for all warehouses.
$limit = 56; // int | The limit to the number of records returned.
$sort_order = 'ASC'; // string | Sort ASC or DESC by order creation date.
$next_token = 'next_token_example'; // string | Used for pagination when there are more ship labels than the specified result size limit. The token value is returned in the previous API call.

try {
    $result = $apiInstance->getShippingLabels($created_after, $created_before, $ship_from_party_id, $limit, $sort_order, $next_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorDirectFulfillmentShippingApi->getShippingLabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **created_after** | **\DateTime**| Shipping labels that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format. |
 **created_before** | **\DateTime**| Shipping labels that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format. |
 **ship_from_party_id** | **string**| The vendor warehouseId for order fulfillment. If not specified, the result will contain orders for all warehouses. | [optional]
 **limit** | **int**| The limit to the number of records returned. | [optional]
 **sort_order** | **string**| Sort ASC or DESC by order creation date. | [optional] [default to &#39;ASC&#39;]
 **next_token** | **string**| Used for pagination when there are more ship labels than the specified result size limit. The token value is returned in the previous API call. | [optional]

### Return type

[**\SellingPartnerApi\Model\VendorDirectFulfillmentShipping\GetShippingLabelListResponse**](../Model/VendorDirectFulfillmentShipping/GetShippingLabelListResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `payload`

[[Top]](#) [[API list]](../)
[[VendorDirectFulfillmentShipping Model list]](../Model/VendorDirectFulfillmentShipping)
[[README]](../../README.md)

## `submitShipmentConfirmations()`

```php
submitShipmentConfirmations($body): \SellingPartnerApi\Model\VendorDirectFulfillmentShipping\SubmitShipmentConfirmationsResponse
```



Submits one or more shipment confirmations for vendor orders.

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

$apiInstance = new SellingPartnerApi\Api\VendorDirectFulfillmentShippingApi($config);
$body = new \SellingPartnerApi\Model\VendorDirectFulfillmentShipping\SubmitShipmentConfirmationsRequest(); // \SellingPartnerApi\Model\VendorDirectFulfillmentShipping\SubmitShipmentConfirmationsRequest

try {
    $result = $apiInstance->submitShipmentConfirmations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorDirectFulfillmentShippingApi->submitShipmentConfirmations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentShipping\SubmitShipmentConfirmationsRequest**](../Model/VendorDirectFulfillmentShipping/SubmitShipmentConfirmationsRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\VendorDirectFulfillmentShipping\SubmitShipmentConfirmationsResponse**](../Model/VendorDirectFulfillmentShipping/SubmitShipmentConfirmationsResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[VendorDirectFulfillmentShipping Model list]](../Model/VendorDirectFulfillmentShipping)
[[README]](../../README.md)

## `submitShipmentStatusUpdates()`

```php
submitShipmentStatusUpdates($body): \SellingPartnerApi\Model\VendorDirectFulfillmentShipping\SubmitShipmentStatusUpdatesResponse
```



This API call is only to be used by Vendor-Own-Carrier (VOC) vendors. Calling this API will submit a shipment status update for the package that a vendor has shipped. It will provide the Amazon customer visibility on their order, when the package is outside of Amazon Network visibility.

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

$apiInstance = new SellingPartnerApi\Api\VendorDirectFulfillmentShippingApi($config);
$body = new \SellingPartnerApi\Model\VendorDirectFulfillmentShipping\SubmitShipmentStatusUpdatesRequest(); // \SellingPartnerApi\Model\VendorDirectFulfillmentShipping\SubmitShipmentStatusUpdatesRequest

try {
    $result = $apiInstance->submitShipmentStatusUpdates($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorDirectFulfillmentShippingApi->submitShipmentStatusUpdates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentShipping\SubmitShipmentStatusUpdatesRequest**](../Model/VendorDirectFulfillmentShipping/SubmitShipmentStatusUpdatesRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\VendorDirectFulfillmentShipping\SubmitShipmentStatusUpdatesResponse**](../Model/VendorDirectFulfillmentShipping/SubmitShipmentStatusUpdatesResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[VendorDirectFulfillmentShipping Model list]](../Model/VendorDirectFulfillmentShipping)
[[README]](../../README.md)

## `submitShippingLabelRequest()`

```php
submitShippingLabelRequest($body): \SellingPartnerApi\Model\VendorDirectFulfillmentShipping\SubmitShippingLabelsResponse
```



Creates a shipping label for a purchase order and returns a transactionId for reference.

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

$apiInstance = new SellingPartnerApi\Api\VendorDirectFulfillmentShippingApi($config);
$body = new \SellingPartnerApi\Model\VendorDirectFulfillmentShipping\SubmitShippingLabelsRequest(); // \SellingPartnerApi\Model\VendorDirectFulfillmentShipping\SubmitShippingLabelsRequest

try {
    $result = $apiInstance->submitShippingLabelRequest($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorDirectFulfillmentShippingApi->submitShippingLabelRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentShipping\SubmitShippingLabelsRequest**](../Model/VendorDirectFulfillmentShipping/SubmitShippingLabelsRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\VendorDirectFulfillmentShipping\SubmitShippingLabelsResponse**](../Model/VendorDirectFulfillmentShipping/SubmitShippingLabelsResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[VendorDirectFulfillmentShipping Model list]](../Model/VendorDirectFulfillmentShipping)
[[README]](../../README.md)
