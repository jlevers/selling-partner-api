# SellingPartnerApi\ReplenishmentV20221107Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSellingPartnerMetrics()**](ReplenishmentV20221107Api.md#getSellingPartnerMetrics) | **POST** /replenishment/2022-11-07/sellingPartners/metrics/search | 
[**listOfferMetrics()**](ReplenishmentV20221107Api.md#listOfferMetrics) | **POST** /replenishment/2022-11-07/offers/metrics/search | 
[**listOffers()**](ReplenishmentV20221107Api.md#listOffers) | **POST** /replenishment/2022-11-07/offers/search | 


## `getSellingPartnerMetrics()`

```php
getSellingPartnerMetrics($body): \SellingPartnerApi\Model\ReplenishmentV20221107\GetSellingPartnerMetricsResponse
```



Returns aggregated replenishment program metrics for a selling partner. 

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

$apiInstance = new SellingPartnerApi\Api\ReplenishmentV20221107Api($config);
$body = new \SellingPartnerApi\Model\ReplenishmentV20221107\GetSellingPartnerMetricsRequest(); // \SellingPartnerApi\Model\ReplenishmentV20221107\GetSellingPartnerMetricsRequest

try {
    $result = $apiInstance->getSellingPartnerMetrics($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentV20221107Api->getSellingPartnerMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\ReplenishmentV20221107\GetSellingPartnerMetricsRequest**](../Model/ReplenishmentV20221107/GetSellingPartnerMetricsRequest.md)|  | [optional]

### Return type

[**\SellingPartnerApi\Model\ReplenishmentV20221107\GetSellingPartnerMetricsResponse**](../Model/ReplenishmentV20221107/GetSellingPartnerMetricsResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ReplenishmentV20221107 Model list]](../Model/ReplenishmentV20221107)
[[README]](../../README.md)

## `listOfferMetrics()`

```php
listOfferMetrics($body): \SellingPartnerApi\Model\ReplenishmentV20221107\ListOfferMetricsResponse
```



Returns aggregated replenishment program metrics for a selling partner's offers.

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

$apiInstance = new SellingPartnerApi\Api\ReplenishmentV20221107Api($config);
$body = new \SellingPartnerApi\Model\ReplenishmentV20221107\ListOfferMetricsRequest(); // \SellingPartnerApi\Model\ReplenishmentV20221107\ListOfferMetricsRequest | The request body for the `listOfferMetrics` operation.

try {
    $result = $apiInstance->listOfferMetrics($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentV20221107Api->listOfferMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\ReplenishmentV20221107\ListOfferMetricsRequest**](../Model/ReplenishmentV20221107/ListOfferMetricsRequest.md)| The request body for the `listOfferMetrics` operation. | [optional]

### Return type

[**\SellingPartnerApi\Model\ReplenishmentV20221107\ListOfferMetricsResponse**](../Model/ReplenishmentV20221107/ListOfferMetricsResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ReplenishmentV20221107 Model list]](../Model/ReplenishmentV20221107)
[[README]](../../README.md)

## `listOffers()`

```php
listOffers($body): \SellingPartnerApi\Model\ReplenishmentV20221107\ListOffersResponse
```



Returns the details of a selling partner's replenishment program offers. Note that this operation only supports sellers at this time.

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

$apiInstance = new SellingPartnerApi\Api\ReplenishmentV20221107Api($config);
$body = new \SellingPartnerApi\Model\ReplenishmentV20221107\ListOffersRequest(); // \SellingPartnerApi\Model\ReplenishmentV20221107\ListOffersRequest

try {
    $result = $apiInstance->listOffers($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentV20221107Api->listOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\ReplenishmentV20221107\ListOffersRequest**](../Model/ReplenishmentV20221107/ListOffersRequest.md)|  | [optional]

### Return type

[**\SellingPartnerApi\Model\ReplenishmentV20221107\ListOffersResponse**](../Model/ReplenishmentV20221107/ListOffersResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ReplenishmentV20221107 Model list]](../Model/ReplenishmentV20221107)
[[README]](../../README.md)
