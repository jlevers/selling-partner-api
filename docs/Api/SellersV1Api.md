# SellingPartnerApi\SellersV1Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMarketplaceParticipations()**](SellersV1Api.md#getMarketplaceParticipations) | **GET** /sellers/v1/marketplaceParticipations | 


## `getMarketplaceParticipations()`

```php
getMarketplaceParticipations(): \SellingPartnerApi\Model\SellersV1\GetMarketplaceParticipationsResponse
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

$apiInstance = new SellingPartnerApi\Api\SellersV1Api($config);

try {
    $result = $apiInstance->getMarketplaceParticipations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SellersV1Api->getMarketplaceParticipations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SellingPartnerApi\Model\SellersV1\GetMarketplaceParticipationsResponse**](../Model/SellersV1/GetMarketplaceParticipationsResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `payload`

[[Top]](#) [[API list]](../)
[[SellersV1 Model list]](../Model/SellersV1)
[[README]](../../README.md)
