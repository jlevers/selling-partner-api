# Evers\SellingPartnerApi\FeesApi

All URIs are relative to *https://sellingpartnerapi-na.amazon.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMyFeesEstimateForASIN**](FeesApi.md#getMyFeesEstimateForASIN) | **POST** /products/fees/v0/items/{Asin}/feesEstimate | 
[**getMyFeesEstimateForSKU**](FeesApi.md#getMyFeesEstimateForSKU) | **POST** /products/fees/v0/listings/{SellerSKU}/feesEstimate | 


# **getMyFeesEstimateForASIN**
> \Evers\SellingPartnerApi\Model\GetMyFeesEstimateResponse getMyFeesEstimateForASIN($body, $asin)



Returns the estimated fees for the item indicated by the specified Asin in the marketplace specified in the request body.  You can call getMyFeesEstimateForASIN for an item on behalf of a seller before the seller sets the item's price. They can then take estimated fees into account. With each product fees request, you must include an original identifier. This identifier is included in the fees estimate so you can correlate a fees estimate with the original request.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 1 | 1 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\FeesApi(
);
$body = new \Evers\SellingPartnerApi\Model\GetMyFeesEstimateRequest(); // \Evers\SellingPartnerApi\Model\GetMyFeesEstimateRequest | 
$asin = "asin_example"; // string | The Amazon Standard Identification Number (ASIN) of the item.

try {
    $result = $apiInstance->getMyFeesEstimateForASIN($body, $asin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeesApi->getMyFeesEstimateForASIN: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Evers\SellingPartnerApi\Model\GetMyFeesEstimateRequest**](../Model/GetMyFeesEstimateRequest.md)|  |
 **asin** | **string**| The Amazon Standard Identification Number (ASIN) of the item. |

### Return type

[**\Evers\SellingPartnerApi\Model\GetMyFeesEstimateResponse**](../Model/GetMyFeesEstimateResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Top]](#) [[API list]](../) [[Model list]](../Model) [[README]](../../README.md)

# **getMyFeesEstimateForSKU**
> \Evers\SellingPartnerApi\Model\GetMyFeesEstimateResponse getMyFeesEstimateForSKU($body, $seller_sku)



Returns the estimated fees for the item indicated by the specified seller SKU in the marketplace specified in the request body.  You can call getMyFeesEstimateForSKU for an item on behalf of a seller before the seller sets the item's price. They can then take estimated fees into account. With each fees estimate request, you must include an original identifier. This identifier is included in the fees estimate so you can correlate a fees estimate with the original request.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 1 | 1 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\FeesApi(
);
$body = new \Evers\SellingPartnerApi\Model\GetMyFeesEstimateRequest(); // \Evers\SellingPartnerApi\Model\GetMyFeesEstimateRequest | 
$seller_sku = "seller_sku_example"; // string | Used to identify an item in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit.

try {
    $result = $apiInstance->getMyFeesEstimateForSKU($body, $seller_sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeesApi->getMyFeesEstimateForSKU: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Evers\SellingPartnerApi\Model\GetMyFeesEstimateRequest**](../Model/GetMyFeesEstimateRequest.md)|  |
 **seller_sku** | **string**| Used to identify an item in the given marketplace. SellerSKU is qualified by the seller&#39;s SellerId, which is included with every operation that you submit. |

### Return type

[**\Evers\SellingPartnerApi\Model\GetMyFeesEstimateResponse**](../Model/GetMyFeesEstimateResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Top]](#) [[API list]](../) [[Model list]](../Model) [[README]](../../README.md)

