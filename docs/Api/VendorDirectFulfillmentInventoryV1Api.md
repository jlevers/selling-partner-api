# SellingPartnerApi\VendorDirectFulfillmentInventoryV1Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**submitInventoryUpdate()**](VendorDirectFulfillmentInventoryV1Api.md#submitInventoryUpdate) | **POST** /vendor/directFulfillment/inventory/v1/warehouses/{warehouseId}/items | 


## `submitInventoryUpdate()`

```php
submitInventoryUpdate($warehouse_id, $body): \SellingPartnerApi\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse
```



Submits inventory updates for the specified warehouse for either a partial or full feed of inventory items.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 10 | 10 |

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

$apiInstance = new SellingPartnerApi\Api\VendorDirectFulfillmentInventoryV1Api($config);
$warehouse_id = 'warehouse_id_example'; // string | Identifier for the warehouse for which to update inventory.
$body = new \SellingPartnerApi\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateRequest(); // \SellingPartnerApi\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateRequest

try {
    $result = $apiInstance->submitInventoryUpdate($warehouse_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorDirectFulfillmentInventoryV1Api->submitInventoryUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_id** | **string**| Identifier for the warehouse for which to update inventory. |
 **body** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateRequest**](../Model/VendorDirectFulfillmentInventoryV1/SubmitInventoryUpdateRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse**](../Model/VendorDirectFulfillmentInventoryV1/SubmitInventoryUpdateResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[VendorDirectFulfillmentInventoryV1 Model list]](../Model/VendorDirectFulfillmentInventoryV1)
[[README]](../../README.md)
