# SellingPartnerApi\ListingsV20210801Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteListingsItem()**](ListingsV20210801Api.md#deleteListingsItem) | **DELETE** /listings/2021-08-01/items/{sellerId}/{sku} | 
[**getListingsItem()**](ListingsV20210801Api.md#getListingsItem) | **GET** /listings/2021-08-01/items/{sellerId}/{sku} | 
[**patchListingsItem()**](ListingsV20210801Api.md#patchListingsItem) | **PATCH** /listings/2021-08-01/items/{sellerId}/{sku} | 
[**putListingsItem()**](ListingsV20210801Api.md#putListingsItem) | **PUT** /listings/2021-08-01/items/{sellerId}/{sku} | 


## `deleteListingsItem()`

```php
deleteListingsItem($seller_id, $sku, $marketplace_ids, $issue_locale): \SellingPartnerApi\Model\ListingsV20210801\ListingsItemSubmissionResponse
```



Delete a listings item for a selling partner.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 5 | 10 |

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

$apiInstance = new SellingPartnerApi\Api\ListingsV20210801Api($config);
$seller_id = 'seller_id_example'; // string | A selling partner identifier, such as a merchant account or vendor code.
$sku = 'sku_example'; // string | A selling partner provided identifier for an Amazon listing.
$marketplace_ids = ATVPDKIKX0DER; // string[] | A comma-delimited list of Amazon marketplace identifiers for the request.
$issue_locale = en_US; // string | A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: \"en_US\", \"fr_CA\", \"fr_FR\". Localized messages default to \"en_US\" when a localization is not available in the specified locale.

try {
    $result = $apiInstance->deleteListingsItem($seller_id, $sku, $marketplace_ids, $issue_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsV20210801Api->deleteListingsItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_id** | **string**| A selling partner identifier, such as a merchant account or vendor code. |
 **sku** | **string**| A selling partner provided identifier for an Amazon listing. |
 **marketplace_ids** | [**string[]**](../Model/ListingsV20210801/string.md)| A comma-delimited list of Amazon marketplace identifiers for the request. |
 **issue_locale** | **string**| A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: \"en_US\", \"fr_CA\", \"fr_FR\". Localized messages default to \"en_US\" when a localization is not available in the specified locale. | [optional]

### Return type

[**\SellingPartnerApi\Model\ListingsV20210801\ListingsItemSubmissionResponse**](../Model/ListingsV20210801/ListingsItemSubmissionResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ListingsV20210801 Model list]](../Model/ListingsV20210801)
[[README]](../../README.md)

## `getListingsItem()`

```php
getListingsItem($seller_id, $sku, $marketplace_ids, $issue_locale, $included_data): \SellingPartnerApi\Model\ListingsV20210801\Item
```



Returns details about a listings item for a selling partner.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 5 | 10 |

The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values then those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

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

$apiInstance = new SellingPartnerApi\Api\ListingsV20210801Api($config);
$seller_id = 'seller_id_example'; // string | A selling partner identifier, such as a merchant account or vendor code.
$sku = 'sku_example'; // string | A selling partner provided identifier for an Amazon listing.
$marketplace_ids = ATVPDKIKX0DER; // string[] | A comma-delimited list of Amazon marketplace identifiers for the request.
$issue_locale = en_US; // string | A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: \"en_US\", \"fr_CA\", \"fr_FR\". Localized messages default to \"en_US\" when a localization is not available in the specified locale.
$included_data = [summaries]; // string[] | A comma-delimited list of data sets to include in the response. Default: summaries.

try {
    $result = $apiInstance->getListingsItem($seller_id, $sku, $marketplace_ids, $issue_locale, $included_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsV20210801Api->getListingsItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_id** | **string**| A selling partner identifier, such as a merchant account or vendor code. |
 **sku** | **string**| A selling partner provided identifier for an Amazon listing. |
 **marketplace_ids** | [**string[]**](../Model/ListingsV20210801/string.md)| A comma-delimited list of Amazon marketplace identifiers for the request. |
 **issue_locale** | **string**| A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: \"en_US\", \"fr_CA\", \"fr_FR\". Localized messages default to \"en_US\" when a localization is not available in the specified locale. | [optional]
 **included_data** | [**string[]**](../Model/ListingsV20210801/string.md)| A comma-delimited list of data sets to include in the response. Default: summaries. | [optional]

### Return type

[**\SellingPartnerApi\Model\ListingsV20210801\Item**](../Model/ListingsV20210801/Item.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ListingsV20210801 Model list]](../Model/ListingsV20210801)
[[README]](../../README.md)

## `patchListingsItem()`

```php
patchListingsItem($seller_id, $sku, $marketplace_ids, $body, $issue_locale): \SellingPartnerApi\Model\ListingsV20210801\ListingsItemSubmissionResponse
```



Partially update (patch) a listings item for a selling partner. Only top-level listings item attributes can be patched. Patching nested attributes is not supported.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 5 | 10 |

The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values then those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

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

$apiInstance = new SellingPartnerApi\Api\ListingsV20210801Api($config);
$seller_id = 'seller_id_example'; // string | A selling partner identifier, such as a merchant account or vendor code.
$sku = 'sku_example'; // string | A selling partner provided identifier for an Amazon listing.
$marketplace_ids = ATVPDKIKX0DER; // string[] | A comma-delimited list of Amazon marketplace identifiers for the request.
$body = new \SellingPartnerApi\Model\ListingsV20210801\ListingsItemPatchRequest(); // \SellingPartnerApi\Model\ListingsV20210801\ListingsItemPatchRequest | The request body schema for the patchListingsItem operation.
$issue_locale = en_US; // string | A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: \"en_US\", \"fr_CA\", \"fr_FR\". Localized messages default to \"en_US\" when a localization is not available in the specified locale.

try {
    $result = $apiInstance->patchListingsItem($seller_id, $sku, $marketplace_ids, $body, $issue_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsV20210801Api->patchListingsItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_id** | **string**| A selling partner identifier, such as a merchant account or vendor code. |
 **sku** | **string**| A selling partner provided identifier for an Amazon listing. |
 **marketplace_ids** | [**string[]**](../Model/ListingsV20210801/string.md)| A comma-delimited list of Amazon marketplace identifiers for the request. |
 **body** | [**\SellingPartnerApi\Model\ListingsV20210801\ListingsItemPatchRequest**](../Model/ListingsV20210801/ListingsItemPatchRequest.md)| The request body schema for the patchListingsItem operation. |
 **issue_locale** | **string**| A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: \"en_US\", \"fr_CA\", \"fr_FR\". Localized messages default to \"en_US\" when a localization is not available in the specified locale. | [optional]

### Return type

[**\SellingPartnerApi\Model\ListingsV20210801\ListingsItemSubmissionResponse**](../Model/ListingsV20210801/ListingsItemSubmissionResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ListingsV20210801 Model list]](../Model/ListingsV20210801)
[[README]](../../README.md)

## `putListingsItem()`

```php
putListingsItem($seller_id, $sku, $marketplace_ids, $body, $issue_locale): \SellingPartnerApi\Model\ListingsV20210801\ListingsItemSubmissionResponse
```



Creates a new or fully-updates an existing listings item for a selling partner.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 5 | 10 |

The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values then those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

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

$apiInstance = new SellingPartnerApi\Api\ListingsV20210801Api($config);
$seller_id = 'seller_id_example'; // string | A selling partner identifier, such as a merchant account or vendor code.
$sku = 'sku_example'; // string | A selling partner provided identifier for an Amazon listing.
$marketplace_ids = ATVPDKIKX0DER; // string[] | A comma-delimited list of Amazon marketplace identifiers for the request.
$body = new \SellingPartnerApi\Model\ListingsV20210801\ListingsItemPutRequest(); // \SellingPartnerApi\Model\ListingsV20210801\ListingsItemPutRequest | The request body schema for the putListingsItem operation.
$issue_locale = en_US; // string | A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: \"en_US\", \"fr_CA\", \"fr_FR\". Localized messages default to \"en_US\" when a localization is not available in the specified locale.

try {
    $result = $apiInstance->putListingsItem($seller_id, $sku, $marketplace_ids, $body, $issue_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsV20210801Api->putListingsItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_id** | **string**| A selling partner identifier, such as a merchant account or vendor code. |
 **sku** | **string**| A selling partner provided identifier for an Amazon listing. |
 **marketplace_ids** | [**string[]**](../Model/ListingsV20210801/string.md)| A comma-delimited list of Amazon marketplace identifiers for the request. |
 **body** | [**\SellingPartnerApi\Model\ListingsV20210801\ListingsItemPutRequest**](../Model/ListingsV20210801/ListingsItemPutRequest.md)| The request body schema for the putListingsItem operation. |
 **issue_locale** | **string**| A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: \"en_US\", \"fr_CA\", \"fr_FR\". Localized messages default to \"en_US\" when a localization is not available in the specified locale. | [optional]

### Return type

[**\SellingPartnerApi\Model\ListingsV20210801\ListingsItemSubmissionResponse**](../Model/ListingsV20210801/ListingsItemSubmissionResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ListingsV20210801 Model list]](../Model/ListingsV20210801)
[[README]](../../README.md)
