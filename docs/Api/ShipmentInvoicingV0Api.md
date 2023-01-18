# SellingPartnerApi\ShipmentInvoicingV0Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**getInvoiceStatus()**](ShipmentInvoicingV0Api.md#getInvoiceStatus) | **GET** /fba/outbound/brazil/v0/shipments/{shipmentId}/invoice/status | 
[**getShipmentDetails()**](ShipmentInvoicingV0Api.md#getShipmentDetails) | **GET** /fba/outbound/brazil/v0/shipments/{shipmentId} | 
[**submitInvoice()**](ShipmentInvoicingV0Api.md#submitInvoice) | **POST** /fba/outbound/brazil/v0/shipments/{shipmentId}/invoice | 


## `getInvoiceStatus()`

```php
getInvoiceStatus($shipment_id): \SellingPartnerApi\Model\ShipmentInvoicingV0\GetInvoiceStatusResponse
```



Returns the invoice status for the shipment you specify.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1.133 | 25 |

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

$apiInstance = new SellingPartnerApi\Api\ShipmentInvoicingV0Api($config);
$shipment_id = 'shipment_id_example'; // string | The shipment identifier for the shipment.

try {
    $result = $apiInstance->getInvoiceStatus($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentInvoicingV0Api->getInvoiceStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| The shipment identifier for the shipment. |

### Return type

[**\SellingPartnerApi\Model\ShipmentInvoicingV0\GetInvoiceStatusResponse**](../Model/ShipmentInvoicingV0/GetInvoiceStatusResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ShipmentInvoicingV0 Model list]](../Model/ShipmentInvoicingV0)
[[README]](../../README.md)

## `getShipmentDetails()`

```php
getShipmentDetails($shipment_id): \SellingPartnerApi\Model\ShipmentInvoicingV0\GetShipmentDetailsResponse
```



Returns the shipment details required to issue an invoice for the specified shipment.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1.133 | 25 |

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

$apiInstance = new SellingPartnerApi\Api\ShipmentInvoicingV0Api($config);
$shipment_id = 'shipment_id_example'; // string | The identifier for the shipment. Get this value from the FBAOutboundShipmentStatus notification. For information about subscribing to notifications, see the [Notifications API Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/notifications-api-v1-use-case-guide).

try {
    $result = $apiInstance->getShipmentDetails($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentInvoicingV0Api->getShipmentDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| The identifier for the shipment. Get this value from the FBAOutboundShipmentStatus notification. For information about subscribing to notifications, see the [Notifications API Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/notifications-api-v1-use-case-guide). |

### Return type

[**\SellingPartnerApi\Model\ShipmentInvoicingV0\GetShipmentDetailsResponse**](../Model/ShipmentInvoicingV0/GetShipmentDetailsResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ShipmentInvoicingV0 Model list]](../Model/ShipmentInvoicingV0)
[[README]](../../README.md)

## `submitInvoice()`

```php
submitInvoice($shipment_id, $body): \SellingPartnerApi\Model\ShipmentInvoicingV0\SubmitInvoiceResponse
```



Submits a shipment invoice document for a given shipment.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1.133 | 25 |

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

$apiInstance = new SellingPartnerApi\Api\ShipmentInvoicingV0Api($config);
$shipment_id = 'shipment_id_example'; // string | The identifier for the shipment.
$body = new \SellingPartnerApi\Model\ShipmentInvoicingV0\SubmitInvoiceRequest(); // \SellingPartnerApi\Model\ShipmentInvoicingV0\SubmitInvoiceRequest

try {
    $result = $apiInstance->submitInvoice($shipment_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentInvoicingV0Api->submitInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| The identifier for the shipment. |
 **body** | [**\SellingPartnerApi\Model\ShipmentInvoicingV0\SubmitInvoiceRequest**](../Model/ShipmentInvoicingV0/SubmitInvoiceRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\ShipmentInvoicingV0\SubmitInvoiceResponse**](../Model/ShipmentInvoicingV0/SubmitInvoiceResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ShipmentInvoicingV0 Model list]](../Model/ShipmentInvoicingV0)
[[README]](../../README.md)
