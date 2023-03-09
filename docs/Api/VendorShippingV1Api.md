# SellingPartnerApi\VendorShippingV1Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**getShipmentDetails()**](VendorShippingV1Api.md#getShipmentDetails) | **GET** /vendor/shipping/v1/shipments | 
[**getShipmentLabels()**](VendorShippingV1Api.md#getShipmentLabels) | **GET** /vendor/shipping/v1/transportLabels | 
[**submitShipmentConfirmations()**](VendorShippingV1Api.md#submitShipmentConfirmations) | **POST** /vendor/shipping/v1/shipmentConfirmations | 
[**submitShipments()**](VendorShippingV1Api.md#submitShipments) | **POST** /vendor/shipping/v1/shipments | 


## `getShipmentDetails()`

```php
getShipmentDetails($limit, $sort_order, $next_token, $created_after, $created_before, $shipment_confirmed_before, $shipment_confirmed_after, $package_label_created_before, $package_label_created_after, $shipped_before, $shipped_after, $estimated_delivery_before, $estimated_delivery_after, $shipment_delivery_before, $shipment_delivery_after, $requested_pick_up_before, $requested_pick_up_after, $scheduled_pick_up_before, $scheduled_pick_up_after, $current_shipment_status, $vendor_shipment_identifier, $buyer_reference_number, $buyer_warehouse_code, $seller_warehouse_code): \SellingPartnerApi\Model\VendorShippingV1\GetShipmentDetailsResponse
```



Returns the Details about Shipment, Carrier Details,  status of the shipment, container details and other details related to shipment based on the filter parameters value that you specify.

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

$apiInstance = new SellingPartnerApi\Api\VendorShippingV1Api($config);
$limit = 56; // int | The limit to the number of records returned. Default value is 50 records.
$sort_order = 'sort_order_example'; // string | Sort in ascending or descending order by purchase order creation date.
$next_token = 'next_token_example'; // string | Used for pagination when there are more shipments than the specified result size limit.
$created_after = 'created_after_example'; // string | Get Shipment Details that became available after this timestamp will be included in the result. Must be in ISO-8601 date/time format.
$created_before = 'created_before_example'; // string | Get Shipment Details that became available before this timestamp will be included in the result. Must be in ISO-8601 date/time format.
$shipment_confirmed_before = 'shipment_confirmed_before_example'; // string | Get Shipment Details by passing Shipment confirmed create Date Before. Must be in ISO-8601 date/time format.
$shipment_confirmed_after = 'shipment_confirmed_after_example'; // string | Get Shipment Details by passing Shipment confirmed create Date After. Must be in ISO-8601 date/time format.
$package_label_created_before = 'package_label_created_before_example'; // string | Get Shipment Details by passing Package label create Date by buyer. Must be in ISO-8601 date/time format.
$package_label_created_after = 'package_label_created_after_example'; // string | Get Shipment Details by passing Package label create Date After by buyer. Must be in ISO-8601 date/time format.
$shipped_before = 'shipped_before_example'; // string | Get Shipment Details by passing Shipped Date Before. Must be in ISO-8601 date/time format.
$shipped_after = 'shipped_after_example'; // string | Get Shipment Details by passing Shipped Date After. Must be in ISO-8601 date/time format.
$estimated_delivery_before = 'estimated_delivery_before_example'; // string | Get Shipment Details by passing Estimated Delivery Date Before. Must be in ISO-8601 date/time format.
$estimated_delivery_after = 'estimated_delivery_after_example'; // string | Get Shipment Details by passing Estimated Delivery Date Before. Must be in ISO-8601 date/time format.
$shipment_delivery_before = 'shipment_delivery_before_example'; // string | Get Shipment Details by passing Shipment Delivery Date Before. Must be in ISO-8601 date/time format.
$shipment_delivery_after = 'shipment_delivery_after_example'; // string | Get Shipment Details by passing Shipment Delivery Date After. Must be in ISO-8601 date/time format.
$requested_pick_up_before = 'requested_pick_up_before_example'; // string | Get Shipment Details by passing Before Requested pickup date. Must be in ISO-8601 date/time format.
$requested_pick_up_after = 'requested_pick_up_after_example'; // string | Get Shipment Details by passing After Requested pickup date. Must be in ISO-8601 date/time format.
$scheduled_pick_up_before = 'scheduled_pick_up_before_example'; // string | Get Shipment Details by passing Before scheduled pickup date. Must be in ISO-8601 date/time format.
$scheduled_pick_up_after = 'scheduled_pick_up_after_example'; // string | Get Shipment Details by passing After Scheduled pickup date. Must be in ISO-8601 date/time format.
$current_shipment_status = 'current_shipment_status_example'; // string | Get Shipment Details by passing Current shipment status.
$vendor_shipment_identifier = 'vendor_shipment_identifier_example'; // string | Get Shipment Details by passing Vendor Shipment ID
$buyer_reference_number = 'buyer_reference_number_example'; // string | Get Shipment Details by passing buyer Reference ID
$buyer_warehouse_code = 'buyer_warehouse_code_example'; // string | Get Shipping Details based on buyer warehouse code. This value should be same as 'shipToParty.partyId' in the Shipment.
$seller_warehouse_code = 'seller_warehouse_code_example'; // string | Get Shipping Details based on vendor warehouse code. This value should be same as 'sellingParty.partyId' in the Shipment.

try {
    $result = $apiInstance->getShipmentDetails($limit, $sort_order, $next_token, $created_after, $created_before, $shipment_confirmed_before, $shipment_confirmed_after, $package_label_created_before, $package_label_created_after, $shipped_before, $shipped_after, $estimated_delivery_before, $estimated_delivery_after, $shipment_delivery_before, $shipment_delivery_after, $requested_pick_up_before, $requested_pick_up_after, $scheduled_pick_up_before, $scheduled_pick_up_after, $current_shipment_status, $vendor_shipment_identifier, $buyer_reference_number, $buyer_warehouse_code, $seller_warehouse_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorShippingV1Api->getShipmentDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| The limit to the number of records returned. Default value is 50 records. | [optional]
 **sort_order** | **string**| Sort in ascending or descending order by purchase order creation date. | [optional]
 **next_token** | **string**| Used for pagination when there are more shipments than the specified result size limit. | [optional]
 **created_after** | **string**| Get Shipment Details that became available after this timestamp will be included in the result. Must be in ISO-8601 date/time format. | [optional]
 **created_before** | **string**| Get Shipment Details that became available before this timestamp will be included in the result. Must be in ISO-8601 date/time format. | [optional]
 **shipment_confirmed_before** | **string**| Get Shipment Details by passing Shipment confirmed create Date Before. Must be in ISO-8601 date/time format. | [optional]
 **shipment_confirmed_after** | **string**| Get Shipment Details by passing Shipment confirmed create Date After. Must be in ISO-8601 date/time format. | [optional]
 **package_label_created_before** | **string**| Get Shipment Details by passing Package label create Date by buyer. Must be in ISO-8601 date/time format. | [optional]
 **package_label_created_after** | **string**| Get Shipment Details by passing Package label create Date After by buyer. Must be in ISO-8601 date/time format. | [optional]
 **shipped_before** | **string**| Get Shipment Details by passing Shipped Date Before. Must be in ISO-8601 date/time format. | [optional]
 **shipped_after** | **string**| Get Shipment Details by passing Shipped Date After. Must be in ISO-8601 date/time format. | [optional]
 **estimated_delivery_before** | **string**| Get Shipment Details by passing Estimated Delivery Date Before. Must be in ISO-8601 date/time format. | [optional]
 **estimated_delivery_after** | **string**| Get Shipment Details by passing Estimated Delivery Date Before. Must be in ISO-8601 date/time format. | [optional]
 **shipment_delivery_before** | **string**| Get Shipment Details by passing Shipment Delivery Date Before. Must be in ISO-8601 date/time format. | [optional]
 **shipment_delivery_after** | **string**| Get Shipment Details by passing Shipment Delivery Date After. Must be in ISO-8601 date/time format. | [optional]
 **requested_pick_up_before** | **string**| Get Shipment Details by passing Before Requested pickup date. Must be in ISO-8601 date/time format. | [optional]
 **requested_pick_up_after** | **string**| Get Shipment Details by passing After Requested pickup date. Must be in ISO-8601 date/time format. | [optional]
 **scheduled_pick_up_before** | **string**| Get Shipment Details by passing Before scheduled pickup date. Must be in ISO-8601 date/time format. | [optional]
 **scheduled_pick_up_after** | **string**| Get Shipment Details by passing After Scheduled pickup date. Must be in ISO-8601 date/time format. | [optional]
 **current_shipment_status** | **string**| Get Shipment Details by passing Current shipment status. | [optional]
 **vendor_shipment_identifier** | **string**| Get Shipment Details by passing Vendor Shipment ID | [optional]
 **buyer_reference_number** | **string**| Get Shipment Details by passing buyer Reference ID | [optional]
 **buyer_warehouse_code** | **string**| Get Shipping Details based on buyer warehouse code. This value should be same as 'shipToParty.partyId' in the Shipment. | [optional]
 **seller_warehouse_code** | **string**| Get Shipping Details based on vendor warehouse code. This value should be same as 'sellingParty.partyId' in the Shipment. | [optional]

### Return type

[**\SellingPartnerApi\Model\VendorShippingV1\GetShipmentDetailsResponse**](../Model/VendorShippingV1/GetShipmentDetailsResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[VendorShippingV1 Model list]](../Model/VendorShippingV1)
[[README]](../../README.md)

## `getShipmentLabels()`

```php
getShipmentLabels($limit, $sort_order, $next_token, $label_created_after, $labelcreated_before, $buyer_reference_number, $vendor_shipment_identifier, $seller_warehouse_code): \SellingPartnerApi\Model\VendorShippingV1\GetShipmentLabels
```



Returns transport Labels based on the filters that you specify.

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

$apiInstance = new SellingPartnerApi\Api\VendorShippingV1Api($config);
$limit = 56; // int | The limit to the number of records returned. Default value is 50 records.
$sort_order = 'sort_order_example'; // string | Sort in ascending or descending order by transport label creation date.
$next_token = 'next_token_example'; // string | Used for pagination when there are more transport label than the specified result size limit.
$label_created_after = 'label_created_after_example'; // string | transport Labels that became available after this timestamp will be included in the result. Must be in ISO-8601 date/time format.
$labelcreated_before = 'labelcreated_before_example'; // string | transport Labels that became available before this timestamp will be included in the result. Must be in ISO-8601 date/time format.
$buyer_reference_number = 'buyer_reference_number_example'; // string | Get transport labels by passing Buyer Reference Number to retreive the corresponding transport label.
$vendor_shipment_identifier = 'vendor_shipment_identifier_example'; // string | Get transport labels by passing Vendor Shipment ID to retreive the corresponding transport label.
$seller_warehouse_code = 'seller_warehouse_code_example'; // string | Get Shipping labels based Vendor Warehouse code. This value should be same as 'shipFromParty.partyId' in the Shipment.

try {
    $result = $apiInstance->getShipmentLabels($limit, $sort_order, $next_token, $label_created_after, $labelcreated_before, $buyer_reference_number, $vendor_shipment_identifier, $seller_warehouse_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorShippingV1Api->getShipmentLabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| The limit to the number of records returned. Default value is 50 records. | [optional]
 **sort_order** | **string**| Sort in ascending or descending order by transport label creation date. | [optional]
 **next_token** | **string**| Used for pagination when there are more transport label than the specified result size limit. | [optional]
 **label_created_after** | **string**| transport Labels that became available after this timestamp will be included in the result. Must be in ISO-8601 date/time format. | [optional]
 **labelcreated_before** | **string**| transport Labels that became available before this timestamp will be included in the result. Must be in ISO-8601 date/time format. | [optional]
 **buyer_reference_number** | **string**| Get transport labels by passing Buyer Reference Number to retreive the corresponding transport label. | [optional]
 **vendor_shipment_identifier** | **string**| Get transport labels by passing Vendor Shipment ID to retreive the corresponding transport label. | [optional]
 **seller_warehouse_code** | **string**| Get Shipping labels based Vendor Warehouse code. This value should be same as 'shipFromParty.partyId' in the Shipment. | [optional]

### Return type

[**\SellingPartnerApi\Model\VendorShippingV1\GetShipmentLabels**](../Model/VendorShippingV1/GetShipmentLabels.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[VendorShippingV1 Model list]](../Model/VendorShippingV1)
[[README]](../../README.md)

## `submitShipmentConfirmations()`

```php
submitShipmentConfirmations($body): \SellingPartnerApi\Model\VendorShippingV1\SubmitShipmentConfirmationsResponse
```



Submits one or more shipment confirmations for vendor orders.

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

$apiInstance = new SellingPartnerApi\Api\VendorShippingV1Api($config);
$body = new \SellingPartnerApi\Model\VendorShippingV1\SubmitShipmentConfirmationsRequest(); // \SellingPartnerApi\Model\VendorShippingV1\SubmitShipmentConfirmationsRequest

try {
    $result = $apiInstance->submitShipmentConfirmations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorShippingV1Api->submitShipmentConfirmations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\VendorShippingV1\SubmitShipmentConfirmationsRequest**](../Model/VendorShippingV1/SubmitShipmentConfirmationsRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\VendorShippingV1\SubmitShipmentConfirmationsResponse**](../Model/VendorShippingV1/SubmitShipmentConfirmationsResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[VendorShippingV1 Model list]](../Model/VendorShippingV1)
[[README]](../../README.md)

## `submitShipments()`

```php
submitShipments($body): \SellingPartnerApi\Model\VendorShippingV1\SubmitShipmentConfirmationsResponse
```



Submits one or more shipment request for vendor Orders.

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

$apiInstance = new SellingPartnerApi\Api\VendorShippingV1Api($config);
$body = new \SellingPartnerApi\Model\VendorShippingV1\SubmitShipments(); // \SellingPartnerApi\Model\VendorShippingV1\SubmitShipments

try {
    $result = $apiInstance->submitShipments($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorShippingV1Api->submitShipments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\VendorShippingV1\SubmitShipments**](../Model/VendorShippingV1/SubmitShipments.md)|  |

### Return type

[**\SellingPartnerApi\Model\VendorShippingV1\SubmitShipmentConfirmationsResponse**](../Model/VendorShippingV1/SubmitShipmentConfirmationsResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[VendorShippingV1 Model list]](../Model/VendorShippingV1)
[[README]](../../README.md)
