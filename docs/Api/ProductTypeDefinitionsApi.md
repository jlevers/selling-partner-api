# SellingPartnerApi\ProductTypeDefinitionsApi

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDefinitionsProductType()**](ProductTypeDefinitionsApi.md#getDefinitionsProductType) | **GET** /definitions/2020-09-01/productTypes/{productType} | 
[**searchDefinitionsProductTypes()**](ProductTypeDefinitionsApi.md#searchDefinitionsProductTypes) | **GET** /definitions/2020-09-01/productTypes | 


## `getDefinitionsProductType()`

```php
getDefinitionsProductType($product_type, $marketplace_ids, $seller_id, $product_type_version, $requirements, $requirements_enforced, $locale): \SellingPartnerApi\Model\ProductTypeDefinitions\ProductTypeDefinition
```



Retrieve an Amazon product type definition.

**Usage Plans:**

| Plan type | Rate (requests per second) | Burst |
| ---- | ---- | ---- |
|Default| 5 | 10 |
|Selling partner specific| Variable | Variable |

The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](https://github.com/amzn/selling-partner-api-docs/blob/main/guides/en-US/usage-plans-rate-limits/Usage-Plans-and-Rate-Limits.md).

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

$apiInstance = new SellingPartnerApi\Api\ProductTypeDefinitionsApi($config);
$product_type = LUGGAGE; // string | The Amazon product type name.
$marketplace_ids = ATVPDKIKX0DER; // string[] | A comma-delimited list of Amazon marketplace identifiers for the request.
Note: This parameter is limited to one marketplaceId at this time.
$seller_id = 'seller_id_example'; // string | A selling partner identifier. When provided, seller-specific requirements and values are populated within the product type definition schema, such as brand names associated with the selling partner.
$product_type_version = LATEST; // string | The version of the Amazon product type to retrieve. Defaults to \"LATEST\",. Prerelease versions of product type definitions may be retrieved with \"RELEASE_CANDIDATE\". If no prerelease version is currently available, the \"LATEST\" live version will be provided.
$requirements = LISTING; // string | The name of the requirements set to retrieve requirements for.
$requirements_enforced = ENFORCED; // string | Identifies if the required attributes for a requirements set are enforced by the product type definition schema. Non-enforced requirements enable structural validation of individual attributes without all the required attributes being present (such as for partial updates).
$locale = DEFAULT; // string | Locale for retrieving display labels and other presentation details. Defaults to the default language of the first marketplace in the request.

try {
    $result = $apiInstance->getDefinitionsProductType($product_type, $marketplace_ids, $seller_id, $product_type_version, $requirements, $requirements_enforced, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypeDefinitionsApi->getDefinitionsProductType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_type** | **string**| The Amazon product type name. |
 **marketplace_ids** | [**string[]**](../Model/ProductTypeDefinitions/string.md)| A comma-delimited list of Amazon marketplace identifiers for the request.
Note: This parameter is limited to one marketplaceId at this time. |
 **seller_id** | **string**| A selling partner identifier. When provided, seller-specific requirements and values are populated within the product type definition schema, such as brand names associated with the selling partner. | [optional]
 **product_type_version** | **string**| The version of the Amazon product type to retrieve. Defaults to \&quot;LATEST\&quot;,. Prerelease versions of product type definitions may be retrieved with \&quot;RELEASE_CANDIDATE\&quot;. If no prerelease version is currently available, the \&quot;LATEST\&quot; live version will be provided. | [optional] [default to &#39;LATEST&#39;]
 **requirements** | **string**| The name of the requirements set to retrieve requirements for. | [optional] [default to &#39;LISTING&#39;]
 **requirements_enforced** | **string**| Identifies if the required attributes for a requirements set are enforced by the product type definition schema. Non-enforced requirements enable structural validation of individual attributes without all the required attributes being present (such as for partial updates). | [optional] [default to &#39;ENFORCED&#39;]
 **locale** | **string**| Locale for retrieving display labels and other presentation details. Defaults to the default language of the first marketplace in the request. | [optional] [default to &#39;DEFAULT&#39;]

### Return type

[**\SellingPartnerApi\Model\ProductTypeDefinitions\ProductTypeDefinition**](../Model/ProductTypeDefinitions/ProductTypeDefinition.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ProductTypeDefinitions Model list]](../Model/ProductTypeDefinitions)
[[README]](../../README.md)

## `searchDefinitionsProductTypes()`

```php
searchDefinitionsProductTypes($marketplace_ids, $keywords): \SellingPartnerApi\Model\ProductTypeDefinitions\ProductTypeList
```



Search for and return a list of Amazon product types that have definitions available.

**Usage Plans:**

| Plan type | Rate (requests per second) | Burst |
| ---- | ---- | ---- |
|Default| 5 | 10 |
|Selling partner specific| Variable | Variable |

The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](https://github.com/amzn/selling-partner-api-docs/blob/main/guides/en-US/usage-plans-rate-limits/Usage-Plans-and-Rate-Limits.md).

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

$apiInstance = new SellingPartnerApi\Api\ProductTypeDefinitionsApi($config);
$marketplace_ids = ATVPDKIKX0DER; // string[] | A comma-delimited list of Amazon marketplace identifiers for the request.
$keywords = LUGGAGE; // string[] | A comma-delimited list of keywords to search product types by.

try {
    $result = $apiInstance->searchDefinitionsProductTypes($marketplace_ids, $keywords);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypeDefinitionsApi->searchDefinitionsProductTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_ids** | [**string[]**](../Model/ProductTypeDefinitions/string.md)| A comma-delimited list of Amazon marketplace identifiers for the request. |
 **keywords** | [**string[]**](../Model/ProductTypeDefinitions/string.md)| A comma-delimited list of keywords to search product types by. | [optional]

### Return type

[**\SellingPartnerApi\Model\ProductTypeDefinitions\ProductTypeList**](../Model/ProductTypeDefinitions/ProductTypeList.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ProductTypeDefinitions Model list]](../Model/ProductTypeDefinitions)
[[README]](../../README.md)
