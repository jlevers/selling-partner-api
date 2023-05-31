# SellingPartnerApi\VendorDirectFulfillmentPaymentsV1Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**submitInvoice()**](VendorDirectFulfillmentPaymentsV1Api.md#submitInvoice) | **POST** /vendor/directFulfillment/payments/v1/invoices | 


## `submitInvoice()`

```php
submitInvoice($body): \SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\SubmitInvoiceResponse
```



Submits one or more invoices for a vendor's direct fulfillment orders.

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

$apiInstance = new SellingPartnerApi\Api\VendorDirectFulfillmentPaymentsV1Api($config);
$body = new \SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\SubmitInvoiceRequest(); // \SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\SubmitInvoiceRequest

try {
    $result = $apiInstance->submitInvoice($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorDirectFulfillmentPaymentsV1Api->submitInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\SubmitInvoiceRequest**](../Model/VendorDirectFulfillmentPaymentsV1/SubmitInvoiceRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\SubmitInvoiceResponse**](../Model/VendorDirectFulfillmentPaymentsV1/SubmitInvoiceResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[VendorDirectFulfillmentPaymentsV1 Model list]](../Model/VendorDirectFulfillmentPaymentsV1)
[[README]](../../README.md)
