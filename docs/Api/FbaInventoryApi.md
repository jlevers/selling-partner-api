# SellingPartnerApi\FbaInventoryApi

Method | HTTP request | Description
------------- | ------------- | -------------
[**getInventorySummaries()**](FbaInventoryApi.md#getInventorySummaries) | **GET** /fba/inventory/v1/summaries | 


## `getInventorySummaries()`

```php
getInventorySummaries($granularity_type, $granularity_id, $marketplace_ids, $details, $start_date_time, $seller_skus, $next_token): \SellingPartnerApi\Model\FbaInventory\GetInventorySummariesResponse
```



Returns a list of inventory summaries. The summaries returned depend on the presence or absence of the startDateTime and sellerSkus parameters:

- All inventory summaries with available details are returned when the startDateTime and sellerSkus parameters are omitted.
- When startDateTime is provided, the operation returns inventory summaries that have had changes after the date and time specified. The sellerSkus parameter is ignored.
- When the sellerSkus parameter is provided, the operation returns inventory summaries for only the specified sellerSkus.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 2 | 2 |

For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

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

$apiInstance = new SellingPartnerApi\Api\FbaInventoryApi($config);
$granularity_type = 'granularity_type_example'; // string | The granularity type for the inventory aggregation level.
$granularity_id = 'granularity_id_example'; // string | The granularity ID for the inventory aggregation level.
$marketplace_ids = array('marketplace_ids_example'); // string[] | The marketplace ID for the marketplace for which to return inventory summaries.
$details = 'false'; // string | 'true' to return inventory summaries with additional summarized inventory details and quantities. Must be the *string* 'true', not the boolean value, due to a bug in Amazon's API implementation. Otherwise, returns inventory summaries only (default value).
$start_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | A start date and time in ISO8601 format. If specified, all inventory summaries that have changed since then are returned. You must specify a date and time that is no earlier than 18 months prior to the date and time when you call the API. Note: Changes in inboundWorkingQuantity, inboundShippedQuantity and inboundReceivingQuantity are not detected.
$seller_skus = array('seller_skus_example'); // string[] | A list of seller SKUs for which to return inventory summaries. You may specify up to 50 SKUs.
$next_token = 'next_token_example'; // string | String token returned in the response of your previous request.

try {
    $result = $apiInstance->getInventorySummaries($granularity_type, $granularity_id, $marketplace_ids, $details, $start_date_time, $seller_skus, $next_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FbaInventoryApi->getInventorySummaries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **granularity_type** | **string**| The granularity type for the inventory aggregation level. |
 **granularity_id** | **string**| The granularity ID for the inventory aggregation level. |
 **marketplace_ids** | [**string[]**](../Model/FbaInventory/string.md)| The marketplace ID for the marketplace for which to return inventory summaries. |
 **details** | **string**| &#39;true&#39; to return inventory summaries with additional summarized inventory details and quantities. Must be the *string* &#39;true&#39;, not the boolean value, due to a bug in Amazon&#39;s API implementation. Otherwise, returns inventory summaries only (default value). | [optional] [default to &#39;false&#39;]
 **start_date_time** | **\DateTime**| A start date and time in ISO8601 format. If specified, all inventory summaries that have changed since then are returned. You must specify a date and time that is no earlier than 18 months prior to the date and time when you call the API. Note: Changes in inboundWorkingQuantity, inboundShippedQuantity and inboundReceivingQuantity are not detected. | [optional]
 **seller_skus** | [**string[]**](../Model/FbaInventory/string.md)| A list of seller SKUs for which to return inventory summaries. You may specify up to 50 SKUs. | [optional]
 **next_token** | **string**| String token returned in the response of your previous request. | [optional]

### Return type

[**\SellingPartnerApi\Model\FbaInventory\GetInventorySummariesResponse**](../Model/FbaInventory/GetInventorySummariesResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[FbaInventory Model list]](../Model/FbaInventory)
[[README]](../../README.md)
