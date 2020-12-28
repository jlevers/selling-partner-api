# Evers\SellingPartnerApi\FbaInboundEligibilityApi

All URIs are relative to *https://sellingpartnerapi-na.amazon.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getItemEligibilityPreview**](FbaInboundEligibilityApi.md#getItemEligibilityPreview) | **GET** /fba/inbound/v1/eligibility/itemPreview | 


# **getItemEligibilityPreview**
> \Evers\SellingPartnerApi\Model\GetItemEligibilityPreviewResponse getItemEligibilityPreview($asin, $program, $marketplace_ids)



This operation gets an eligibility preview for an item that you specify. You can specify the type of eligibility preview that you want (INBOUND or COMMINGLING). For INBOUND previews, you can specify the marketplace in which you want to determine the item's eligibility.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 1 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\FbaInboundEligibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asin = "asin_example"; // string | The ASIN of the item for which you want an eligibility preview.
$program = "program_example"; // string | The program that you want to check eligibility against.
$marketplace_ids = array("marketplace_ids_example"); // string[] | The identifier for the marketplace in which you want to determine eligibility. Required only when program=INBOUND.

try {
    $result = $apiInstance->getItemEligibilityPreview($asin, $program, $marketplace_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FbaInboundEligibilityApi->getItemEligibilityPreview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asin** | **string**| The ASIN of the item for which you want an eligibility preview. |
 **program** | **string**| The program that you want to check eligibility against. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| The identifier for the marketplace in which you want to determine eligibility. Required only when program&#x3D;INBOUND. | [optional]

### Return type

[**\Evers\SellingPartnerApi\Model\GetItemEligibilityPreviewResponse**](../Model/GetItemEligibilityPreviewResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

