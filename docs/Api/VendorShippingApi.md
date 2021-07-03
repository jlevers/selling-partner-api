# SellingPartnerApi\VendorShippingApi

Method | HTTP request | Description
------------- | ------------- | -------------
[**submitShipmentConfirmations()**](VendorShippingApi.md#submitShipmentConfirmations) | **POST** /vendor/shipping/v1/shipmentConfirmations | 


## `submitShipmentConfirmations()`

```php
submitShipmentConfirmations($body): \SellingPartnerApi\Model\VendorShipping\SubmitShipmentConfirmationsResponse
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

$apiInstance = new SellingPartnerApi\Api\VendorShippingApi($config);
$body = new \SellingPartnerApi\Model\VendorShipping\SubmitShipmentConfirmationsRequest(); // \SellingPartnerApi\Model\VendorShipping\SubmitShipmentConfirmationsRequest

try {
    $result = $apiInstance->submitShipmentConfirmations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorShippingApi->submitShipmentConfirmations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\VendorShipping\SubmitShipmentConfirmationsRequest**](../Model/VendorShipping/SubmitShipmentConfirmationsRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\VendorShipping\SubmitShipmentConfirmationsResponse**](../Model/VendorShipping/SubmitShipmentConfirmationsResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[VendorShipping Model list]](../Model/VendorShipping)
[[README]](../../README.md)
