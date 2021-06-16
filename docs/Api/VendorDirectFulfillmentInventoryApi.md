# SellingPartnerApi\VendorDirectFulfillmentInventoryApi

All URIs are relative to https://sellingpartnerapi-na.amazon.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**submitInventoryUpdate()**](VendorDirectFulfillmentInventoryApi.md#submitInventoryUpdate) | **POST** /vendor/directFulfillment/inventory/v1/warehouses/{warehouseId}/items | 


## `submitInventoryUpdate()`

```php
submitInventoryUpdate($warehouse_id, $body): \SellingPartnerApi\Model\VendorDirectFulfillmentInventory\SubmitInventoryUpdateResponse
```



Submits inventory updates for the specified warehouse for either a partial or full feed of inventory items.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 10 | 10 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// See README for more information on the ConfigurationOptions object
$configurationOptions = new SellingPartnerApi\ConfigurationOptions(
    "amzn1.application-oa2-client.....",
    "abcd....",
    "Aztr|IwEBI....",
    "AKIA....",
    "ABCD....",
    "us-east-1",
    "https://sellingpartnerapi-na.amazon.com",
);
$config = new SellingPartnerApi\Configuration($configurationOptions);

$apiInstance = new SellingPartnerApi\Api\VendorDirectFulfillmentInventoryApi($config);
$warehouse_id = 'warehouse_id_example'; // string | Identifier for the warehouse for which to update inventory.
$body = new \SellingPartnerApi\Model\VendorDirectFulfillmentInventory\SubmitInventoryUpdateRequest(); // \SellingPartnerApi\Model\VendorDirectFulfillmentInventory\SubmitInventoryUpdateRequest

try {
    $result = $apiInstance->submitInventoryUpdate($warehouse_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorDirectFulfillmentInventoryApi->submitInventoryUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_id** | **string**| Identifier for the warehouse for which to update inventory. |
 **body** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentInventory\SubmitInventoryUpdateRequest**](../Model/VendorDirectFulfillmentInventory/SubmitInventoryUpdateRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\VendorDirectFulfillmentInventory\SubmitInventoryUpdateResponse**](../Model/VendorDirectFulfillmentInventory/SubmitInventoryUpdateResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[VendorDirectFulfillmentInventory Model list]](../Model/VendorDirectFulfillmentInventory)
[[README]](../../README.md)