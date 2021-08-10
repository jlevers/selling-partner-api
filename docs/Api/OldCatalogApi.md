# SellingPartnerApi\OldCatalogApi

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCatalogItem()**](OldCatalogApi.md#getCatalogItem) | **GET** /catalog/v0/items/{asin} | 
[**listCatalogCategories()**](OldCatalogApi.md#listCatalogCategories) | **GET** /catalog/v0/categories | 
[**listCatalogItems()**](OldCatalogApi.md#listCatalogItems) | **GET** /catalog/v0/items | 


## `getCatalogItem()`

```php
getCatalogItem($marketplace_id, $asin): \SellingPartnerApi\Model\OldCatalog\GetCatalogItemResponse
```



Returns a specified item and its attributes.

**Usage Plans:**

| Plan type | Rate (requests per second) | Burst |
| ---- | ---- | ---- |
|Default| 2 | 20 |
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

$apiInstance = new SellingPartnerApi\Api\OldCatalogApi($config);
$marketplace_id = 'marketplace_id_example'; // string | A marketplace identifier. Specifies the marketplace for the item.
$asin = 'asin_example'; // string | The Amazon Standard Identification Number (ASIN) of the item.

try {
    $result = $apiInstance->getCatalogItem($marketplace_id, $asin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OldCatalogApi->getCatalogItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| A marketplace identifier. Specifies the marketplace for the item. |
 **asin** | **string**| The Amazon Standard Identification Number (ASIN) of the item. |

### Return type

[**\SellingPartnerApi\Model\OldCatalog\GetCatalogItemResponse**](../Model/OldCatalog/GetCatalogItemResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[OldCatalog Model list]](../Model/OldCatalog)
[[README]](../../README.md)

## `listCatalogCategories()`

```php
listCatalogCategories($marketplace_id, $asin, $seller_sku): \SellingPartnerApi\Model\OldCatalog\ListCatalogCategoriesResponse
```



Returns the parent categories to which an item belongs, based on the specified ASIN or SellerSKU.

**Usage Plans:**

| Plan type | Rate (requests per second) | Burst |
| ---- | ---- | ---- |
|Default| 1 | 40 |
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

$apiInstance = new SellingPartnerApi\Api\OldCatalogApi($config);
$marketplace_id = 'marketplace_id_example'; // string | A marketplace identifier. Specifies the marketplace for the item.
$asin = 'asin_example'; // string | The Amazon Standard Identification Number (ASIN) of the item.
$seller_sku = 'seller_sku_example'; // string | Used to identify items in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit.

try {
    $result = $apiInstance->listCatalogCategories($marketplace_id, $asin, $seller_sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OldCatalogApi->listCatalogCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| A marketplace identifier. Specifies the marketplace for the item. |
 **asin** | **string**| The Amazon Standard Identification Number (ASIN) of the item. | [optional]
 **seller_sku** | **string**| Used to identify items in the given marketplace. SellerSKU is qualified by the seller&#39;s SellerId, which is included with every operation that you submit. | [optional]

### Return type

[**\SellingPartnerApi\Model\OldCatalog\ListCatalogCategoriesResponse**](../Model/OldCatalog/ListCatalogCategoriesResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[OldCatalog Model list]](../Model/OldCatalog)
[[README]](../../README.md)

## `listCatalogItems()`

```php
listCatalogItems($marketplace_id, $query, $query_context_id, $seller_sku, $upc, $ean, $isbn, $jan): \SellingPartnerApi\Model\OldCatalog\ListCatalogItemsResponse
```



Returns a list of items and their attributes, based on a search query or item identifiers that you specify. When based on a search query, provide the Query parameter and optionally, the QueryContextId parameter. When based on item identifiers, provide a single appropriate parameter based on the identifier type, and specify the associated item value.

MarketplaceId is always required. At least one of Query, SellerSKU, UPC, EAN, ISBN, JAN is also required.

This operation returns a maximum of ten products and does not return non-buyable products.

**Usage Plans:**

| Plan type | Rate (requests per second) | Burst |
| ---- | ---- | ---- |
|Default| 6 | 40 |
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

$apiInstance = new SellingPartnerApi\Api\OldCatalogApi($config);
$marketplace_id = 'marketplace_id_example'; // string | A marketplace identifier. Specifies the marketplace for which items are returned.
$query = 'query_example'; // string | Keyword(s) to use to search for items in the catalog. Example: 'harry potter books'.
$query_context_id = 'query_context_id_example'; // string | An identifier for the context within which the given search will be performed. A marketplace might provide mechanisms for constraining a search to a subset of potential items. For example, the retail marketplace allows queries to be constrained to a specific category. The QueryContextId parameter specifies such a subset. If it is omitted, the search will be performed using the default context for the marketplace, which will typically contain the largest set of items.
$seller_sku = 'seller_sku_example'; // string | Used to identify an item in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit.
$upc = 'upc_example'; // string | A 12-digit bar code used for retail packaging.
$ean = 'ean_example'; // string | A European article number that uniquely identifies the catalog item, manufacturer, and its attributes.
$isbn = 'isbn_example'; // string | The unique commercial book identifier used to identify books internationally.
$jan = 'jan_example'; // string | A Japanese article number that uniquely identifies the product, manufacturer, and its attributes.

try {
    $result = $apiInstance->listCatalogItems($marketplace_id, $query, $query_context_id, $seller_sku, $upc, $ean, $isbn, $jan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OldCatalogApi->listCatalogItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| A marketplace identifier. Specifies the marketplace for which items are returned. |
 **query** | **string**| Keyword(s) to use to search for items in the catalog. Example: &#39;harry potter books&#39;. | [optional]
 **query_context_id** | **string**| An identifier for the context within which the given search will be performed. A marketplace might provide mechanisms for constraining a search to a subset of potential items. For example, the retail marketplace allows queries to be constrained to a specific category. The QueryContextId parameter specifies such a subset. If it is omitted, the search will be performed using the default context for the marketplace, which will typically contain the largest set of items. | [optional]
 **seller_sku** | **string**| Used to identify an item in the given marketplace. SellerSKU is qualified by the seller&#39;s SellerId, which is included with every operation that you submit. | [optional]
 **upc** | **string**| A 12-digit bar code used for retail packaging. | [optional]
 **ean** | **string**| A European article number that uniquely identifies the catalog item, manufacturer, and its attributes. | [optional]
 **isbn** | **string**| The unique commercial book identifier used to identify books internationally. | [optional]
 **jan** | **string**| A Japanese article number that uniquely identifies the product, manufacturer, and its attributes. | [optional]

### Return type

[**\SellingPartnerApi\Model\OldCatalog\ListCatalogItemsResponse**](../Model/OldCatalog/ListCatalogItemsResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[OldCatalog Model list]](../Model/OldCatalog)
[[README]](../../README.md)
