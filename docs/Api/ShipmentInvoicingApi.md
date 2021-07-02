# SellingPartnerApi\ShipmentInvoicingApi

Method | HTTP request | Description
------------- | ------------- | -------------
[**getInvoiceStatus()**](ShipmentInvoicingApi.md#getInvoiceStatus) | **GET** /fba/outbound/brazil/v0/shipments/{shipmentId}/invoice/status | 
[**getShipmentDetails()**](ShipmentInvoicingApi.md#getShipmentDetails) | **GET** /fba/outbound/brazil/v0/shipments/{shipmentId} | 
[**submitInvoice()**](ShipmentInvoicingApi.md#submitInvoice) | **POST** /fba/outbound/brazil/v0/shipments/{shipmentId}/invoice | 


## `getInvoiceStatus()`

```php
getInvoiceStatus($shipment_id): \SellingPartnerApi\Model\ShipmentInvoicing\GetInvoiceStatusResponse
```



Returns the invoice status for the shipment you specify.

**Usage Plans:**

| Plan type | Rate (requests per second) | Burst |
| ---- | ---- | ---- |
|Default| 1.133 | 25 |
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

$apiInstance = new SellingPartnerApi\Api\ShipmentInvoicingApi($config);
$shipment_id = 'shipment_id_example'; // string | The shipment identifier for the shipment.

try {
    $result = $apiInstance->getInvoiceStatus($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentInvoicingApi->getInvoiceStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| The shipment identifier for the shipment. |

### Return type

[**\SellingPartnerApi\Model\ShipmentInvoicing\GetInvoiceStatusResponse**](../Model/ShipmentInvoicing/GetInvoiceStatusResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ShipmentInvoicing Model list]](../Model/ShipmentInvoicing)
[[README]](../../README.md)

## `getShipmentDetails()`

```php
getShipmentDetails($shipment_id): \SellingPartnerApi\Model\ShipmentInvoicing\GetShipmentDetailsResponse
```



Returns the shipment details required to issue an invoice for the specified shipment.

**Usage Plans:**

| Plan type | Rate (requests per second) | Burst |
| ---- | ---- | ---- |
|Default| 1.133 | 25 |
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

$apiInstance = new SellingPartnerApi\Api\ShipmentInvoicingApi($config);
$shipment_id = 'shipment_id_example'; // string | The identifier for the shipment. Get this value from the FBAOutboundShipmentStatus notification. For information about subscribing to notifications, see the [Notifications API Use Case Guide](https://github.com/amzn/selling-partner-api-docs/blob/main/guides/en-US/use-case-guides/notifications-api-use-case-guide/notifications-use-case-guide-v1.md).

try {
    $result = $apiInstance->getShipmentDetails($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentInvoicingApi->getShipmentDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| The identifier for the shipment. Get this value from the FBAOutboundShipmentStatus notification. For information about subscribing to notifications, see the [Notifications API Use Case Guide](https://github.com/amzn/selling-partner-api-docs/blob/main/guides/en-US/use-case-guides/notifications-api-use-case-guide/notifications-use-case-guide-v1.md). |

### Return type

[**\SellingPartnerApi\Model\ShipmentInvoicing\GetShipmentDetailsResponse**](../Model/ShipmentInvoicing/GetShipmentDetailsResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ShipmentInvoicing Model list]](../Model/ShipmentInvoicing)
[[README]](../../README.md)

## `submitInvoice()`

```php
submitInvoice($shipment_id, $body): \SellingPartnerApi\Model\ShipmentInvoicing\SubmitInvoiceResponse
```



Submits a shipment invoice document for a given shipment.

**Usage Plans:**

| Plan type | Rate (requests per second) | Burst |
| ---- | ---- | ---- |
|Default| 1.133 | 25 |
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

$apiInstance = new SellingPartnerApi\Api\ShipmentInvoicingApi($config);
$shipment_id = 'shipment_id_example'; // string | The identifier for the shipment.
$body = new \SellingPartnerApi\Model\ShipmentInvoicing\SubmitInvoiceRequest(); // \SellingPartnerApi\Model\ShipmentInvoicing\SubmitInvoiceRequest

try {
    $result = $apiInstance->submitInvoice($shipment_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentInvoicingApi->submitInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| The identifier for the shipment. |
 **body** | [**\SellingPartnerApi\Model\ShipmentInvoicing\SubmitInvoiceRequest**](../Model/ShipmentInvoicing/SubmitInvoiceRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\ShipmentInvoicing\SubmitInvoiceResponse**](../Model/ShipmentInvoicing/SubmitInvoiceResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ShipmentInvoicing Model list]](../Model/ShipmentInvoicing)
[[README]](../../README.md)
