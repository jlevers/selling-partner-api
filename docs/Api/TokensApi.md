# SellingPartnerApi\TokensApi

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRestrictedDataToken()**](TokensApi.md#createRestrictedDataToken) | **POST** /tokens/2021-03-01/restrictedDataToken | 


## `createRestrictedDataToken()`

```php
createRestrictedDataToken($body): \SellingPartnerApi\Model\Tokens\CreateRestrictedDataTokenResponse
```



Returns a Restricted Data Token (RDT) for one or more restricted resources that you specify. A restricted resource is the HTTP method and path from a restricted operation that returns Personally Identifiable Information (PII), plus a dataElements value that indicates the type of PII requested. See the Tokens API Use Case Guide for a list of restricted operations. Use the RDT returned here as the access token in subsequent calls to the corresponding restricted operations.

**Usage Plans:**

| Plan type | Rate (requests per second) | Burst |
| ---- | ---- | ---- |
|Default| 1 | 10 |
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

$apiInstance = new SellingPartnerApi\Api\TokensApi($config);
$body = new \SellingPartnerApi\Model\Tokens\CreateRestrictedDataTokenRequest(); // \SellingPartnerApi\Model\Tokens\CreateRestrictedDataTokenRequest | The restricted data token request details.

try {
    $result = $apiInstance->createRestrictedDataToken($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->createRestrictedDataToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\Tokens\CreateRestrictedDataTokenRequest**](../Model/Tokens/CreateRestrictedDataTokenRequest.md)| The restricted data token request details. |

### Return type

[**\SellingPartnerApi\Model\Tokens\CreateRestrictedDataTokenResponse**](../Model/Tokens/CreateRestrictedDataTokenResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[Tokens Model list]](../Model/Tokens)
[[README]](../../README.md)
