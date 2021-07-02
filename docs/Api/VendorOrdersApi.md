# SellingPartnerApi\VendorOrdersApi

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPurchaseOrder()**](VendorOrdersApi.md#getPurchaseOrder) | **GET** /vendor/orders/v1/purchaseOrders/{purchaseOrderNumber} | 
[**getPurchaseOrders()**](VendorOrdersApi.md#getPurchaseOrders) | **GET** /vendor/orders/v1/purchaseOrders | 
[**getPurchaseOrdersStatus()**](VendorOrdersApi.md#getPurchaseOrdersStatus) | **GET** /vendor/orders/v1/purchaseOrdersStatus | 
[**submitAcknowledgement()**](VendorOrdersApi.md#submitAcknowledgement) | **POST** /vendor/orders/v1/acknowledgements | 


## `getPurchaseOrder()`

```php
getPurchaseOrder($purchase_order_number): \SellingPartnerApi\Model\VendorOrders\GetPurchaseOrderResponse
```



Returns a purchase order based on the purchaseOrderNumber value that you specify.

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

$apiInstance = new SellingPartnerApi\Api\VendorOrdersApi($config);
$purchase_order_number = 'purchase_order_number_example'; // string | The purchase order identifier for the order that you want. Formatting Notes: 8-character alpha-numeric code.

try {
    $result = $apiInstance->getPurchaseOrder($purchase_order_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorOrdersApi->getPurchaseOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **purchase_order_number** | **string**| The purchase order identifier for the order that you want. Formatting Notes: 8-character alpha-numeric code. |

### Return type

[**\SellingPartnerApi\Model\VendorOrders\GetPurchaseOrderResponse**](../Model/VendorOrders/GetPurchaseOrderResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[VendorOrders Model list]](../Model/VendorOrders)
[[README]](../../README.md)

## `getPurchaseOrders()`

```php
getPurchaseOrders($limit, $created_after, $created_before, $sort_order, $next_token, $include_details, $changed_after, $changed_before, $po_item_state, $is_po_changed, $purchase_order_state, $ordering_vendor_code): \SellingPartnerApi\Model\VendorOrders\GetPurchaseOrdersResponse
```



Returns a list of purchase orders created or changed during the time frame that you specify. You define the time frame using the createdAfter, createdBefore, changedAfter and changedBefore parameters. The date range to search must not be more than 7 days. You can choose to get only the purchase order numbers by setting includeDetails to false. You can then use the getPurchaseOrder operation to receive details for a specific purchase order.

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

$apiInstance = new SellingPartnerApi\Api\VendorOrdersApi($config);
$limit = 56; // int | The limit to the number of records returned. Default value is 100 records.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Purchase orders that became available after this time will be included in the result. Must be in ISO-8601 date/time format.
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Purchase orders that became available before this time will be included in the result. Must be in ISO-8601 date/time format.
$sort_order = 'sort_order_example'; // string | Sort in ascending or descending order by purchase order creation date.
$next_token = 'next_token_example'; // string | Used for pagination when there is more purchase orders than the specified result size limit. The token value is returned in the previous API call
$include_details = 'include_details_example'; // bool | When true, returns purchase orders with complete details. Otherwise, only purchase order numbers are returned. Default value is true.
$changed_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Purchase orders that changed after this timestamp will be included in the result. Must be in ISO-8601 date/time format.
$changed_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Purchase orders that changed before this timestamp will be included in the result. Must be in ISO-8601 date/time format.
$po_item_state = 'po_item_state_example'; // string | Current state of the purchase order item. If this value is Cancelled, this API will return purchase orders which have one or more items cancelled by Amazon with updated item quantity as zero.
$is_po_changed = 'is_po_changed_example'; // bool | When true, returns purchase orders which were modified after the order was placed. Vendors are required to pull the changed purchase order and fulfill the updated purchase order and not the original one. Default value is false.
$purchase_order_state = 'purchase_order_state_example'; // string | Filters purchase orders based on the purchase order state.
$ordering_vendor_code = 'ordering_vendor_code_example'; // string | Filters purchase orders based on the specified ordering vendor code. This value should be same as 'sellingParty.partyId' in the purchase order. If not included in the filter, all purchase orders for all of the vendor codes that exist in the vendor group used to authorize the API client application are returned.

try {
    $result = $apiInstance->getPurchaseOrders($limit, $created_after, $created_before, $sort_order, $next_token, $include_details, $changed_after, $changed_before, $po_item_state, $is_po_changed, $purchase_order_state, $ordering_vendor_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorOrdersApi->getPurchaseOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| The limit to the number of records returned. Default value is 100 records. | [optional]
 **created_after** | **\DateTime**| Purchase orders that became available after this time will be included in the result. Must be in ISO-8601 date/time format. | [optional]
 **created_before** | **\DateTime**| Purchase orders that became available before this time will be included in the result. Must be in ISO-8601 date/time format. | [optional]
 **sort_order** | **string**| Sort in ascending or descending order by purchase order creation date. | [optional]
 **next_token** | **string**| Used for pagination when there is more purchase orders than the specified result size limit. The token value is returned in the previous API call | [optional]
 **include_details** | **bool**| When true, returns purchase orders with complete details. Otherwise, only purchase order numbers are returned. Default value is true. | [optional]
 **changed_after** | **\DateTime**| Purchase orders that changed after this timestamp will be included in the result. Must be in ISO-8601 date/time format. | [optional]
 **changed_before** | **\DateTime**| Purchase orders that changed before this timestamp will be included in the result. Must be in ISO-8601 date/time format. | [optional]
 **po_item_state** | **string**| Current state of the purchase order item. If this value is Cancelled, this API will return purchase orders which have one or more items cancelled by Amazon with updated item quantity as zero. | [optional]
 **is_po_changed** | **bool**| When true, returns purchase orders which were modified after the order was placed. Vendors are required to pull the changed purchase order and fulfill the updated purchase order and not the original one. Default value is false. | [optional]
 **purchase_order_state** | **string**| Filters purchase orders based on the purchase order state. | [optional]
 **ordering_vendor_code** | **string**| Filters purchase orders based on the specified ordering vendor code. This value should be same as &#39;sellingParty.partyId&#39; in the purchase order. If not included in the filter, all purchase orders for all of the vendor codes that exist in the vendor group used to authorize the API client application are returned. | [optional]

### Return type

[**\SellingPartnerApi\Model\VendorOrders\GetPurchaseOrdersResponse**](../Model/VendorOrders/GetPurchaseOrdersResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `payload`

[[Top]](#) [[API list]](../)
[[VendorOrders Model list]](../Model/VendorOrders)
[[README]](../../README.md)

## `getPurchaseOrdersStatus()`

```php
getPurchaseOrdersStatus($limit, $sort_order, $next_token, $created_after, $created_before, $updated_after, $updated_before, $purchase_order_number, $purchase_order_status, $item_confirmation_status, $ordering_vendor_code, $ship_to_party_id): \SellingPartnerApi\Model\VendorOrders\GetPurchaseOrdersStatusResponse
```



Returns purchase order statuses based on the filters that you specify. Date range to search must not be more than 7 days. You can return a list of purchase order statuses using the available filters, or a single purchase order status by providing the purchase order number.

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

$apiInstance = new SellingPartnerApi\Api\VendorOrdersApi($config);
$limit = 56; // int | The limit to the number of records returned. Default value is 100 records.
$sort_order = 'sort_order_example'; // string | Sort in ascending or descending order by purchase order creation date.
$next_token = 'next_token_example'; // string | Used for pagination when there are more purchase orders than the specified result size limit.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Purchase orders that became available after this timestamp will be included in the result. Must be in ISO-8601 date/time format.
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Purchase orders that became available before this timestamp will be included in the result. Must be in ISO-8601 date/time format.
$updated_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Purchase orders for which the last purchase order update happened after this timestamp will be included in the result. Must be in ISO-8601 date/time format.
$updated_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Purchase orders for which the last purchase order update happened before this timestamp will be included in the result. Must be in ISO-8601 date/time format.
$purchase_order_number = 'purchase_order_number_example'; // string | Provides purchase order status for the specified purchase order number.
$purchase_order_status = 'purchase_order_status_example'; // string | Filters purchase orders based on the specified purchase order status. If not included in filter, this will return purchase orders for all statuses.
$item_confirmation_status = 'item_confirmation_status_example'; // string | Filters purchase orders based on the specified purchase order item status. If not included in filter, purchase orders for all statuses are included.
$ordering_vendor_code = 'ordering_vendor_code_example'; // string | Filters purchase orders based on the specified ordering vendor code. This value should be same as 'sellingParty.partyId' in the purchase order. If not included in filter, all purchase orders for all the vendor codes that exist in the vendor group used to authorize API client application are returned.
$ship_to_party_id = 'ship_to_party_id_example'; // string | Filters purchase orders for a specific buyer's Fulfillment Center/warehouse by providing ship to location id here. This value should be same as 'shipToParty.partyId' in the purchase order. If not included in filter, this will return purchase orders for all the buyer's warehouses used for vendor group purchase orders.

try {
    $result = $apiInstance->getPurchaseOrdersStatus($limit, $sort_order, $next_token, $created_after, $created_before, $updated_after, $updated_before, $purchase_order_number, $purchase_order_status, $item_confirmation_status, $ordering_vendor_code, $ship_to_party_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorOrdersApi->getPurchaseOrdersStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| The limit to the number of records returned. Default value is 100 records. | [optional]
 **sort_order** | **string**| Sort in ascending or descending order by purchase order creation date. | [optional]
 **next_token** | **string**| Used for pagination when there are more purchase orders than the specified result size limit. | [optional]
 **created_after** | **\DateTime**| Purchase orders that became available after this timestamp will be included in the result. Must be in ISO-8601 date/time format. | [optional]
 **created_before** | **\DateTime**| Purchase orders that became available before this timestamp will be included in the result. Must be in ISO-8601 date/time format. | [optional]
 **updated_after** | **\DateTime**| Purchase orders for which the last purchase order update happened after this timestamp will be included in the result. Must be in ISO-8601 date/time format. | [optional]
 **updated_before** | **\DateTime**| Purchase orders for which the last purchase order update happened before this timestamp will be included in the result. Must be in ISO-8601 date/time format. | [optional]
 **purchase_order_number** | **string**| Provides purchase order status for the specified purchase order number. | [optional]
 **purchase_order_status** | **string**| Filters purchase orders based on the specified purchase order status. If not included in filter, this will return purchase orders for all statuses. | [optional]
 **item_confirmation_status** | **string**| Filters purchase orders based on the specified purchase order item status. If not included in filter, purchase orders for all statuses are included. | [optional]
 **ordering_vendor_code** | **string**| Filters purchase orders based on the specified ordering vendor code. This value should be same as &#39;sellingParty.partyId&#39; in the purchase order. If not included in filter, all purchase orders for all the vendor codes that exist in the vendor group used to authorize API client application are returned. | [optional]
 **ship_to_party_id** | **string**| Filters purchase orders for a specific buyer&#39;s Fulfillment Center/warehouse by providing ship to location id here. This value should be same as &#39;shipToParty.partyId&#39; in the purchase order. If not included in filter, this will return purchase orders for all the buyer&#39;s warehouses used for vendor group purchase orders. | [optional]

### Return type

[**\SellingPartnerApi\Model\VendorOrders\GetPurchaseOrdersStatusResponse**](../Model/VendorOrders/GetPurchaseOrdersStatusResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[VendorOrders Model list]](../Model/VendorOrders)
[[README]](../../README.md)

## `submitAcknowledgement()`

```php
submitAcknowledgement($body): \SellingPartnerApi\Model\VendorOrders\SubmitAcknowledgementResponse
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

$apiInstance = new SellingPartnerApi\Api\VendorOrdersApi($config);
$body = new \SellingPartnerApi\Model\VendorOrders\SubmitAcknowledgementRequest(); // \SellingPartnerApi\Model\VendorOrders\SubmitAcknowledgementRequest

try {
    $result = $apiInstance->submitAcknowledgement($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorOrdersApi->submitAcknowledgement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\VendorOrders\SubmitAcknowledgementRequest**](../Model/VendorOrders/SubmitAcknowledgementRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\VendorOrders\SubmitAcknowledgementResponse**](../Model/VendorOrders/SubmitAcknowledgementResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[VendorOrders Model list]](../Model/VendorOrders)
[[README]](../../README.md)
