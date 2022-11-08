# SellingPartnerApi\ListingsRestrictionsV20210801Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**getListingsRestrictions()**](ListingsRestrictionsV20210801Api.md#getListingsRestrictions) | **GET** /listings/2021-08-01/restrictions | 


## `getListingsRestrictions()`

```php
getListingsRestrictions($asin, $seller_id, $marketplace_ids, $condition_type, $reason_locale): \SellingPartnerApi\Model\ListingsRestrictionsV20210801\RestrictionList
```



Returns listing restrictions for an item in the Amazon Catalog. 

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

$apiInstance = new SellingPartnerApi\Api\ListingsRestrictionsV20210801Api($config);
$asin = B0000ASIN1; // string | The Amazon Standard Identification Number (ASIN) of the item.
$seller_id = 'seller_id_example'; // string | A selling partner identifier, such as a merchant account.
$marketplace_ids = ATVPDKIKX0DER; // string[] | A comma-delimited list of Amazon marketplace identifiers for the request.
$condition_type = used_very_good; // string | The condition used to filter restrictions.
$reason_locale = en_US; // string | A locale for reason text localization. When not provided, the default language code of the first marketplace is used. Examples: \"en_US\", \"fr_CA\", \"fr_FR\". Localized messages default to \"en_US\" when a localization is not available in the specified locale.

try {
    $result = $apiInstance->getListingsRestrictions($asin, $seller_id, $marketplace_ids, $condition_type, $reason_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsRestrictionsV20210801Api->getListingsRestrictions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asin** | **string**| The Amazon Standard Identification Number (ASIN) of the item. |
 **seller_id** | **string**| A selling partner identifier, such as a merchant account. |
 **marketplace_ids** | [**string[]**](../Model/ListingsRestrictionsV20210801/string.md)| A comma-delimited list of Amazon marketplace identifiers for the request. |
 **condition_type** | **string**| The condition used to filter restrictions. | [optional]
 **reason_locale** | **string**| A locale for reason text localization. When not provided, the default language code of the first marketplace is used. Examples: \"en_US\", \"fr_CA\", \"fr_FR\". Localized messages default to \"en_US\" when a localization is not available in the specified locale. | [optional]

### Return type

[**\SellingPartnerApi\Model\ListingsRestrictionsV20210801\RestrictionList**](../Model/ListingsRestrictionsV20210801/RestrictionList.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ListingsRestrictionsV20210801 Model list]](../Model/ListingsRestrictionsV20210801)
[[README]](../../README.md)
