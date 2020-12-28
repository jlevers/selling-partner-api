# Evers\SellingPartnerApi\UploadsApi

All URIs are relative to *https://sellingpartnerapi-na.amazon.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUploadDestinationForResource**](UploadsApi.md#createUploadDestinationForResource) | **POST** /uploads/2020-11-01/uploadDestinations/{resource} | 


# **createUploadDestinationForResource**
> \Evers\SellingPartnerApi\Model\CreateUploadDestinationResponse createUploadDestinationForResource($marketplace_ids, $content_md5, $resource, $content_type)



Creates an upload destination for a resource that you specify and returns the information required to upload to that destination.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | .1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\UploadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marketplace_ids = array("marketplace_ids_example"); // string[] | A list of marketplace identifiers. This specifies the marketplaces where the upload will be available. Only one marketplace can be specified.
$content_md5 = "content_md5_example"; // string | An MD5 hash of the content to be submitted to the upload destination. This value is used to determine if the data has been corrupted or tampered with during transit.
$resource = "resource_example"; // string | The URL of the resource for the upload destination that you are creating. For example, to create an upload destination for a Buyer-Seller Messaging message, the {resource} would be /messaging and the path would be  /uploads/v1/uploadDestinations/messaging
$content_type = "content_type_example"; // string | The content type of the file to be uploaded.

try {
    $result = $apiInstance->createUploadDestinationForResource($marketplace_ids, $content_md5, $resource, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadsApi->createUploadDestinationForResource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_ids** | [**string[]**](../Model/string.md)| A list of marketplace identifiers. This specifies the marketplaces where the upload will be available. Only one marketplace can be specified. |
 **content_md5** | **string**| An MD5 hash of the content to be submitted to the upload destination. This value is used to determine if the data has been corrupted or tampered with during transit. |
 **resource** | **string**| The URL of the resource for the upload destination that you are creating. For example, to create an upload destination for a Buyer-Seller Messaging message, the {resource} would be /messaging and the path would be  /uploads/v1/uploadDestinations/messaging |
 **content_type** | **string**| The content type of the file to be uploaded. | [optional]

### Return type

[**\Evers\SellingPartnerApi\Model\CreateUploadDestinationResponse**](../Model/CreateUploadDestinationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

