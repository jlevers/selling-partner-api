# SellingPartnerApi\FbaInboundEligibilityV1Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**getItemEligibilityPreview()**](FbaInboundEligibilityV1Api.md#getItemEligibilityPreview) | **GET** /fba/inbound/v1/eligibility/itemPreview | 


## `getItemEligibilityPreview()`

```php
getItemEligibilityPreview($asin, $program, $marketplace_ids): \SellingPartnerApi\Model\FbaInboundEligibilityV1\GetItemEligibilityPreviewResponse
```



This operation gets an eligibility preview for an item that you specify. You can specify the type of eligibility preview that you want (INBOUND or COMMINGLING). For INBOUND previews, you can specify the marketplace in which you want to determine the item's eligibility.

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

$apiInstance = new SellingPartnerApi\Api\FbaInboundEligibilityV1Api($config);
$asin = 'asin_example'; // string | The ASIN of the item for which you want an eligibility preview.
$program = 'program_example'; // string | The program that you want to check eligibility against.
$marketplace_ids = array('marketplace_ids_example'); // string[] | The identifier for the marketplace in which you want to determine eligibility. Required only when program=INBOUND.

try {
    $result = $apiInstance->getItemEligibilityPreview($asin, $program, $marketplace_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FbaInboundEligibilityV1Api->getItemEligibilityPreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asin** | **string**| The ASIN of the item for which you want an eligibility preview. |
 **program** | **string**| The program that you want to check eligibility against. |
 **marketplace_ids** | [**string[]**](../Model/FbaInboundEligibilityV1/string.md)| The identifier for the marketplace in which you want to determine eligibility. Required only when program=INBOUND. | [optional]

### Return type

[**\SellingPartnerApi\Model\FbaInboundEligibilityV1\GetItemEligibilityPreviewResponse**](../Model/FbaInboundEligibilityV1/GetItemEligibilityPreviewResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `ItemEligibilityPreview`

[[Top]](#) [[API list]](../)
[[FbaInboundEligibilityV1 Model list]](../Model/FbaInboundEligibilityV1)
[[README]](../../README.md)
