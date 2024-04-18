# SellingPartnerApi\ShippingV1Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelShipment()**](ShippingV1Api.md#cancelShipment) | **POST** /shipping/v1/shipments/{shipmentId}/cancel | 
[**createShipment()**](ShippingV1Api.md#createShipment) | **POST** /shipping/v1/shipments | 
[**getAccount()**](ShippingV1Api.md#getAccount) | **GET** /shipping/v1/account | 
[**getRates()**](ShippingV1Api.md#getRates) | **POST** /shipping/v1/rates | 
[**getShipment()**](ShippingV1Api.md#getShipment) | **GET** /shipping/v1/shipments/{shipmentId} | 
[**getTrackingInformation()**](ShippingV1Api.md#getTrackingInformation) | **GET** /shipping/v1/tracking/{trackingId} | 
[**purchaseLabels()**](ShippingV1Api.md#purchaseLabels) | **POST** /shipping/v1/shipments/{shipmentId}/purchaseLabels | 
[**purchaseShipment()**](ShippingV1Api.md#purchaseShipment) | **POST** /shipping/v1/purchaseShipment | 
[**retrieveShippingLabel()**](ShippingV1Api.md#retrieveShippingLabel) | **POST** /shipping/v1/shipments/{shipmentId}/containers/{trackingId}/label | 


## `cancelShipment()`

```php
cancelShipment($shipment_id): \SellingPartnerApi\Model\ShippingV1\CancelShipmentResponse
```



Cancel a shipment by the given shipmentId.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 5 | 15 |

For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

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

$apiInstance = new SellingPartnerApi\Api\ShippingV1Api($config);
$shipment_id = 'shipment_id_example'; // string

try {
    $result = $apiInstance->cancelShipment($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingV1Api->cancelShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**|  |

### Return type

[**\SellingPartnerApi\Model\ShippingV1\CancelShipmentResponse**](../Model/ShippingV1/CancelShipmentResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ShippingV1 Model list]](../Model/ShippingV1)
[[README]](../../README.md)

## `createShipment()`

```php
createShipment($body): \SellingPartnerApi\Model\ShippingV1\CreateShipmentResponse
```



Create a new shipment.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 5 | 15 |

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

$apiInstance = new SellingPartnerApi\Api\ShippingV1Api($config);
$body = new \SellingPartnerApi\Model\ShippingV1\CreateShipmentRequest(); // \SellingPartnerApi\Model\ShippingV1\CreateShipmentRequest

try {
    $result = $apiInstance->createShipment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingV1Api->createShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\ShippingV1\CreateShipmentRequest**](../Model/ShippingV1/CreateShipmentRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\ShippingV1\CreateShipmentResponse**](../Model/ShippingV1/CreateShipmentResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ShippingV1 Model list]](../Model/ShippingV1)
[[README]](../../README.md)

## `getAccount()`

```php
getAccount(): \SellingPartnerApi\Model\ShippingV1\GetAccountResponse
```



Verify if the current account is valid.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 5 | 15 |

For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

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

$apiInstance = new SellingPartnerApi\Api\ShippingV1Api($config);

try {
    $result = $apiInstance->getAccount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingV1Api->getAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SellingPartnerApi\Model\ShippingV1\GetAccountResponse**](../Model/ShippingV1/GetAccountResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ShippingV1 Model list]](../Model/ShippingV1)
[[README]](../../README.md)

## `getRates()`

```php
getRates($body): \SellingPartnerApi\Model\ShippingV1\GetRatesResponse
```



Get service rates.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 5 | 15 |

For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

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

$apiInstance = new SellingPartnerApi\Api\ShippingV1Api($config);
$body = new \SellingPartnerApi\Model\ShippingV1\GetRatesRequest(); // \SellingPartnerApi\Model\ShippingV1\GetRatesRequest

try {
    $result = $apiInstance->getRates($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingV1Api->getRates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\ShippingV1\GetRatesRequest**](../Model/ShippingV1/GetRatesRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\ShippingV1\GetRatesResponse**](../Model/ShippingV1/GetRatesResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ShippingV1 Model list]](../Model/ShippingV1)
[[README]](../../README.md)

## `getShipment()`

```php
getShipment($shipment_id): \SellingPartnerApi\Model\ShippingV1\GetShipmentResponse
```



Return the entire shipment object for the shipmentId.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 5 | 15 |

For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

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

$apiInstance = new SellingPartnerApi\Api\ShippingV1Api($config);
$shipment_id = 'shipment_id_example'; // string

try {
    $result = $apiInstance->getShipment($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingV1Api->getShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**|  |

### Return type

[**\SellingPartnerApi\Model\ShippingV1\GetShipmentResponse**](../Model/ShippingV1/GetShipmentResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ShippingV1 Model list]](../Model/ShippingV1)
[[README]](../../README.md)

## `getTrackingInformation()`

```php
getTrackingInformation($tracking_id): \SellingPartnerApi\Model\ShippingV1\GetTrackingInformationResponse
```



Return the tracking information of a shipment.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1 | 1 |

For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

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

$apiInstance = new SellingPartnerApi\Api\ShippingV1Api($config);
$tracking_id = 'tracking_id_example'; // string

try {
    $result = $apiInstance->getTrackingInformation($tracking_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingV1Api->getTrackingInformation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tracking_id** | **string**|  |

### Return type

[**\SellingPartnerApi\Model\ShippingV1\GetTrackingInformationResponse**](../Model/ShippingV1/GetTrackingInformationResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ShippingV1 Model list]](../Model/ShippingV1)
[[README]](../../README.md)

## `purchaseLabels()`

```php
purchaseLabels($shipment_id, $body): \SellingPartnerApi\Model\ShippingV1\PurchaseLabelsResponse
```



Purchase shipping labels based on a given rate.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 5 | 15 |

For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

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

$apiInstance = new SellingPartnerApi\Api\ShippingV1Api($config);
$shipment_id = 'shipment_id_example'; // string
$body = new \SellingPartnerApi\Model\ShippingV1\PurchaseLabelsRequest(); // \SellingPartnerApi\Model\ShippingV1\PurchaseLabelsRequest

try {
    $result = $apiInstance->purchaseLabels($shipment_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingV1Api->purchaseLabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**|  |
 **body** | [**\SellingPartnerApi\Model\ShippingV1\PurchaseLabelsRequest**](../Model/ShippingV1/PurchaseLabelsRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\ShippingV1\PurchaseLabelsResponse**](../Model/ShippingV1/PurchaseLabelsResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ShippingV1 Model list]](../Model/ShippingV1)
[[README]](../../README.md)

## `purchaseShipment()`

```php
purchaseShipment($body): \SellingPartnerApi\Model\ShippingV1\PurchaseShipmentResponse
```



Purchase shipping labels.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 5 | 15 |

For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

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

$apiInstance = new SellingPartnerApi\Api\ShippingV1Api($config);
$body = new \SellingPartnerApi\Model\ShippingV1\PurchaseShipmentRequest(); // \SellingPartnerApi\Model\ShippingV1\PurchaseShipmentRequest

try {
    $result = $apiInstance->purchaseShipment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingV1Api->purchaseShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\ShippingV1\PurchaseShipmentRequest**](../Model/ShippingV1/PurchaseShipmentRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\ShippingV1\PurchaseShipmentResponse**](../Model/ShippingV1/PurchaseShipmentResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ShippingV1 Model list]](../Model/ShippingV1)
[[README]](../../README.md)

## `retrieveShippingLabel()`

```php
retrieveShippingLabel($shipment_id, $tracking_id, $body): \SellingPartnerApi\Model\ShippingV1\RetrieveShippingLabelResponse
```



Retrieve shipping label based on the shipment id and tracking id.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 5 | 15 |

For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

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

$apiInstance = new SellingPartnerApi\Api\ShippingV1Api($config);
$shipment_id = 'shipment_id_example'; // string
$tracking_id = 'tracking_id_example'; // string
$body = new \SellingPartnerApi\Model\ShippingV1\RetrieveShippingLabelRequest(); // \SellingPartnerApi\Model\ShippingV1\RetrieveShippingLabelRequest

try {
    $result = $apiInstance->retrieveShippingLabel($shipment_id, $tracking_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingV1Api->retrieveShippingLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**|  |
 **tracking_id** | **string**|  |
 **body** | [**\SellingPartnerApi\Model\ShippingV1\RetrieveShippingLabelRequest**](../Model/ShippingV1/RetrieveShippingLabelRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\ShippingV1\RetrieveShippingLabelResponse**](../Model/ShippingV1/RetrieveShippingLabelResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ShippingV1 Model list]](../Model/ShippingV1)
[[README]](../../README.md)
