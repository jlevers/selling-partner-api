# SellingPartnerApi\ShippingV2Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelShipment()**](ShippingV2Api.md#cancelShipment) | **PUT** /shipping/v2/shipments/{shipmentId}/cancel | 
[**directPurchaseShipment()**](ShippingV2Api.md#directPurchaseShipment) | **POST** /shipping/v2/shipments/directPurchase | 
[**getAdditionalInputs()**](ShippingV2Api.md#getAdditionalInputs) | **GET** /shipping/v2/shipments/additionalInputs/schema | 
[**getRates()**](ShippingV2Api.md#getRates) | **POST** /shipping/v2/shipments/rates | 
[**getShipmentDocuments()**](ShippingV2Api.md#getShipmentDocuments) | **GET** /shipping/v2/shipments/{shipmentId}/documents | 
[**getTracking()**](ShippingV2Api.md#getTracking) | **GET** /shipping/v2/tracking | 
[**purchaseShipment()**](ShippingV2Api.md#purchaseShipment) | **POST** /shipping/v2/shipments | 


## `cancelShipment()`

```php
cancelShipment($shipment_id, $x_amzn_shipping_business_id): \SellingPartnerApi\Model\ShippingV2\CancelShipmentResponse
```



Cancels a purchased shipment. Returns an empty object if the shipment is successfully cancelled.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 80 | 100 |

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

$apiInstance = new SellingPartnerApi\Api\ShippingV2Api($config);
$shipment_id = 'shipment_id_example'; // string | The shipment identifier originally returned by the purchaseShipment operation.
$x_amzn_shipping_business_id = 'x_amzn_shipping_business_id_example'; // string | Amazon shipping business to assume for this request. The default is AmazonShipping_UK.

try {
    $result = $apiInstance->cancelShipment($shipment_id, $x_amzn_shipping_business_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingV2Api->cancelShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| The shipment identifier originally returned by the purchaseShipment operation. |
 **x_amzn_shipping_business_id** | **string**| Amazon shipping business to assume for this request. The default is AmazonShipping_UK. | [optional]

### Return type

[**\SellingPartnerApi\Model\ShippingV2\CancelShipmentResponse**](../Model/ShippingV2/CancelShipmentResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ShippingV2 Model list]](../Model/ShippingV2)
[[README]](../../README.md)

## `directPurchaseShipment()`

```php
directPurchaseShipment($body, $x_amzn_idempotency_key, $locale, $x_amzn_shipping_business_id): \SellingPartnerApi\Model\ShippingV2\DirectPurchaseResponse
```



Purchases the shipping service for a shipment using the best fit service offering. Returns purchase related details and documents.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 80 | 100 |

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

$apiInstance = new SellingPartnerApi\Api\ShippingV2Api($config);
$body = new \SellingPartnerApi\Model\ShippingV2\DirectPurchaseRequest(); // \SellingPartnerApi\Model\ShippingV2\DirectPurchaseRequest
$x_amzn_idempotency_key = 'x_amzn_idempotency_key_example'; // string | A unique value which the server uses to recognize subsequent retries of the same request.
$locale = 'locale_example'; // string | The IETF Language Tag. Note that this only supports the primary language subtag with one secondary language subtag (i.e. en-US, fr-CA).
    // The secondary language subtag is almost always a regional designation.
    // This does not support additional subtags beyond the primary and secondary language subtags.
$x_amzn_shipping_business_id = 'x_amzn_shipping_business_id_example'; // string | Amazon shipping business to assume for this request. The default is AmazonShipping_UK.

try {
    $result = $apiInstance->directPurchaseShipment($body, $x_amzn_idempotency_key, $locale, $x_amzn_shipping_business_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingV2Api->directPurchaseShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\ShippingV2\DirectPurchaseRequest**](../Model/ShippingV2/DirectPurchaseRequest.md)|  |
 **x_amzn_idempotency_key** | **string**| A unique value which the server uses to recognize subsequent retries of the same request. | [optional]
 **locale** | **string**| The IETF Language Tag. Note that this only supports the primary language subtag with one secondary language subtag (i.e. en-US, fr-CA).<br>The secondary language subtag is almost always a regional designation.<br>This does not support additional subtags beyond the primary and secondary language subtags.<br> | [optional]
 **x_amzn_shipping_business_id** | **string**| Amazon shipping business to assume for this request. The default is AmazonShipping_UK. | [optional]

### Return type

[**\SellingPartnerApi\Model\ShippingV2\DirectPurchaseResponse**](../Model/ShippingV2/DirectPurchaseResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ShippingV2 Model list]](../Model/ShippingV2)
[[README]](../../README.md)

## `getAdditionalInputs()`

```php
getAdditionalInputs($request_token, $rate_id, $x_amzn_shipping_business_id): \SellingPartnerApi\Model\ShippingV2\GetAdditionalInputsResponse
```



Returns the JSON schema to use for providing additional inputs when needed to purchase a shipping offering. Call the getAdditionalInputs operation when the response to a previous call to the getRates operation indicates that additional inputs are required for the rate (shipping offering) that you want to purchase.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 80 | 100 |

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

$apiInstance = new SellingPartnerApi\Api\ShippingV2Api($config);
$request_token = 'request_token_example'; // string | The request token returned in the response to the getRates operation.
$rate_id = 'rate_id_example'; // string | The rate identifier for the shipping offering (rate) returned in the response to the getRates operation.
$x_amzn_shipping_business_id = 'x_amzn_shipping_business_id_example'; // string | Amazon shipping business to assume for this request. The default is AmazonShipping_UK.

try {
    $result = $apiInstance->getAdditionalInputs($request_token, $rate_id, $x_amzn_shipping_business_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingV2Api->getAdditionalInputs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_token** | **string**| The request token returned in the response to the getRates operation. |
 **rate_id** | **string**| The rate identifier for the shipping offering (rate) returned in the response to the getRates operation. |
 **x_amzn_shipping_business_id** | **string**| Amazon shipping business to assume for this request. The default is AmazonShipping_UK. | [optional]

### Return type

[**\SellingPartnerApi\Model\ShippingV2\GetAdditionalInputsResponse**](../Model/ShippingV2/GetAdditionalInputsResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ShippingV2 Model list]](../Model/ShippingV2)
[[README]](../../README.md)

## `getRates()`

```php
getRates($body, $x_amzn_shipping_business_id): \SellingPartnerApi\Model\ShippingV2\GetRatesResponse
```



Returns the available shipping service offerings.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 80 | 100 |

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

$apiInstance = new SellingPartnerApi\Api\ShippingV2Api($config);
$body = new \SellingPartnerApi\Model\ShippingV2\GetRatesRequest(); // \SellingPartnerApi\Model\ShippingV2\GetRatesRequest
$x_amzn_shipping_business_id = 'x_amzn_shipping_business_id_example'; // string | Amazon shipping business to assume for this request. The default is AmazonShipping_UK.

try {
    $result = $apiInstance->getRates($body, $x_amzn_shipping_business_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingV2Api->getRates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\ShippingV2\GetRatesRequest**](../Model/ShippingV2/GetRatesRequest.md)|  |
 **x_amzn_shipping_business_id** | **string**| Amazon shipping business to assume for this request. The default is AmazonShipping_UK. | [optional]

### Return type

[**\SellingPartnerApi\Model\ShippingV2\GetRatesResponse**](../Model/ShippingV2/GetRatesResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ShippingV2 Model list]](../Model/ShippingV2)
[[README]](../../README.md)

## `getShipmentDocuments()`

```php
getShipmentDocuments($shipment_id, $package_client_reference_id, $format, $dpi, $x_amzn_shipping_business_id): \SellingPartnerApi\Model\ShippingV2\GetShipmentDocumentsResponse
```



Returns the shipping documents associated with a package in a shipment.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 80 | 100 |

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

$apiInstance = new SellingPartnerApi\Api\ShippingV2Api($config);
$shipment_id = 'shipment_id_example'; // string | The shipment identifier originally returned by the purchaseShipment operation.
$package_client_reference_id = 'package_client_reference_id_example'; // string | The package client reference identifier originally provided in the request body parameter for the getRates operation.
$format = 'format_example'; // string | The file format of the document. Must be one of the supported formats returned by the getRates operation.
$dpi = 3.4; // float | The resolution of the document (for example, 300 means 300 dots per inch). Must be one of the supported resolutions returned in the response to the getRates operation.
$x_amzn_shipping_business_id = 'x_amzn_shipping_business_id_example'; // string | Amazon shipping business to assume for this request. The default is AmazonShipping_UK.

try {
    $result = $apiInstance->getShipmentDocuments($shipment_id, $package_client_reference_id, $format, $dpi, $x_amzn_shipping_business_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingV2Api->getShipmentDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| The shipment identifier originally returned by the purchaseShipment operation. |
 **package_client_reference_id** | **string**| The package client reference identifier originally provided in the request body parameter for the getRates operation. |
 **format** | **string**| The file format of the document. Must be one of the supported formats returned by the getRates operation. | [optional]
 **dpi** | **float**| The resolution of the document (for example, 300 means 300 dots per inch). Must be one of the supported resolutions returned in the response to the getRates operation. | [optional]
 **x_amzn_shipping_business_id** | **string**| Amazon shipping business to assume for this request. The default is AmazonShipping_UK. | [optional]

### Return type

[**\SellingPartnerApi\Model\ShippingV2\GetShipmentDocumentsResponse**](../Model/ShippingV2/GetShipmentDocumentsResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ShippingV2 Model list]](../Model/ShippingV2)
[[README]](../../README.md)

## `getTracking()`

```php
getTracking($tracking_id, $carrier_id, $x_amzn_shipping_business_id): \SellingPartnerApi\Model\ShippingV2\GetTrackingResponse
```



Returns tracking information for a purchased shipment.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 80 | 100 |

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

$apiInstance = new SellingPartnerApi\Api\ShippingV2Api($config);
$tracking_id = 'tracking_id_example'; // string | A carrier-generated tracking identifier originally returned by the purchaseShipment operation.
$carrier_id = 'carrier_id_example'; // string | A carrier identifier originally returned by the getRates operation for the selected rate.
$x_amzn_shipping_business_id = 'x_amzn_shipping_business_id_example'; // string | Amazon shipping business to assume for this request. The default is AmazonShipping_UK.

try {
    $result = $apiInstance->getTracking($tracking_id, $carrier_id, $x_amzn_shipping_business_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingV2Api->getTracking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tracking_id** | **string**| A carrier-generated tracking identifier originally returned by the purchaseShipment operation. |
 **carrier_id** | **string**| A carrier identifier originally returned by the getRates operation for the selected rate. |
 **x_amzn_shipping_business_id** | **string**| Amazon shipping business to assume for this request. The default is AmazonShipping_UK. | [optional]

### Return type

[**\SellingPartnerApi\Model\ShippingV2\GetTrackingResponse**](../Model/ShippingV2/GetTrackingResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ShippingV2 Model list]](../Model/ShippingV2)
[[README]](../../README.md)

## `purchaseShipment()`

```php
purchaseShipment($body, $x_amzn_idempotency_key, $x_amzn_shipping_business_id): \SellingPartnerApi\Model\ShippingV2\PurchaseShipmentResponse
```



Purchases a shipping service and returns purchase related details and documents.

Note: You must complete the purchase within 10 minutes of rate creation by the shipping service provider. If you make the request after the 10 minutes have expired, you will receive an error response with the error code equal to \"TOKEN_EXPIRED\". If you receive this error response, you must get the rates for the shipment again.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 80 | 100 |

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

$apiInstance = new SellingPartnerApi\Api\ShippingV2Api($config);
$body = new \SellingPartnerApi\Model\ShippingV2\PurchaseShipmentRequest(); // \SellingPartnerApi\Model\ShippingV2\PurchaseShipmentRequest
$x_amzn_idempotency_key = 'x_amzn_idempotency_key_example'; // string | A unique value which the server uses to recognize subsequent retries of the same request.
$x_amzn_shipping_business_id = 'x_amzn_shipping_business_id_example'; // string | Amazon shipping business to assume for this request. The default is AmazonShipping_UK.

try {
    $result = $apiInstance->purchaseShipment($body, $x_amzn_idempotency_key, $x_amzn_shipping_business_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingV2Api->purchaseShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\ShippingV2\PurchaseShipmentRequest**](../Model/ShippingV2/PurchaseShipmentRequest.md)|  |
 **x_amzn_idempotency_key** | **string**| A unique value which the server uses to recognize subsequent retries of the same request. | [optional]
 **x_amzn_shipping_business_id** | **string**| Amazon shipping business to assume for this request. The default is AmazonShipping_UK. | [optional]

### Return type

[**\SellingPartnerApi\Model\ShippingV2\PurchaseShipmentResponse**](../Model/ShippingV2/PurchaseShipmentResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ShippingV2 Model list]](../Model/ShippingV2)
[[README]](../../README.md)
