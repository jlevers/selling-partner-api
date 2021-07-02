# SellingPartnerApi\MerchantFulfillmentApi

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelShipment()**](MerchantFulfillmentApi.md#cancelShipment) | **DELETE** /mfn/v0/shipments/{shipmentId} | 
[**cancelShipmentOld()**](MerchantFulfillmentApi.md#cancelShipmentOld) | **PUT** /mfn/v0/shipments/{shipmentId}/cancel | 
[**createShipment()**](MerchantFulfillmentApi.md#createShipment) | **POST** /mfn/v0/shipments | 
[**getAdditionalSellerInputs()**](MerchantFulfillmentApi.md#getAdditionalSellerInputs) | **POST** /mfn/v0/additionalSellerInputs | 
[**getAdditionalSellerInputsOld()**](MerchantFulfillmentApi.md#getAdditionalSellerInputsOld) | **POST** /mfn/v0/sellerInputs | 
[**getEligibleShipmentServices()**](MerchantFulfillmentApi.md#getEligibleShipmentServices) | **POST** /mfn/v0/eligibleShippingServices | 
[**getEligibleShipmentServicesOld()**](MerchantFulfillmentApi.md#getEligibleShipmentServicesOld) | **POST** /mfn/v0/eligibleServices | 
[**getShipment()**](MerchantFulfillmentApi.md#getShipment) | **GET** /mfn/v0/shipments/{shipmentId} | 


## `cancelShipment()`

```php
cancelShipment($shipment_id): \SellingPartnerApi\Model\MerchantFulfillment\CancelShipmentResponse
```



Cancel the shipment indicated by the specified shipment identifier.

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

$apiInstance = new SellingPartnerApi\Api\MerchantFulfillmentApi($config);
$shipment_id = 'shipment_id_example'; // string | The Amazon-defined shipment identifier for the shipment to cancel.

try {
    $result = $apiInstance->cancelShipment($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantFulfillmentApi->cancelShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| The Amazon-defined shipment identifier for the shipment to cancel. |

### Return type

[**\SellingPartnerApi\Model\MerchantFulfillment\CancelShipmentResponse**](../Model/MerchantFulfillment/CancelShipmentResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[MerchantFulfillment Model list]](../Model/MerchantFulfillment)
[[README]](../../README.md)

## `cancelShipmentOld()`

```php
cancelShipmentOld($shipment_id): \SellingPartnerApi\Model\MerchantFulfillment\CancelShipmentResponse
```



Cancel the shipment indicated by the specified shipment identifer.

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

$apiInstance = new SellingPartnerApi\Api\MerchantFulfillmentApi($config);
$shipment_id = 'shipment_id_example'; // string | The Amazon-defined shipment identifier for the shipment to cancel.

try {
    $result = $apiInstance->cancelShipmentOld($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantFulfillmentApi->cancelShipmentOld: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| The Amazon-defined shipment identifier for the shipment to cancel. |

### Return type

[**\SellingPartnerApi\Model\MerchantFulfillment\CancelShipmentResponse**](../Model/MerchantFulfillment/CancelShipmentResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[MerchantFulfillment Model list]](../Model/MerchantFulfillment)
[[README]](../../README.md)

## `createShipment()`

```php
createShipment($body): \SellingPartnerApi\Model\MerchantFulfillment\CreateShipmentResponse
```



Create a shipment with the information provided.

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

$apiInstance = new SellingPartnerApi\Api\MerchantFulfillmentApi($config);
$body = new \SellingPartnerApi\Model\MerchantFulfillment\CreateShipmentRequest(); // \SellingPartnerApi\Model\MerchantFulfillment\CreateShipmentRequest

try {
    $result = $apiInstance->createShipment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantFulfillmentApi->createShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\MerchantFulfillment\CreateShipmentRequest**](../Model/MerchantFulfillment/CreateShipmentRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\MerchantFulfillment\CreateShipmentResponse**](../Model/MerchantFulfillment/CreateShipmentResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[MerchantFulfillment Model list]](../Model/MerchantFulfillment)
[[README]](../../README.md)

## `getAdditionalSellerInputs()`

```php
getAdditionalSellerInputs($body): \SellingPartnerApi\Model\MerchantFulfillment\GetAdditionalSellerInputsResponse
```



Gets a list of additional seller inputs required for a ship method. This is generally used for international shipping.

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

$apiInstance = new SellingPartnerApi\Api\MerchantFulfillmentApi($config);
$body = new \SellingPartnerApi\Model\MerchantFulfillment\GetAdditionalSellerInputsRequest(); // \SellingPartnerApi\Model\MerchantFulfillment\GetAdditionalSellerInputsRequest

try {
    $result = $apiInstance->getAdditionalSellerInputs($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantFulfillmentApi->getAdditionalSellerInputs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\MerchantFulfillment\GetAdditionalSellerInputsRequest**](../Model/MerchantFulfillment/GetAdditionalSellerInputsRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\MerchantFulfillment\GetAdditionalSellerInputsResponse**](../Model/MerchantFulfillment/GetAdditionalSellerInputsResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[MerchantFulfillment Model list]](../Model/MerchantFulfillment)
[[README]](../../README.md)

## `getAdditionalSellerInputsOld()`

```php
getAdditionalSellerInputsOld($body): \SellingPartnerApi\Model\MerchantFulfillment\GetAdditionalSellerInputsResponse
```



Get a list of additional seller inputs required for a ship method. This is generally used for international shipping.

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

$apiInstance = new SellingPartnerApi\Api\MerchantFulfillmentApi($config);
$body = new \SellingPartnerApi\Model\MerchantFulfillment\GetAdditionalSellerInputsRequest(); // \SellingPartnerApi\Model\MerchantFulfillment\GetAdditionalSellerInputsRequest

try {
    $result = $apiInstance->getAdditionalSellerInputsOld($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantFulfillmentApi->getAdditionalSellerInputsOld: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\MerchantFulfillment\GetAdditionalSellerInputsRequest**](../Model/MerchantFulfillment/GetAdditionalSellerInputsRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\MerchantFulfillment\GetAdditionalSellerInputsResponse**](../Model/MerchantFulfillment/GetAdditionalSellerInputsResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[MerchantFulfillment Model list]](../Model/MerchantFulfillment)
[[README]](../../README.md)

## `getEligibleShipmentServices()`

```php
getEligibleShipmentServices($body): \SellingPartnerApi\Model\MerchantFulfillment\GetEligibleShipmentServicesResponse
```



Returns a list of shipping service offers that satisfy the specified shipment request details.

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

$apiInstance = new SellingPartnerApi\Api\MerchantFulfillmentApi($config);
$body = new \SellingPartnerApi\Model\MerchantFulfillment\GetEligibleShipmentServicesRequest(); // \SellingPartnerApi\Model\MerchantFulfillment\GetEligibleShipmentServicesRequest

try {
    $result = $apiInstance->getEligibleShipmentServices($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantFulfillmentApi->getEligibleShipmentServices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\MerchantFulfillment\GetEligibleShipmentServicesRequest**](../Model/MerchantFulfillment/GetEligibleShipmentServicesRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\MerchantFulfillment\GetEligibleShipmentServicesResponse**](../Model/MerchantFulfillment/GetEligibleShipmentServicesResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[MerchantFulfillment Model list]](../Model/MerchantFulfillment)
[[README]](../../README.md)

## `getEligibleShipmentServicesOld()`

```php
getEligibleShipmentServicesOld($body): \SellingPartnerApi\Model\MerchantFulfillment\GetEligibleShipmentServicesResponse
```



Returns a list of shipping service offers that satisfy the specified shipment request details.

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

$apiInstance = new SellingPartnerApi\Api\MerchantFulfillmentApi($config);
$body = new \SellingPartnerApi\Model\MerchantFulfillment\GetEligibleShipmentServicesRequest(); // \SellingPartnerApi\Model\MerchantFulfillment\GetEligibleShipmentServicesRequest

try {
    $result = $apiInstance->getEligibleShipmentServicesOld($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantFulfillmentApi->getEligibleShipmentServicesOld: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\MerchantFulfillment\GetEligibleShipmentServicesRequest**](../Model/MerchantFulfillment/GetEligibleShipmentServicesRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\MerchantFulfillment\GetEligibleShipmentServicesResponse**](../Model/MerchantFulfillment/GetEligibleShipmentServicesResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[MerchantFulfillment Model list]](../Model/MerchantFulfillment)
[[README]](../../README.md)

## `getShipment()`

```php
getShipment($shipment_id): \SellingPartnerApi\Model\MerchantFulfillment\GetShipmentResponse
```



Returns the shipment information for an existing shipment.

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

$apiInstance = new SellingPartnerApi\Api\MerchantFulfillmentApi($config);
$shipment_id = 'shipment_id_example'; // string | The Amazon-defined shipment identifier for the shipment.

try {
    $result = $apiInstance->getShipment($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantFulfillmentApi->getShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| The Amazon-defined shipment identifier for the shipment. |

### Return type

[**\SellingPartnerApi\Model\MerchantFulfillment\GetShipmentResponse**](../Model/MerchantFulfillment/GetShipmentResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[MerchantFulfillment Model list]](../Model/MerchantFulfillment)
[[README]](../../README.md)
