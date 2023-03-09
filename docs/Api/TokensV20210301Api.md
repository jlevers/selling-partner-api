# SellingPartnerApi\TokensV20210301Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRestrictedDataToken()**](TokensV20210301Api.md#createRestrictedDataToken) | **POST** /tokens/2021-03-01/restrictedDataToken | 


## `createRestrictedDataToken()`

```php
createRestrictedDataToken($body): \SellingPartnerApi\Model\TokensV20210301\CreateRestrictedDataTokenResponse
```



Returns a Restricted Data Token (RDT) for one or more restricted resources that you specify. A restricted resource is the HTTP method and path from a restricted operation that returns Personally Identifiable Information (PII), plus a dataElements value that indicates the type of PII requested. See the Tokens API Use Case Guide for a list of restricted operations. Use the RDT returned here as the access token in subsequent calls to the corresponding restricted operations.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1 | 10 |

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

$apiInstance = new SellingPartnerApi\Api\TokensV20210301Api($config);
$body = new \SellingPartnerApi\Model\TokensV20210301\CreateRestrictedDataTokenRequest(); // \SellingPartnerApi\Model\TokensV20210301\CreateRestrictedDataTokenRequest | The restricted data token request details.

try {
    $result = $apiInstance->createRestrictedDataToken($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensV20210301Api->createRestrictedDataToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\TokensV20210301\CreateRestrictedDataTokenRequest**](../Model/TokensV20210301/CreateRestrictedDataTokenRequest.md)| The restricted data token request details. |

### Return type

[**\SellingPartnerApi\Model\TokensV20210301\CreateRestrictedDataTokenResponse**](../Model/TokensV20210301/CreateRestrictedDataTokenResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[TokensV20210301 Model list]](../Model/TokensV20210301)
[[README]](../../README.md)
