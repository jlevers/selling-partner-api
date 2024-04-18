# SellingPartnerApi\MerchantFulfillmentV0Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelShipment()**](MerchantFulfillmentV0Api.md#cancelShipment) | **DELETE** /mfn/v0/shipments/{shipmentId} | 
[**cancelShipmentOld()**](MerchantFulfillmentV0Api.md#cancelShipmentOld) | **PUT** /mfn/v0/shipments/{shipmentId}/cancel | 
[**createShipment()**](MerchantFulfillmentV0Api.md#createShipment) | **POST** /mfn/v0/shipments | 
[**getAdditionalSellerInputs()**](MerchantFulfillmentV0Api.md#getAdditionalSellerInputs) | **POST** /mfn/v0/additionalSellerInputs | 
[**getAdditionalSellerInputsOld()**](MerchantFulfillmentV0Api.md#getAdditionalSellerInputsOld) | **POST** /mfn/v0/sellerInputs | 
[**getEligibleShipmentServices()**](MerchantFulfillmentV0Api.md#getEligibleShipmentServices) | **POST** /mfn/v0/eligibleShippingServices | 
[**getEligibleShipmentServicesOld()**](MerchantFulfillmentV0Api.md#getEligibleShipmentServicesOld) | **POST** /mfn/v0/eligibleServices | 
[**getShipment()**](MerchantFulfillmentV0Api.md#getShipment) | **GET** /mfn/v0/shipments/{shipmentId} | 


## `cancelShipment()`

```php
cancelShipment($shipment_id): \SellingPartnerApi\Model\MerchantFulfillmentV0\CancelShipmentResponse
```



Cancel the shipment indicated by the specified shipment identifier.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1 | 1 |

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

$apiInstance = new SellingPartnerApi\Api\MerchantFulfillmentV0Api($config);
$shipment_id = 'shipment_id_example'; // string | The Amazon-defined shipment identifier for the shipment to cancel.

try {
    $result = $apiInstance->cancelShipment($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantFulfillmentV0Api->cancelShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| The Amazon-defined shipment identifier for the shipment to cancel. |

### Return type

[**\SellingPartnerApi\Model\MerchantFulfillmentV0\CancelShipmentResponse**](../Model/MerchantFulfillmentV0/CancelShipmentResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[MerchantFulfillmentV0 Model list]](../Model/MerchantFulfillmentV0)
[[README]](../../README.md)

## `cancelShipmentOld()`

```php
cancelShipmentOld($shipment_id): \SellingPartnerApi\Model\MerchantFulfillmentV0\CancelShipmentResponse
```



Cancel the shipment indicated by the specified shipment identifer.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1 | 1 |

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

$apiInstance = new SellingPartnerApi\Api\MerchantFulfillmentV0Api($config);
$shipment_id = 'shipment_id_example'; // string | The Amazon-defined shipment identifier for the shipment to cancel.

try {
    $result = $apiInstance->cancelShipmentOld($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantFulfillmentV0Api->cancelShipmentOld: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| The Amazon-defined shipment identifier for the shipment to cancel. |

### Return type

[**\SellingPartnerApi\Model\MerchantFulfillmentV0\CancelShipmentResponse**](../Model/MerchantFulfillmentV0/CancelShipmentResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[MerchantFulfillmentV0 Model list]](../Model/MerchantFulfillmentV0)
[[README]](../../README.md)

## `createShipment()`

```php
createShipment($body): \SellingPartnerApi\Model\MerchantFulfillmentV0\CreateShipmentResponse
```



Create a shipment with the information provided.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1 | 1 |

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

$apiInstance = new SellingPartnerApi\Api\MerchantFulfillmentV0Api($config);
$body = new \SellingPartnerApi\Model\MerchantFulfillmentV0\CreateShipmentRequest(); // \SellingPartnerApi\Model\MerchantFulfillmentV0\CreateShipmentRequest

try {
    $result = $apiInstance->createShipment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantFulfillmentV0Api->createShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\MerchantFulfillmentV0\CreateShipmentRequest**](../Model/MerchantFulfillmentV0/CreateShipmentRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\MerchantFulfillmentV0\CreateShipmentResponse**](../Model/MerchantFulfillmentV0/CreateShipmentResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[MerchantFulfillmentV0 Model list]](../Model/MerchantFulfillmentV0)
[[README]](../../README.md)

## `getAdditionalSellerInputs()`

```php
getAdditionalSellerInputs($body): \SellingPartnerApi\Model\MerchantFulfillmentV0\GetAdditionalSellerInputsResponse
```



Gets a list of additional seller inputs required for a ship method. This is generally used for international shipping.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1 | 1 |

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

$apiInstance = new SellingPartnerApi\Api\MerchantFulfillmentV0Api($config);
$body = new \SellingPartnerApi\Model\MerchantFulfillmentV0\GetAdditionalSellerInputsRequest(); // \SellingPartnerApi\Model\MerchantFulfillmentV0\GetAdditionalSellerInputsRequest

try {
    $result = $apiInstance->getAdditionalSellerInputs($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantFulfillmentV0Api->getAdditionalSellerInputs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\MerchantFulfillmentV0\GetAdditionalSellerInputsRequest**](../Model/MerchantFulfillmentV0/GetAdditionalSellerInputsRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\MerchantFulfillmentV0\GetAdditionalSellerInputsResponse**](../Model/MerchantFulfillmentV0/GetAdditionalSellerInputsResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[MerchantFulfillmentV0 Model list]](../Model/MerchantFulfillmentV0)
[[README]](../../README.md)

## `getAdditionalSellerInputsOld()`

```php
getAdditionalSellerInputsOld($body): \SellingPartnerApi\Model\MerchantFulfillmentV0\GetAdditionalSellerInputsResponse
```



Get a list of additional seller inputs required for a ship method. This is generally used for international shipping.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1 | 1 |

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

$apiInstance = new SellingPartnerApi\Api\MerchantFulfillmentV0Api($config);
$body = new \SellingPartnerApi\Model\MerchantFulfillmentV0\GetAdditionalSellerInputsRequest(); // \SellingPartnerApi\Model\MerchantFulfillmentV0\GetAdditionalSellerInputsRequest

try {
    $result = $apiInstance->getAdditionalSellerInputsOld($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantFulfillmentV0Api->getAdditionalSellerInputsOld: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\MerchantFulfillmentV0\GetAdditionalSellerInputsRequest**](../Model/MerchantFulfillmentV0/GetAdditionalSellerInputsRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\MerchantFulfillmentV0\GetAdditionalSellerInputsResponse**](../Model/MerchantFulfillmentV0/GetAdditionalSellerInputsResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[MerchantFulfillmentV0 Model list]](../Model/MerchantFulfillmentV0)
[[README]](../../README.md)

## `getEligibleShipmentServices()`

```php
getEligibleShipmentServices($body): \SellingPartnerApi\Model\MerchantFulfillmentV0\GetEligibleShipmentServicesResponse
```



Returns a list of shipping service offers that satisfy the specified shipment request details.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 5 | 10 |

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

$apiInstance = new SellingPartnerApi\Api\MerchantFulfillmentV0Api($config);
$body = new \SellingPartnerApi\Model\MerchantFulfillmentV0\GetEligibleShipmentServicesRequest(); // \SellingPartnerApi\Model\MerchantFulfillmentV0\GetEligibleShipmentServicesRequest

try {
    $result = $apiInstance->getEligibleShipmentServices($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantFulfillmentV0Api->getEligibleShipmentServices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\MerchantFulfillmentV0\GetEligibleShipmentServicesRequest**](../Model/MerchantFulfillmentV0/GetEligibleShipmentServicesRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\MerchantFulfillmentV0\GetEligibleShipmentServicesResponse**](../Model/MerchantFulfillmentV0/GetEligibleShipmentServicesResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[MerchantFulfillmentV0 Model list]](../Model/MerchantFulfillmentV0)
[[README]](../../README.md)

## `getEligibleShipmentServicesOld()`

```php
getEligibleShipmentServicesOld($body): \SellingPartnerApi\Model\MerchantFulfillmentV0\GetEligibleShipmentServicesResponse
```



Returns a list of shipping service offers that satisfy the specified shipment request details.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1 | 1 |

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

$apiInstance = new SellingPartnerApi\Api\MerchantFulfillmentV0Api($config);
$body = new \SellingPartnerApi\Model\MerchantFulfillmentV0\GetEligibleShipmentServicesRequest(); // \SellingPartnerApi\Model\MerchantFulfillmentV0\GetEligibleShipmentServicesRequest

try {
    $result = $apiInstance->getEligibleShipmentServicesOld($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantFulfillmentV0Api->getEligibleShipmentServicesOld: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\MerchantFulfillmentV0\GetEligibleShipmentServicesRequest**](../Model/MerchantFulfillmentV0/GetEligibleShipmentServicesRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\MerchantFulfillmentV0\GetEligibleShipmentServicesResponse**](../Model/MerchantFulfillmentV0/GetEligibleShipmentServicesResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[MerchantFulfillmentV0 Model list]](../Model/MerchantFulfillmentV0)
[[README]](../../README.md)

## `getShipment()`

```php
getShipment($shipment_id): \SellingPartnerApi\Model\MerchantFulfillmentV0\GetShipmentResponse
```



Returns the shipment information for an existing shipment.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1 | 1 |

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

$apiInstance = new SellingPartnerApi\Api\MerchantFulfillmentV0Api($config);
$shipment_id = 'shipment_id_example'; // string | The Amazon-defined shipment identifier for the shipment.

try {
    $result = $apiInstance->getShipment($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantFulfillmentV0Api->getShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| The Amazon-defined shipment identifier for the shipment. |

### Return type

[**\SellingPartnerApi\Model\MerchantFulfillmentV0\GetShipmentResponse**](../Model/MerchantFulfillmentV0/GetShipmentResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[MerchantFulfillmentV0 Model list]](../Model/MerchantFulfillmentV0)
[[README]](../../README.md)
