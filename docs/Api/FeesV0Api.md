# SellingPartnerApi\FeesV0Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMyFeesEstimateForASIN()**](FeesV0Api.md#getMyFeesEstimateForASIN) | **POST** /products/fees/v0/items/{Asin}/feesEstimate | 
[**getMyFeesEstimateForSKU()**](FeesV0Api.md#getMyFeesEstimateForSKU) | **POST** /products/fees/v0/listings/{SellerSKU}/feesEstimate | 


## `getMyFeesEstimateForASIN()`

```php
getMyFeesEstimateForASIN($asin, $body): \SellingPartnerApi\Model\FeesV0\GetMyFeesEstimateResponse
```



Returns the estimated fees for the item indicated by the specified Asin in the marketplace specified in the request body.

You can call getMyFeesEstimateForASIN for an item on behalf of a selling partner before the selling partner sets the item's price. They can then take estimated fees into account. With each product fees request, you must include an original identifier. This identifier is included in the fees estimate so you can correlate a fees estimate with the original request.

**Note:** This value is only an estimate, actual costs may vary. Search \"fees\" in [Seller Central](https://sellercentral.amazon.com/) and consult the store-specific fee schedule for the most up-to-date information.

**Usage Plans:**

| Plan type | Rate (requests per second) | Burst |
| ---- | ---- | ---- |
|Default| 10 | 20 |
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

$apiInstance = new SellingPartnerApi\Api\FeesV0Api($config);
$asin = 'asin_example'; // string | The Amazon Standard Identification Number (ASIN) of the item.
$body = new \SellingPartnerApi\Model\FeesV0\GetMyFeesEstimateRequest(); // \SellingPartnerApi\Model\FeesV0\GetMyFeesEstimateRequest

try {
    $result = $apiInstance->getMyFeesEstimateForASIN($asin, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeesV0Api->getMyFeesEstimateForASIN: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asin** | **string**| The Amazon Standard Identification Number (ASIN) of the item. |
 **body** | [**\SellingPartnerApi\Model\FeesV0\GetMyFeesEstimateRequest**](../Model/FeesV0/GetMyFeesEstimateRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\FeesV0\GetMyFeesEstimateResponse**](../Model/FeesV0/GetMyFeesEstimateResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[FeesV0 Model list]](../Model/FeesV0)
[[README]](../../README.md)

## `getMyFeesEstimateForSKU()`

```php
getMyFeesEstimateForSKU($seller_sku, $body): \SellingPartnerApi\Model\FeesV0\GetMyFeesEstimateResponse
```



Returns the estimated fees for the item indicated by the specified seller SKU in the marketplace specified in the request body.

You can call getMyFeesEstimateForSKU for an item on behalf of a selling partner before the selling partner sets the item's price. They can then take estimated fees into account. With each fees estimate request, you must include an original identifier. This identifier is included in the fees estimate so you can correlate a fees estimate with the original request.

**Note:** This value is only an estimate, actual costs may vary. Search \"fees\" in [Seller Central](https://sellercentral.amazon.com/) and consult the store-specific fee schedule for the most up-to-date information.

**Usage Plans:**

| Plan type | Rate (requests per second) | Burst |
| ---- | ---- | ---- |
|Default| 10 | 20 |
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

$apiInstance = new SellingPartnerApi\Api\FeesV0Api($config);
$seller_sku = 'seller_sku_example'; // string | Used to identify an item in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit.
$body = new \SellingPartnerApi\Model\FeesV0\GetMyFeesEstimateRequest(); // \SellingPartnerApi\Model\FeesV0\GetMyFeesEstimateRequest

try {
    $result = $apiInstance->getMyFeesEstimateForSKU($seller_sku, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeesV0Api->getMyFeesEstimateForSKU: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_sku** | **string**| Used to identify an item in the given marketplace. SellerSKU is qualified by the seller&#39;s SellerId, which is included with every operation that you submit. |
 **body** | [**\SellingPartnerApi\Model\FeesV0\GetMyFeesEstimateRequest**](../Model/FeesV0/GetMyFeesEstimateRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\FeesV0\GetMyFeesEstimateResponse**](../Model/FeesV0/GetMyFeesEstimateResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[FeesV0 Model list]](../Model/FeesV0)
[[README]](../../README.md)
