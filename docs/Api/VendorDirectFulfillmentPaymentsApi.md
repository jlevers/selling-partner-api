# SellingPartnerApi\VendorDirectFulfillmentPaymentsApi

Method | HTTP request | Description
------------- | ------------- | -------------
[**submitInvoice()**](VendorDirectFulfillmentPaymentsApi.md#submitInvoice) | **POST** /vendor/directFulfillment/payments/v1/invoices | 


## `submitInvoice()`

```php
submitInvoice($body): \SellingPartnerApi\Model\VendorDirectFulfillmentPayments\SubmitInvoiceResponse
```



Submits one or more invoices for a vendor's direct fulfillment orders.

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

$apiInstance = new SellingPartnerApi\Api\VendorDirectFulfillmentPaymentsApi($config);
$body = new \SellingPartnerApi\Model\VendorDirectFulfillmentPayments\SubmitInvoiceRequest(); // \SellingPartnerApi\Model\VendorDirectFulfillmentPayments\SubmitInvoiceRequest

try {
    $result = $apiInstance->submitInvoice($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorDirectFulfillmentPaymentsApi->submitInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentPayments\SubmitInvoiceRequest**](../Model/VendorDirectFulfillmentPayments/SubmitInvoiceRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\VendorDirectFulfillmentPayments\SubmitInvoiceResponse**](../Model/VendorDirectFulfillmentPayments/SubmitInvoiceResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[VendorDirectFulfillmentPayments Model list]](../Model/VendorDirectFulfillmentPayments)
[[README]](../../README.md)
