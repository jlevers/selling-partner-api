# SellingPartnerApi\ProductPricingV20220501Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**getFeaturedOfferExpectedPriceBatch()**](ProductPricingV20220501Api.md#getFeaturedOfferExpectedPriceBatch) | **POST** /batches/products/pricing/2022-05-01/offer/featuredOfferExpectedPrice | 


## `getFeaturedOfferExpectedPriceBatch()`

```php
getFeaturedOfferExpectedPriceBatch($get_featured_offer_expected_price_batch_request_body): \SellingPartnerApi\Model\ProductPricingV20220501\GetFeaturedOfferExpectedPriceBatchResponse
```



Returns the set of responses that correspond to the batched list of up to 40 requests defined in the request body. The response for each successful (HTTP status code 200) request in the set includes the computed listing price at or below which a seller can expect to become the featured offer (before applicable promotions). This is called the featured offer expected price (FOEP). Featured offer is not guaranteed, because competing offers may change, and different offers may be featured based on other factors, including fulfillment capabilities to a specific customer. The response to an unsuccessful request includes the available error text.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 0.033 | 1 |

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

$apiInstance = new SellingPartnerApi\Api\ProductPricingV20220501Api($config);
$get_featured_offer_expected_price_batch_request_body = new \SellingPartnerApi\Model\ProductPricingV20220501\GetFeaturedOfferExpectedPriceBatchRequest(); // \SellingPartnerApi\Model\ProductPricingV20220501\GetFeaturedOfferExpectedPriceBatchRequest

try {
    $result = $apiInstance->getFeaturedOfferExpectedPriceBatch($get_featured_offer_expected_price_batch_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPricingV20220501Api->getFeaturedOfferExpectedPriceBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **get_featured_offer_expected_price_batch_request_body** | [**\SellingPartnerApi\Model\ProductPricingV20220501\GetFeaturedOfferExpectedPriceBatchRequest**](../Model/ProductPricingV20220501/GetFeaturedOfferExpectedPriceBatchRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\ProductPricingV20220501\GetFeaturedOfferExpectedPriceBatchResponse**](../Model/ProductPricingV20220501/GetFeaturedOfferExpectedPriceBatchResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ProductPricingV20220501 Model list]](../Model/ProductPricingV20220501)
[[README]](../../README.md)
