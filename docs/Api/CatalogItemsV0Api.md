# SellingPartnerApi\CatalogItemsV0Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCatalogItem()**](CatalogItemsV0Api.md#getCatalogItem) | **GET** /catalog/v0/items/{asin} | 
[**listCatalogCategories()**](CatalogItemsV0Api.md#listCatalogCategories) | **GET** /catalog/v0/categories | 
[**listCatalogItems()**](CatalogItemsV0Api.md#listCatalogItems) | **GET** /catalog/v0/items | 


## `getCatalogItem()`

```php
getCatalogItem($marketplace_id, $asin): \SellingPartnerApi\Model\CatalogItemsV0\GetCatalogItemResponse
```



Effective September 30, 2022, the `getCatalogItem` operation will no longer be available in the Selling Partner API for Catalog Items v0. This operation is available in the latest version of the [Selling Partner API for Catalog Items v2022-04-01](https://developer-docs.amazon.com/sp-api/docs/catalog-items-api-v2022-04-01-reference). Integrations that rely on this operation should migrate to the latest version to avoid service disruption. 
_Note:_ The [`listCatalogCategories`](#get-catalogv0categories) operation is not being deprecated and you can continue to make calls to it.

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

$apiInstance = new SellingPartnerApi\Api\CatalogItemsV0Api($config);
$marketplace_id = 'marketplace_id_example'; // string | A marketplace identifier. Specifies the marketplace for the item.
$asin = 'asin_example'; // string | The Amazon Standard Identification Number (ASIN) of the item.

try {
    $result = $apiInstance->getCatalogItem($marketplace_id, $asin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogItemsV0Api->getCatalogItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| A marketplace identifier. Specifies the marketplace for the item. |
 **asin** | **string**| The Amazon Standard Identification Number (ASIN) of the item. |

### Return type

[**\SellingPartnerApi\Model\CatalogItemsV0\GetCatalogItemResponse**](../Model/CatalogItemsV0/GetCatalogItemResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[CatalogItemsV0 Model list]](../Model/CatalogItemsV0)
[[README]](../../README.md)

## `listCatalogCategories()`

```php
listCatalogCategories($marketplace_id, $asin, $seller_sku): \SellingPartnerApi\Model\CatalogItemsV0\ListCatalogCategoriesResponse
```



Returns the parent categories to which an item belongs, based on the specified ASIN or SellerSKU.

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

$apiInstance = new SellingPartnerApi\Api\CatalogItemsV0Api($config);
$marketplace_id = 'marketplace_id_example'; // string | A marketplace identifier. Specifies the marketplace for the item.
$asin = 'asin_example'; // string | The Amazon Standard Identification Number (ASIN) of the item.
$seller_sku = 'seller_sku_example'; // string | Used to identify items in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit.

try {
    $result = $apiInstance->listCatalogCategories($marketplace_id, $asin, $seller_sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogItemsV0Api->listCatalogCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| A marketplace identifier. Specifies the marketplace for the item. |
 **asin** | **string**| The Amazon Standard Identification Number (ASIN) of the item. | [optional]
 **seller_sku** | **string**| Used to identify items in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit. | [optional]

### Return type

[**\SellingPartnerApi\Model\CatalogItemsV0\ListCatalogCategoriesResponse**](../Model/CatalogItemsV0/ListCatalogCategoriesResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[CatalogItemsV0 Model list]](../Model/CatalogItemsV0)
[[README]](../../README.md)

## `listCatalogItems()`

```php
listCatalogItems($marketplace_id, $query, $query_context_id, $seller_sku, $upc, $ean, $isbn, $jan): \SellingPartnerApi\Model\CatalogItemsV0\ListCatalogItemsResponse
```



Effective September 30, 2022, the `listCatalogItems` operation will no longer be available in the Selling Partner API for Catalog Items v0. As an alternative, `searchCatalogItems` is available in the latest version of the [Selling Partner API for Catalog Items v2022-04-01](https://developer-docs.amazon.com/sp-api/docs/catalog-items-api-v2022-04-01-reference). Integrations that rely on the `listCatalogItems` operation should migrate to the `searchCatalogItems`operation to avoid service disruption. 
_Note:_ The [`listCatalogCategories`](#get-catalogv0categories) operation is not being deprecated and you can continue to make calls to it.

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

$apiInstance = new SellingPartnerApi\Api\CatalogItemsV0Api($config);
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
    echo 'Exception when calling CatalogItemsV0Api->listCatalogItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| A marketplace identifier. Specifies the marketplace for which items are returned. |
 **query** | **string**| Keyword(s) to use to search for items in the catalog. Example: 'harry potter books'. | [optional]
 **query_context_id** | **string**| An identifier for the context within which the given search will be performed. A marketplace might provide mechanisms for constraining a search to a subset of potential items. For example, the retail marketplace allows queries to be constrained to a specific category. The QueryContextId parameter specifies such a subset. If it is omitted, the search will be performed using the default context for the marketplace, which will typically contain the largest set of items. | [optional]
 **seller_sku** | **string**| Used to identify an item in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit. | [optional]
 **upc** | **string**| A 12-digit bar code used for retail packaging. | [optional]
 **ean** | **string**| A European article number that uniquely identifies the catalog item, manufacturer, and its attributes. | [optional]
 **isbn** | **string**| The unique commercial book identifier used to identify books internationally. | [optional]
 **jan** | **string**| A Japanese article number that uniquely identifies the product, manufacturer, and its attributes. | [optional]

### Return type

[**\SellingPartnerApi\Model\CatalogItemsV0\ListCatalogItemsResponse**](../Model/CatalogItemsV0/ListCatalogItemsResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[CatalogItemsV0 Model list]](../Model/CatalogItemsV0)
[[README]](../../README.md)
