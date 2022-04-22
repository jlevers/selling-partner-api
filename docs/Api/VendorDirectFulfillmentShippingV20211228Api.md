# SellingPartnerApi\VendorDirectFulfillmentShippingV20211228Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**getShippingLabel()**](VendorDirectFulfillmentShippingV20211228Api.md#getShippingLabel) | **GET** /vendor/directFulfillment/shipping/2021-12-28/shippingLabels/{purchaseOrderNumber} | 
[**getShippingLabels()**](VendorDirectFulfillmentShippingV20211228Api.md#getShippingLabels) | **GET** /vendor/directFulfillment/shipping/2021-12-28/shippingLabels | 
[**submitShippingLabelRequest()**](VendorDirectFulfillmentShippingV20211228Api.md#submitShippingLabelRequest) | **POST** /vendor/directFulfillment/shipping/2021-12-28/shippingLabels | 


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
 **sort_order** | **string**| Sort ASC or DESC by order creation date. | [optional] [default to &#39;ASC&#39;]
 **next_token** | **string**| Used for pagination when there are more ship labels than the specified result size limit. The token value is returned in the previous API call. | [optional]

### Return type

[**\SellingPartnerApi\Model\VendorDirectFulfillmentShippingV20211228\ShippingLabelList**](../Model/VendorDirectFulfillmentShippingV20211228/ShippingLabelList.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `pagination`, `shippingLabels`

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
