# SellingPartnerApi\CatalogItemsV20220401Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCatalogItem()**](CatalogItemsV20220401Api.md#getCatalogItem) | **GET** /catalog/2022-04-01/items/{asin} | 
[**searchCatalogItems()**](CatalogItemsV20220401Api.md#searchCatalogItems) | **GET** /catalog/2022-04-01/items | 


## `getCatalogItem()`

```php
getCatalogItem($asin, $marketplace_ids, $included_data, $locale): \SellingPartnerApi\Model\CatalogItemsV20220401\Item
```



Retrieves details for an item in the Amazon catalog.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 2 | 2 |

The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may observe higher rate and burst values than those shown here. For more information, refer to the [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

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

$apiInstance = new SellingPartnerApi\Api\CatalogItemsV20220401Api($config);
$asin = 'asin_example'; // string | The Amazon Standard Identification Number (ASIN) of the item.
$marketplace_ids = ATVPDKIKX0DER; // string[] | A comma-delimited list of Amazon marketplace identifiers. Data sets in the response contain data only for the specified marketplaces.
$included_data = summaries; // string[] | A comma-delimited list of data sets to include in the response. Default: `summaries`.
$locale = en_US; // string | Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace.

try {
    $result = $apiInstance->getCatalogItem($asin, $marketplace_ids, $included_data, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogItemsV20220401Api->getCatalogItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asin** | **string**| The Amazon Standard Identification Number (ASIN) of the item. |
 **marketplace_ids** | [**string[]**](../Model/CatalogItemsV20220401/string.md)| A comma-delimited list of Amazon marketplace identifiers. Data sets in the response contain data only for the specified marketplaces. |
 **included_data** | [**string[]**](../Model/CatalogItemsV20220401/string.md)| A comma-delimited list of data sets to include in the response. Default: `summaries`. | [optional]
 **locale** | **string**| Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. | [optional]

### Return type

[**\SellingPartnerApi\Model\CatalogItemsV20220401\Item**](../Model/CatalogItemsV20220401/Item.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[CatalogItemsV20220401 Model list]](../Model/CatalogItemsV20220401)
[[README]](../../README.md)

## `searchCatalogItems()`

```php
searchCatalogItems($marketplace_ids, $identifiers, $identifiers_type, $included_data, $locale, $seller_id, $keywords, $brand_names, $classification_ids, $page_size, $page_token, $keywords_locale): \SellingPartnerApi\Model\CatalogItemsV20220401\ItemSearchResults
```



Search for and return a list of Amazon catalog items and associated information either by identifier or by keywords.

**Usage Plans:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 2 | 2 |

The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may observe higher rate and burst values than those shown here. For more information, refer to the [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

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

$apiInstance = new SellingPartnerApi\Api\CatalogItemsV20220401Api($config);
$marketplace_ids = ATVPDKIKX0DER; // string[] | A comma-delimited list of Amazon marketplace identifiers for the request.
$identifiers = shoes; // string[] | A comma-delimited list of product identifiers to search the Amazon catalog for. **Note:** Cannot be used with `keywords`.
$identifiers_type = ASIN; // string | Type of product identifiers to search the Amazon catalog for. **Note:** Required when `identifiers` are provided.
$included_data = summaries; // string[] | A comma-delimited list of data sets to include in the response. Default: `summaries`.
$locale = en_US; // string | Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace.
$seller_id = 'seller_id_example'; // string | A selling partner identifier, such as a seller account or vendor code. **Note:** Required when `identifiersType` is `SKU`.
$keywords = shoes; // string[] | A comma-delimited list of words to search the Amazon catalog for. **Note:** Cannot be used with `identifiers`.
$brand_names = Beautiful Boats; // string[] | A comma-delimited list of brand names to limit the search for `keywords`-based queries. **Note:** Cannot be used with `identifiers`.
$classification_ids = 12345678; // string[] | A comma-delimited list of classification identifiers to limit the search for `keywords`-based queries. **Note:** Cannot be used with `identifiers`.
$page_size = 9; // int | Number of results to be returned per page.
$page_token = sdlkj234lkj234lksjdflkjwdflkjsfdlkj234234234234; // string | A token to fetch a certain page when there are multiple pages worth of results.
$keywords_locale = en_US; // string | The language of the keywords provided for `keywords`-based queries. Defaults to the primary locale of the marketplace. **Note:** Cannot be used with `identifiers`.

try {
    $result = $apiInstance->searchCatalogItems($marketplace_ids, $identifiers, $identifiers_type, $included_data, $locale, $seller_id, $keywords, $brand_names, $classification_ids, $page_size, $page_token, $keywords_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogItemsV20220401Api->searchCatalogItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_ids** | [**string[]**](../Model/CatalogItemsV20220401/string.md)| A comma-delimited list of Amazon marketplace identifiers for the request. |
 **identifiers** | [**string[]**](../Model/CatalogItemsV20220401/string.md)| A comma-delimited list of product identifiers to search the Amazon catalog for. **Note:** Cannot be used with `keywords`. | [optional]
 **identifiers_type** | **string**| Type of product identifiers to search the Amazon catalog for. **Note:** Required when `identifiers` are provided. | [optional]
 **included_data** | [**string[]**](../Model/CatalogItemsV20220401/string.md)| A comma-delimited list of data sets to include in the response. Default: `summaries`. | [optional]
 **locale** | **string**| Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. | [optional]
 **seller_id** | **string**| A selling partner identifier, such as a seller account or vendor code. **Note:** Required when `identifiersType` is `SKU`. | [optional]
 **keywords** | [**string[]**](../Model/CatalogItemsV20220401/string.md)| A comma-delimited list of words to search the Amazon catalog for. **Note:** Cannot be used with `identifiers`. | [optional]
 **brand_names** | [**string[]**](../Model/CatalogItemsV20220401/string.md)| A comma-delimited list of brand names to limit the search for `keywords`-based queries. **Note:** Cannot be used with `identifiers`. | [optional]
 **classification_ids** | [**string[]**](../Model/CatalogItemsV20220401/string.md)| A comma-delimited list of classification identifiers to limit the search for `keywords`-based queries. **Note:** Cannot be used with `identifiers`. | [optional]
 **page_size** | **int**| Number of results to be returned per page. | [optional] [default to 10]
 **page_token** | **string**| A token to fetch a certain page when there are multiple pages worth of results. | [optional]
 **keywords_locale** | **string**| The language of the keywords provided for `keywords`-based queries. Defaults to the primary locale of the marketplace. **Note:** Cannot be used with `identifiers`. | [optional]

### Return type

[**\SellingPartnerApi\Model\CatalogItemsV20220401\ItemSearchResults**](../Model/CatalogItemsV20220401/ItemSearchResults.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[CatalogItemsV20220401 Model list]](../Model/CatalogItemsV20220401)
[[README]](../../README.md)
