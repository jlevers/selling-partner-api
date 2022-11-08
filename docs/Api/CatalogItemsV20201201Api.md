# SellingPartnerApi\CatalogItemsV20201201Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCatalogItem()**](CatalogItemsV20201201Api.md#getCatalogItem) | **GET** /catalog/2020-12-01/items/{asin} | 
[**searchCatalogItems()**](CatalogItemsV20201201Api.md#searchCatalogItems) | **GET** /catalog/2020-12-01/items | 


## `getCatalogItem()`

```php
getCatalogItem($asin, $marketplace_ids, $included_data, $locale): \SellingPartnerApi\Model\CatalogItemsV20201201\Item
```



Retrieves details for an item in the Amazon catalog.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 2 | 2 |

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

$apiInstance = new SellingPartnerApi\Api\CatalogItemsV20201201Api($config);
$asin = 'asin_example'; // string | The Amazon Standard Identification Number (ASIN) of the item.
$marketplace_ids = ATVPDKIKX0DER; // string[] | A comma-delimited list of Amazon marketplace identifiers. Data sets in the response contain data only for the specified marketplaces.
$included_data = summaries; // string[] | A comma-delimited list of data sets to include in the response. Default: summaries.
$locale = en_US; // string | Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace.

try {
    $result = $apiInstance->getCatalogItem($asin, $marketplace_ids, $included_data, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogItemsV20201201Api->getCatalogItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asin** | **string**| The Amazon Standard Identification Number (ASIN) of the item. |
 **marketplace_ids** | [**string[]**](../Model/CatalogItemsV20201201/string.md)| A comma-delimited list of Amazon marketplace identifiers. Data sets in the response contain data only for the specified marketplaces. |
 **included_data** | [**string[]**](../Model/CatalogItemsV20201201/string.md)| A comma-delimited list of data sets to include in the response. Default: summaries. | [optional]
 **locale** | **string**| Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. | [optional]

### Return type

[**\SellingPartnerApi\Model\CatalogItemsV20201201\Item**](../Model/CatalogItemsV20201201/Item.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[CatalogItemsV20201201 Model list]](../Model/CatalogItemsV20201201)
[[README]](../../README.md)

## `searchCatalogItems()`

```php
searchCatalogItems($keywords, $marketplace_ids, $included_data, $brand_names, $classification_ids, $page_size, $page_token, $keywords_locale, $locale): \SellingPartnerApi\Model\CatalogItemsV20201201\ItemSearchResults
```



Search for and return a list of Amazon catalog items and associated information.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 2 | 2 |

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

$apiInstance = new SellingPartnerApi\Api\CatalogItemsV20201201Api($config);
$keywords = shoes; // string[] | A comma-delimited list of words or item identifiers to search the Amazon catalog for.
$marketplace_ids = ATVPDKIKX0DER; // string[] | A comma-delimited list of Amazon marketplace identifiers for the request.
$included_data = summaries; // string[] | A comma-delimited list of data sets to include in the response. Default: summaries.
$brand_names = Beautiful Boats; // string[] | A comma-delimited list of brand names to limit the search to.
$classification_ids = 12345678; // string[] | A comma-delimited list of classification identifiers to limit the search to.
$page_size = 9; // int | Number of results to be returned per page.
$page_token = sdlkj234lkj234lksjdflkjwdflkjsfdlkj234234234234; // string | A token to fetch a certain page when there are multiple pages worth of results.
$keywords_locale = en_US; // string | The language the keywords are provided in. Defaults to the primary locale of the marketplace.
$locale = en_US; // string | Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace.

try {
    $result = $apiInstance->searchCatalogItems($keywords, $marketplace_ids, $included_data, $brand_names, $classification_ids, $page_size, $page_token, $keywords_locale, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogItemsV20201201Api->searchCatalogItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keywords** | [**string[]**](../Model/CatalogItemsV20201201/string.md)| A comma-delimited list of words or item identifiers to search the Amazon catalog for. |
 **marketplace_ids** | [**string[]**](../Model/CatalogItemsV20201201/string.md)| A comma-delimited list of Amazon marketplace identifiers for the request. |
 **included_data** | [**string[]**](../Model/CatalogItemsV20201201/string.md)| A comma-delimited list of data sets to include in the response. Default: summaries. | [optional]
 **brand_names** | [**string[]**](../Model/CatalogItemsV20201201/string.md)| A comma-delimited list of brand names to limit the search to. | [optional]
 **classification_ids** | [**string[]**](../Model/CatalogItemsV20201201/string.md)| A comma-delimited list of classification identifiers to limit the search to. | [optional]
 **page_size** | **int**| Number of results to be returned per page. | [optional] [default to 10]
 **page_token** | **string**| A token to fetch a certain page when there are multiple pages worth of results. | [optional]
 **keywords_locale** | **string**| The language the keywords are provided in. Defaults to the primary locale of the marketplace. | [optional]
 **locale** | **string**| Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. | [optional]

### Return type

[**\SellingPartnerApi\Model\CatalogItemsV20201201\ItemSearchResults**](../Model/CatalogItemsV20201201/ItemSearchResults.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[CatalogItemsV20201201 Model list]](../Model/CatalogItemsV20201201)
[[README]](../../README.md)
