# SellingPartnerApi\SellersApi

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMarketplaceParticipations()**](SellersApi.md#getMarketplaceParticipations) | **GET** /sellers/v1/marketplaceParticipations | 


## `getMarketplaceParticipations()`

```php
getMarketplaceParticipations(): \SellingPartnerApi\Model\Sellers\GetMarketplaceParticipationsResponse
```



Returns a list of marketplaces that the seller submitting the request can sell in and information about the seller's participation in those marketplaces.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| .016 | 15 |

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

$apiInstance = new SellingPartnerApi\Api\SellersApi($config);

try {
    $result = $apiInstance->getMarketplaceParticipations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SellersApi->getMarketplaceParticipations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SellingPartnerApi\Model\Sellers\GetMarketplaceParticipationsResponse**](../Model/Sellers/GetMarketplaceParticipationsResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `payload`

[[Top]](#) [[API list]](../)
[[Sellers Model list]](../Model/Sellers)
[[README]](../../README.md)
