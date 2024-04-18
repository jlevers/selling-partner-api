# SellingPartnerApi\VendorOrdersV1Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPurchaseOrder()**](VendorOrdersV1Api.md#getPurchaseOrder) | **GET** /vendor/orders/v1/purchaseOrders/{purchaseOrderNumber} | 
[**getPurchaseOrders()**](VendorOrdersV1Api.md#getPurchaseOrders) | **GET** /vendor/orders/v1/purchaseOrders | 
[**getPurchaseOrdersStatus()**](VendorOrdersV1Api.md#getPurchaseOrdersStatus) | **GET** /vendor/orders/v1/purchaseOrdersStatus | 
[**submitAcknowledgement()**](VendorOrdersV1Api.md#submitAcknowledgement) | **POST** /vendor/orders/v1/acknowledgements | 


## `getPurchaseOrder()`

```php
getPurchaseOrder($purchase_order_number): \SellingPartnerApi\Model\VendorOrdersV1\GetPurchaseOrderResponse
```



Returns a purchase order based on the purchaseOrderNumber value that you specify.

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

$apiInstance = new SellingPartnerApi\Api\VendorOrdersV1Api($config);
$purchase_order_number = 'purchase_order_number_example'; // string | The purchase order identifier for the order that you want. Formatting Notes: 8-character alpha-numeric code.

try {
    $result = $apiInstance->getPurchaseOrder($purchase_order_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorOrdersV1Api->getPurchaseOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **purchase_order_number** | **string**| The purchase order identifier for the order that you want. Formatting Notes: 8-character alpha-numeric code. |

### Return type

[**\SellingPartnerApi\Model\VendorOrdersV1\GetPurchaseOrderResponse**](../Model/VendorOrdersV1/GetPurchaseOrderResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[VendorOrdersV1 Model list]](../Model/VendorOrdersV1)
[[README]](../../README.md)

## `getPurchaseOrders()`

```php
getPurchaseOrders($limit, $created_after, $created_before, $sort_order, $next_token, $include_details, $changed_after, $changed_before, $po_item_state, $is_po_changed, $purchase_order_state, $ordering_vendor_code): \SellingPartnerApi\Model\VendorOrdersV1\GetPurchaseOrdersResponse
```



Returns a list of purchase orders created or changed during the time frame that you specify. You define the time frame using the createdAfter, createdBefore, changedAfter and changedBefore parameters. The date range to search must not be more than 7 days. You can choose to get only the purchase order numbers by setting includeDetails to false. You can then use the getPurchaseOrder operation to receive details for a specific purchase order.

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

$apiInstance = new SellingPartnerApi\Api\VendorOrdersV1Api($config);
$limit = 56; // int | The limit to the number of records returned. Default value is 100 records.
$created_after = 'created_after_example'; // string | Purchase orders that became available after this time will be included in the result. Must be in ISO-8601 date/time format.
$created_before = 'created_before_example'; // string | Purchase orders that became available before this time will be included in the result. Must be in ISO-8601 date/time format.
$sort_order = 'sort_order_example'; // string | Sort in ascending or descending order by purchase order creation date.
$next_token = 'next_token_example'; // string | Used for pagination when there is more purchase orders than the specified result size limit. The token value is returned in the previous API call
$include_details = 'include_details_example'; // bool | When true, returns purchase orders with complete details. Otherwise, only purchase order numbers are returned. Default value is true.
$changed_after = 'changed_after_example'; // string | Purchase orders that changed after this timestamp will be included in the result. Must be in ISO-8601 date/time format.
$changed_before = 'changed_before_example'; // string | Purchase orders that changed before this timestamp will be included in the result. Must be in ISO-8601 date/time format.
$po_item_state = 'po_item_state_example'; // string | Current state of the purchase order item. If this value is Cancelled, this API will return purchase orders which have one or more items cancelled by Amazon with updated item quantity as zero.
$is_po_changed = 'is_po_changed_example'; // bool | When true, returns purchase orders which were modified after the order was placed. Vendors are required to pull the changed purchase order and fulfill the updated purchase order and not the original one. Default value is false.
$purchase_order_state = 'purchase_order_state_example'; // string | Filters purchase orders based on the purchase order state.
$ordering_vendor_code = 'ordering_vendor_code_example'; // string | Filters purchase orders based on the specified ordering vendor code. This value should be same as 'sellingParty.partyId' in the purchase order. If not included in the filter, all purchase orders for all of the vendor codes that exist in the vendor group used to authorize the API client application are returned.

try {
    $result = $apiInstance->getPurchaseOrders($limit, $created_after, $created_before, $sort_order, $next_token, $include_details, $changed_after, $changed_before, $po_item_state, $is_po_changed, $purchase_order_state, $ordering_vendor_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorOrdersV1Api->getPurchaseOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| The limit to the number of records returned. Default value is 100 records. | [optional]
 **created_after** | **string**| Purchase orders that became available after this time will be included in the result. Must be in ISO-8601 date/time format. | [optional]
 **created_before** | **string**| Purchase orders that became available before this time will be included in the result. Must be in ISO-8601 date/time format. | [optional]
 **sort_order** | **string**| Sort in ascending or descending order by purchase order creation date. | [optional]
 **next_token** | **string**| Used for pagination when there is more purchase orders than the specified result size limit. The token value is returned in the previous API call | [optional]
 **include_details** | **bool**| When true, returns purchase orders with complete details. Otherwise, only purchase order numbers are returned. Default value is true. | [optional]
 **changed_after** | **string**| Purchase orders that changed after this timestamp will be included in the result. Must be in ISO-8601 date/time format. | [optional]
 **changed_before** | **string**| Purchase orders that changed before this timestamp will be included in the result. Must be in ISO-8601 date/time format. | [optional]
 **po_item_state** | **string**| Current state of the purchase order item. If this value is Cancelled, this API will return purchase orders which have one or more items cancelled by Amazon with updated item quantity as zero. | [optional]
 **is_po_changed** | **bool**| When true, returns purchase orders which were modified after the order was placed. Vendors are required to pull the changed purchase order and fulfill the updated purchase order and not the original one. Default value is false. | [optional]
 **purchase_order_state** | **string**| Filters purchase orders based on the purchase order state. | [optional]
 **ordering_vendor_code** | **string**| Filters purchase orders based on the specified ordering vendor code. This value should be same as 'sellingParty.partyId' in the purchase order. If not included in the filter, all purchase orders for all of the vendor codes that exist in the vendor group used to authorize the API client application are returned. | [optional]

### Return type

[**\SellingPartnerApi\Model\VendorOrdersV1\GetPurchaseOrdersResponse**](../Model/VendorOrdersV1/GetPurchaseOrdersResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `payload`

[[Top]](#) [[API list]](../)
[[VendorOrdersV1 Model list]](../Model/VendorOrdersV1)
[[README]](../../README.md)

## `getPurchaseOrdersStatus()`

```php
getPurchaseOrdersStatus($limit, $sort_order, $next_token, $created_after, $created_before, $updated_after, $updated_before, $purchase_order_number, $purchase_order_status, $item_confirmation_status, $item_receive_status, $ordering_vendor_code, $ship_to_party_id): \SellingPartnerApi\Model\VendorOrdersV1\GetPurchaseOrdersStatusResponse
```



Returns purchase order statuses based on the filters that you specify. Date range to search must not be more than 7 days. You can return a list of purchase order statuses using the available filters, or a single purchase order status by providing the purchase order number.

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

$apiInstance = new SellingPartnerApi\Api\VendorOrdersV1Api($config);
$limit = 56; // int | The limit to the number of records returned. Default value is 100 records.
$sort_order = 'sort_order_example'; // string | Sort in ascending or descending order by purchase order creation date.
$next_token = 'next_token_example'; // string | Used for pagination when there are more purchase orders than the specified result size limit.
$created_after = 'created_after_example'; // string | Purchase orders that became available after this timestamp will be included in the result. Must be in ISO-8601 date/time format.
$created_before = 'created_before_example'; // string | Purchase orders that became available before this timestamp will be included in the result. Must be in ISO-8601 date/time format.
$updated_after = 'updated_after_example'; // string | Purchase orders for which the last purchase order update happened after this timestamp will be included in the result. Must be in ISO-8601 date/time format.
$updated_before = 'updated_before_example'; // string | Purchase orders for which the last purchase order update happened before this timestamp will be included in the result. Must be in ISO-8601 date/time format.
$purchase_order_number = 'purchase_order_number_example'; // string | Provides purchase order status for the specified purchase order number.
$purchase_order_status = 'purchase_order_status_example'; // string | Filters purchase orders based on the specified purchase order status. If not included in filter, this will return purchase orders for all statuses.
$item_confirmation_status = 'item_confirmation_status_example'; // string | Filters purchase orders based on their item confirmation status. If the item confirmation status is not included in the filter, purchase orders for all confirmation statuses are included.
$item_receive_status = 'item_receive_status_example'; // string | Filters purchase orders based on the purchase order's item receive status. If the item receive status is not included in the filter, purchase orders for all receive statuses are included.
$ordering_vendor_code = 'ordering_vendor_code_example'; // string | Filters purchase orders based on the specified ordering vendor code. This value should be same as 'sellingParty.partyId' in the purchase order. If not included in filter, all purchase orders for all the vendor codes that exist in the vendor group used to authorize API client application are returned.
$ship_to_party_id = 'ship_to_party_id_example'; // string | Filters purchase orders for a specific buyer's Fulfillment Center/warehouse by providing ship to location id here. This value should be same as 'shipToParty.partyId' in the purchase order. If not included in filter, this will return purchase orders for all the buyer's warehouses used for vendor group purchase orders.

try {
    $result = $apiInstance->getPurchaseOrdersStatus($limit, $sort_order, $next_token, $created_after, $created_before, $updated_after, $updated_before, $purchase_order_number, $purchase_order_status, $item_confirmation_status, $item_receive_status, $ordering_vendor_code, $ship_to_party_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorOrdersV1Api->getPurchaseOrdersStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| The limit to the number of records returned. Default value is 100 records. | [optional]
 **sort_order** | **string**| Sort in ascending or descending order by purchase order creation date. | [optional]
 **next_token** | **string**| Used for pagination when there are more purchase orders than the specified result size limit. | [optional]
 **created_after** | **string**| Purchase orders that became available after this timestamp will be included in the result. Must be in ISO-8601 date/time format. | [optional]
 **created_before** | **string**| Purchase orders that became available before this timestamp will be included in the result. Must be in ISO-8601 date/time format. | [optional]
 **updated_after** | **string**| Purchase orders for which the last purchase order update happened after this timestamp will be included in the result. Must be in ISO-8601 date/time format. | [optional]
 **updated_before** | **string**| Purchase orders for which the last purchase order update happened before this timestamp will be included in the result. Must be in ISO-8601 date/time format. | [optional]
 **purchase_order_number** | **string**| Provides purchase order status for the specified purchase order number. | [optional]
 **purchase_order_status** | **string**| Filters purchase orders based on the specified purchase order status. If not included in filter, this will return purchase orders for all statuses. | [optional]
 **item_confirmation_status** | **string**| Filters purchase orders based on their item confirmation status. If the item confirmation status is not included in the filter, purchase orders for all confirmation statuses are included. | [optional]
 **item_receive_status** | **string**| Filters purchase orders based on the purchase order's item receive status. If the item receive status is not included in the filter, purchase orders for all receive statuses are included. | [optional]
 **ordering_vendor_code** | **string**| Filters purchase orders based on the specified ordering vendor code. This value should be same as 'sellingParty.partyId' in the purchase order. If not included in filter, all purchase orders for all the vendor codes that exist in the vendor group used to authorize API client application are returned. | [optional]
 **ship_to_party_id** | **string**| Filters purchase orders for a specific buyer's Fulfillment Center/warehouse by providing ship to location id here. This value should be same as 'shipToParty.partyId' in the purchase order. If not included in filter, this will return purchase orders for all the buyer's warehouses used for vendor group purchase orders. | [optional]

### Return type

[**\SellingPartnerApi\Model\VendorOrdersV1\GetPurchaseOrdersStatusResponse**](../Model/VendorOrdersV1/GetPurchaseOrdersStatusResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[VendorOrdersV1 Model list]](../Model/VendorOrdersV1)
[[README]](../../README.md)

## `submitAcknowledgement()`

```php
submitAcknowledgement($body): \SellingPartnerApi\Model\VendorOrdersV1\SubmitAcknowledgementResponse
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

$apiInstance = new SellingPartnerApi\Api\VendorOrdersV1Api($config);
$body = new \SellingPartnerApi\Model\VendorOrdersV1\SubmitAcknowledgementRequest(); // \SellingPartnerApi\Model\VendorOrdersV1\SubmitAcknowledgementRequest

try {
    $result = $apiInstance->submitAcknowledgement($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorOrdersV1Api->submitAcknowledgement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\VendorOrdersV1\SubmitAcknowledgementRequest**](../Model/VendorOrdersV1/SubmitAcknowledgementRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\VendorOrdersV1\SubmitAcknowledgementResponse**](../Model/VendorOrdersV1/SubmitAcknowledgementResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[VendorOrdersV1 Model list]](../Model/VendorOrdersV1)
[[README]](../../README.md)
