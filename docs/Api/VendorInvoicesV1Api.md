# SellingPartnerApi\VendorInvoicesV1Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**submitInvoices()**](VendorInvoicesV1Api.md#submitInvoices) | **POST** /vendor/payments/v1/invoices | 


## `submitInvoices()`

```php
submitInvoices($body): \SellingPartnerApi\Model\VendorInvoicesV1\SubmitInvoicesResponse
```



Submit new invoices to Amazon.

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

$apiInstance = new SellingPartnerApi\Api\VendorInvoicesV1Api($config);
$body = new \SellingPartnerApi\Model\VendorInvoicesV1\SubmitInvoicesRequest(); // \SellingPartnerApi\Model\VendorInvoicesV1\SubmitInvoicesRequest

try {
    $result = $apiInstance->submitInvoices($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorInvoicesV1Api->submitInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\VendorInvoicesV1\SubmitInvoicesRequest**](../Model/VendorInvoicesV1/SubmitInvoicesRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\VendorInvoicesV1\SubmitInvoicesResponse**](../Model/VendorInvoicesV1/SubmitInvoicesResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[VendorInvoicesV1 Model list]](../Model/VendorInvoicesV1)
[[README]](../../README.md)
