# SellingPartnerApi\ProductPricingV0Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCompetitivePricing()**](ProductPricingV0Api.md#getCompetitivePricing) | **GET** /products/pricing/v0/competitivePrice | 
[**getItemOffers()**](ProductPricingV0Api.md#getItemOffers) | **GET** /products/pricing/v0/items/{Asin}/offers | 
[**getItemOffersBatch()**](ProductPricingV0Api.md#getItemOffersBatch) | **POST** /batches/products/pricing/v0/itemOffers | 
[**getListingOffers()**](ProductPricingV0Api.md#getListingOffers) | **GET** /products/pricing/v0/listings/{SellerSKU}/offers | 
[**getListingOffersBatch()**](ProductPricingV0Api.md#getListingOffersBatch) | **POST** /batches/products/pricing/v0/listingOffers | 
[**getPricing()**](ProductPricingV0Api.md#getPricing) | **GET** /products/pricing/v0/price | 


## `getCompetitivePricing()`

```php
getCompetitivePricing($marketplace_id, $item_type, $asins, $skus, $customer_type): \SellingPartnerApi\Model\ProductPricingV0\GetPricingResponse
```



Returns competitive pricing information for a seller's offer listings based on seller SKU or ASIN.

**Note:** The parameters associated with this operation may contain special characters that require URL encoding to call the API. To avoid errors with SKUs when encoding URLs, refer to [URL Encoding](https://developer-docs.amazon.com/sp-api/docs/url-encoding).

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 0.5 | 1 |

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

$apiInstance = new SellingPartnerApi\Api\ProductPricingV0Api($config);
$marketplace_id = 'marketplace_id_example'; // string | A marketplace identifier. Specifies the marketplace for which prices are returned.
$item_type = 'item_type_example'; // string | Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. Possible values: Asin, Sku.
$asins = array('asins_example'); // string[] | A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace.
$skus = array('skus_example'); // string[] | A list of up to twenty seller SKU values used to identify items in the given marketplace.
$customer_type = 'customer_type_example'; // string | Indicates whether to request pricing information from the point of view of Consumer or Business buyers. Default is Consumer.

try {
    $result = $apiInstance->getCompetitivePricing($marketplace_id, $item_type, $asins, $skus, $customer_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPricingV0Api->getCompetitivePricing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| A marketplace identifier. Specifies the marketplace for which prices are returned. |
 **item_type** | **string**| Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. Possible values: Asin, Sku. |
 **asins** | [**string[]**](../Model/ProductPricingV0/string.md)| A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace. | [optional]
 **skus** | [**string[]**](../Model/ProductPricingV0/string.md)| A list of up to twenty seller SKU values used to identify items in the given marketplace. | [optional]
 **customer_type** | **string**| Indicates whether to request pricing information from the point of view of Consumer or Business buyers. Default is Consumer. | [optional]

### Return type

[**\SellingPartnerApi\Model\ProductPricingV0\GetPricingResponse**](../Model/ProductPricingV0/GetPricingResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ProductPricingV0 Model list]](../Model/ProductPricingV0)
[[README]](../../README.md)

## `getItemOffers()`

```php
getItemOffers($marketplace_id, $item_condition, $asin, $customer_type): \SellingPartnerApi\Model\ProductPricingV0\GetOffersResponse
```



Returns the lowest priced offers for a single item based on ASIN.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 0.5 | 1 |

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

$apiInstance = new SellingPartnerApi\Api\ProductPricingV0Api($config);
$marketplace_id = 'marketplace_id_example'; // string | A marketplace identifier. Specifies the marketplace for which prices are returned.
$item_condition = 'item_condition_example'; // string | Filters the offer listings to be considered based on item condition. Possible values: New, Used, Collectible, Refurbished, Club.
$asin = 'asin_example'; // string | The Amazon Standard Identification Number (ASIN) of the item.
$customer_type = 'customer_type_example'; // string | Indicates whether to request Consumer or Business offers. Default is Consumer.

try {
    $result = $apiInstance->getItemOffers($marketplace_id, $item_condition, $asin, $customer_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPricingV0Api->getItemOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| A marketplace identifier. Specifies the marketplace for which prices are returned. |
 **item_condition** | **string**| Filters the offer listings to be considered based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. |
 **asin** | **string**| The Amazon Standard Identification Number (ASIN) of the item. |
 **customer_type** | **string**| Indicates whether to request Consumer or Business offers. Default is Consumer. | [optional]

### Return type

[**\SellingPartnerApi\Model\ProductPricingV0\GetOffersResponse**](../Model/ProductPricingV0/GetOffersResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ProductPricingV0 Model list]](../Model/ProductPricingV0)
[[README]](../../README.md)

## `getItemOffersBatch()`

```php
getItemOffersBatch($get_item_offers_batch_request_body): \SellingPartnerApi\Model\ProductPricingV0\GetItemOffersBatchResponse
```



Returns the lowest priced offers for a batch of items based on ASIN.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 0.5 | 1 |

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

$apiInstance = new SellingPartnerApi\Api\ProductPricingV0Api($config);
$get_item_offers_batch_request_body = new \SellingPartnerApi\Model\ProductPricingV0\GetItemOffersBatchRequest(); // \SellingPartnerApi\Model\ProductPricingV0\GetItemOffersBatchRequest

try {
    $result = $apiInstance->getItemOffersBatch($get_item_offers_batch_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPricingV0Api->getItemOffersBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **get_item_offers_batch_request_body** | [**\SellingPartnerApi\Model\ProductPricingV0\GetItemOffersBatchRequest**](../Model/ProductPricingV0/GetItemOffersBatchRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\ProductPricingV0\GetItemOffersBatchResponse**](../Model/ProductPricingV0/GetItemOffersBatchResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ProductPricingV0 Model list]](../Model/ProductPricingV0)
[[README]](../../README.md)

## `getListingOffers()`

```php
getListingOffers($marketplace_id, $item_condition, $seller_sku, $customer_type): \SellingPartnerApi\Model\ProductPricingV0\GetOffersResponse
```



Returns the lowest priced offers for a single SKU listing.

**Note:** The parameters associated with this operation may contain special characters that require URL encoding to call the API. To avoid errors with SKUs when encoding URLs, refer to [URL Encoding](https://developer-docs.amazon.com/sp-api/docs/url-encoding).

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1 | 2 |

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

$apiInstance = new SellingPartnerApi\Api\ProductPricingV0Api($config);
$marketplace_id = 'marketplace_id_example'; // string | A marketplace identifier. Specifies the marketplace for which prices are returned.
$item_condition = 'item_condition_example'; // string | Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club.
$seller_sku = 'seller_sku_example'; // string | Identifies an item in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit.
$customer_type = 'customer_type_example'; // string | Indicates whether to request Consumer or Business offers. Default is Consumer.

try {
    $result = $apiInstance->getListingOffers($marketplace_id, $item_condition, $seller_sku, $customer_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPricingV0Api->getListingOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| A marketplace identifier. Specifies the marketplace for which prices are returned. |
 **item_condition** | **string**| Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. |
 **seller_sku** | **string**| Identifies an item in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit. |
 **customer_type** | **string**| Indicates whether to request Consumer or Business offers. Default is Consumer. | [optional]

### Return type

[**\SellingPartnerApi\Model\ProductPricingV0\GetOffersResponse**](../Model/ProductPricingV0/GetOffersResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ProductPricingV0 Model list]](../Model/ProductPricingV0)
[[README]](../../README.md)

## `getListingOffersBatch()`

```php
getListingOffersBatch($get_listing_offers_batch_request_body): \SellingPartnerApi\Model\ProductPricingV0\GetListingOffersBatchResponse
```



Returns the lowest priced offers for a batch of listings by SKU.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 0.5 | 1 |

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

$apiInstance = new SellingPartnerApi\Api\ProductPricingV0Api($config);
$get_listing_offers_batch_request_body = new \SellingPartnerApi\Model\ProductPricingV0\GetListingOffersBatchRequest(); // \SellingPartnerApi\Model\ProductPricingV0\GetListingOffersBatchRequest

try {
    $result = $apiInstance->getListingOffersBatch($get_listing_offers_batch_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPricingV0Api->getListingOffersBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **get_listing_offers_batch_request_body** | [**\SellingPartnerApi\Model\ProductPricingV0\GetListingOffersBatchRequest**](../Model/ProductPricingV0/GetListingOffersBatchRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\ProductPricingV0\GetListingOffersBatchResponse**](../Model/ProductPricingV0/GetListingOffersBatchResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ProductPricingV0 Model list]](../Model/ProductPricingV0)
[[README]](../../README.md)

## `getPricing()`

```php
getPricing($marketplace_id, $item_type, $asins, $skus, $item_condition, $offer_type): \SellingPartnerApi\Model\ProductPricingV0\GetPricingResponse
```



Returns pricing information for a seller's offer listings based on seller SKU or ASIN.

**Note:** The parameters associated with this operation may contain special characters that require URL encoding to call the API. To avoid errors with SKUs when encoding URLs, refer to [URL Encoding](https://developer-docs.amazon.com/sp-api/docs/url-encoding).

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 0.5 | 1 |

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

$apiInstance = new SellingPartnerApi\Api\ProductPricingV0Api($config);
$marketplace_id = 'marketplace_id_example'; // string | A marketplace identifier. Specifies the marketplace for which prices are returned.
$item_type = 'item_type_example'; // string | Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter.
$asins = array('asins_example'); // string[] | A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace.
$skus = array('skus_example'); // string[] | A list of up to twenty seller SKU values used to identify items in the given marketplace.
$item_condition = 'item_condition_example'; // string | Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club.
$offer_type = 'offer_type_example'; // string | Indicates whether to request pricing information for the seller's B2C or B2B offers. Default is B2C.

try {
    $result = $apiInstance->getPricing($marketplace_id, $item_type, $asins, $skus, $item_condition, $offer_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPricingV0Api->getPricing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| A marketplace identifier. Specifies the marketplace for which prices are returned. |
 **item_type** | **string**| Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. |
 **asins** | [**string[]**](../Model/ProductPricingV0/string.md)| A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace. | [optional]
 **skus** | [**string[]**](../Model/ProductPricingV0/string.md)| A list of up to twenty seller SKU values used to identify items in the given marketplace. | [optional]
 **item_condition** | **string**| Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. | [optional]
 **offer_type** | **string**| Indicates whether to request pricing information for the seller's B2C or B2B offers. Default is B2C. | [optional]

### Return type

[**\SellingPartnerApi\Model\ProductPricingV0\GetPricingResponse**](../Model/ProductPricingV0/GetPricingResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ProductPricingV0 Model list]](../Model/ProductPricingV0)
[[README]](../../README.md)
