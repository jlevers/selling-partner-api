# Evers\SellingPartnerApi\ProductPricingApi

All URIs are relative to https://sellingpartnerapi-na.amazon.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCompetitivePricing()**](ProductPricingApi.md#getCompetitivePricing) | **GET** /products/pricing/v0/competitivePrice | 
[**getItemOffers()**](ProductPricingApi.md#getItemOffers) | **GET** /products/pricing/v0/items/{Asin}/offers | 
[**getListingOffers()**](ProductPricingApi.md#getListingOffers) | **GET** /products/pricing/v0/listings/{SellerSKU}/offers | 
[**getPricing()**](ProductPricingApi.md#getPricing) | **GET** /products/pricing/v0/price | 


## `getCompetitivePricing()`

```php
getCompetitivePricing($marketplace_id, $item_type, $asins, $skus): \Evers\SellingPartnerApi\Model\ProductPricing\GetPricingResponse
```



Returns competitive pricing information for a seller's offer listings based on seller SKU or ASIN.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 1 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\ProductPricingApi();
$marketplace_id = 'marketplace_id_example'; // string | A marketplace identifier. Specifies the marketplace for which prices are returned.
$item_type = 'item_type_example'; // string | Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. Possible values: Asin, Sku.
$asins = array('asins_example'); // string[] | A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace.
$skus = array('skus_example'); // string[] | A list of up to twenty seller SKU values used to identify items in the given marketplace.

try {
    $result = $apiInstance->getCompetitivePricing($marketplace_id, $item_type, $asins, $skus);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPricingApi->getCompetitivePricing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| A marketplace identifier. Specifies the marketplace for which prices are returned. |
 **item_type** | **string**| Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. Possible values: Asin, Sku. |
 **asins** | [**string[]**](../Model/ProductPricingstring.md)| A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace. | [optional]
 **skus** | [**string[]**](../Model/ProductPricingstring.md)| A list of up to twenty seller SKU values used to identify items in the given marketplace. | [optional]

### Return type

[**\Evers\SellingPartnerApi\Model\ProductPricing\GetPricingResponse**](../Model/ProductPricing/GetPricingResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ProductPricing Model list]](../Model/ProductPricing)
[[README]](../../README.md)

## `getItemOffers()`

```php
getItemOffers($marketplace_id, $item_condition, $asin): \Evers\SellingPartnerApi\Model\ProductPricing\GetOffersResponse
```



Returns the lowest priced offers for a single item based on ASIN.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 1 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\ProductPricingApi();
$marketplace_id = 'marketplace_id_example'; // string | A marketplace identifier. Specifies the marketplace for which prices are returned.
$item_condition = 'item_condition_example'; // string | Filters the offer listings to be considered based on item condition. Possible values: New, Used, Collectible, Refurbished, Club.
$asin = 'asin_example'; // string | The Amazon Standard Identification Number (ASIN) of the item.

try {
    $result = $apiInstance->getItemOffers($marketplace_id, $item_condition, $asin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPricingApi->getItemOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| A marketplace identifier. Specifies the marketplace for which prices are returned. |
 **item_condition** | **string**| Filters the offer listings to be considered based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. |
 **asin** | **string**| The Amazon Standard Identification Number (ASIN) of the item. |

### Return type

[**\Evers\SellingPartnerApi\Model\ProductPricing\GetOffersResponse**](../Model/ProductPricing/GetOffersResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ProductPricing Model list]](../Model/ProductPricing)
[[README]](../../README.md)

## `getListingOffers()`

```php
getListingOffers($marketplace_id, $item_condition, $seller_sku): \Evers\SellingPartnerApi\Model\ProductPricing\GetOffersResponse
```



Returns the lowest priced offers for a single SKU listing.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 1 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\ProductPricingApi();
$marketplace_id = 'marketplace_id_example'; // string | A marketplace identifier. Specifies the marketplace for which prices are returned.
$item_condition = 'item_condition_example'; // string | Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club.
$seller_sku = 'seller_sku_example'; // string | Identifies an item in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit.

try {
    $result = $apiInstance->getListingOffers($marketplace_id, $item_condition, $seller_sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPricingApi->getListingOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| A marketplace identifier. Specifies the marketplace for which prices are returned. |
 **item_condition** | **string**| Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. |
 **seller_sku** | **string**| Identifies an item in the given marketplace. SellerSKU is qualified by the seller&#39;s SellerId, which is included with every operation that you submit. |

### Return type

[**\Evers\SellingPartnerApi\Model\ProductPricing\GetOffersResponse**](../Model/ProductPricing/GetOffersResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ProductPricing Model list]](../Model/ProductPricing)
[[README]](../../README.md)

## `getPricing()`

```php
getPricing($marketplace_id, $item_type, $asins, $skus, $item_condition): \Evers\SellingPartnerApi\Model\ProductPricing\GetPricingResponse
```



Returns pricing information for a seller's offer listings based on seller SKU or ASIN.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 1 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\ProductPricingApi();
$marketplace_id = 'marketplace_id_example'; // string | A marketplace identifier. Specifies the marketplace for which prices are returned.
$item_type = 'item_type_example'; // string | Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter.
$asins = array('asins_example'); // string[] | A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace.
$skus = array('skus_example'); // string[] | A list of up to twenty seller SKU values used to identify items in the given marketplace.
$item_condition = 'item_condition_example'; // string | Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club.

try {
    $result = $apiInstance->getPricing($marketplace_id, $item_type, $asins, $skus, $item_condition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPricingApi->getPricing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| A marketplace identifier. Specifies the marketplace for which prices are returned. |
 **item_type** | **string**| Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. |
 **asins** | [**string[]**](../Model/ProductPricingstring.md)| A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace. | [optional]
 **skus** | [**string[]**](../Model/ProductPricingstring.md)| A list of up to twenty seller SKU values used to identify items in the given marketplace. | [optional]
 **item_condition** | **string**| Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. | [optional]

### Return type

[**\Evers\SellingPartnerApi\Model\ProductPricing\GetPricingResponse**](../Model/ProductPricing/GetPricingResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ProductPricing Model list]](../Model/ProductPricing)
[[README]](../../README.md)
