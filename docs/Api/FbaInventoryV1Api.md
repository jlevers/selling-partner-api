# SellingPartnerApi\FbaInventoryV1Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**getInventorySummaries()**](FbaInventoryV1Api.md#getInventorySummaries) | **GET** /fba/inventory/v1/summaries | 


## `getInventorySummaries()`

```php
getInventorySummaries($granularity_type, $granularity_id, $marketplace_ids, $details, $start_date_time, $seller_skus, $next_token, $seller_sku): \SellingPartnerApi\Model\FbaInventoryV1\GetInventorySummariesResponse
```



Returns a list of inventory summaries. The summaries returned depend on the presence or absence of the `startDateTime`, `sellerSkus` and `sellerSku` parameters:

- All inventory summaries with available details are returned when the `startDateTime`, `sellerSkus` and `sellerSku` parameters are omitted.
- When `startDateTime` is provided, the operation returns inventory summaries that have had changes after the date and time specified. The `sellerSkus` and `sellerSku` parameters are ignored. **Important:** To avoid errors, use both `startDateTime` and `nextToken` to get the next page of inventory summaries that have changed after the date and time specified.
- When the `sellerSkus` parameter is provided, the operation returns inventory summaries for only the specified `sellerSkus`. The `sellerSku` parameter is ignored.
- When the `sellerSku` parameter is provided, the operation returns inventory summaries for only the specified `sellerSku`.

**Note:** The parameters associated with this operation may contain special characters that must be encoded to successfully call the API. To avoid errors with SKUs when encoding URLs, refer to [URL Encoding](https://developer-docs.amazon.com/sp-api/docs/url-encoding).

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

$apiInstance = new SellingPartnerApi\Api\FbaInventoryV1Api($config);
$granularity_type = 'granularity_type_example'; // string | The granularity type for the inventory aggregation level.
$granularity_id = 'granularity_id_example'; // string | The granularity ID for the inventory aggregation level.
$marketplace_ids = array('marketplace_ids_example'); // string[] | The marketplace ID for the marketplace for which to return inventory summaries.
$details = 'false'; // string | 'true' to return inventory summaries with additional summarized inventory details and quantities. Must be the *string* 'true', not the boolean value, due to a bug in Amazon's API implementation. Otherwise, returns inventory summaries only (default value).
$start_date_time = 'start_date_time_example'; // string | A start date and time in ISO8601 format. If specified, all inventory summaries that have changed since then are returned. You must specify a date and time that is no earlier than 18 months prior to the date and time when you call the API. Note: Changes in inboundWorkingQuantity, inboundShippedQuantity and inboundReceivingQuantity are not detected.
$seller_skus = array('seller_skus_example'); // string[] | A list of seller SKUs for which to return inventory summaries. You may specify up to 50 SKUs.
$next_token = 'next_token_example'; // string | String token returned in the response of your previous request. The string token will expire 30 seconds after being created.
$seller_sku = 'seller_sku_example'; // string | A single seller SKU used for querying the specified seller SKU inventory summaries.

try {
    $result = $apiInstance->getInventorySummaries($granularity_type, $granularity_id, $marketplace_ids, $details, $start_date_time, $seller_skus, $next_token, $seller_sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FbaInventoryV1Api->getInventorySummaries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **granularity_type** | **string**| The granularity type for the inventory aggregation level. |
 **granularity_id** | **string**| The granularity ID for the inventory aggregation level. |
 **marketplace_ids** | [**string[]**](../Model/FbaInventoryV1/string.md)| The marketplace ID for the marketplace for which to return inventory summaries. |
 **details** | **string**| 'true' to return inventory summaries with additional summarized inventory details and quantities. Must be the *string* 'true', not the boolean value, due to a bug in Amazon's API implementation. Otherwise, returns inventory summaries only (default value). | [optional] [default to 'false']
 **start_date_time** | **string**| A start date and time in ISO8601 format. If specified, all inventory summaries that have changed since then are returned. You must specify a date and time that is no earlier than 18 months prior to the date and time when you call the API. Note: Changes in inboundWorkingQuantity, inboundShippedQuantity and inboundReceivingQuantity are not detected. | [optional]
 **seller_skus** | [**string[]**](../Model/FbaInventoryV1/string.md)| A list of seller SKUs for which to return inventory summaries. You may specify up to 50 SKUs. | [optional]
 **next_token** | **string**| String token returned in the response of your previous request. The string token will expire 30 seconds after being created. | [optional]
 **seller_sku** | **string**| A single seller SKU used for querying the specified seller SKU inventory summaries. | [optional]

### Return type

[**\SellingPartnerApi\Model\FbaInventoryV1\GetInventorySummariesResponse**](../Model/FbaInventoryV1/GetInventorySummariesResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[FbaInventoryV1 Model list]](../Model/FbaInventoryV1)
[[README]](../../README.md)
