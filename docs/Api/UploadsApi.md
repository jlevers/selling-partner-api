# SellingPartnerApi\UploadsApi

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUploadDestinationForResource()**](UploadsApi.md#createUploadDestinationForResource) | **POST** /uploads/2020-11-01/uploadDestinations/{resource} | 


## `createUploadDestinationForResource()`

```php
createUploadDestinationForResource($marketplace_ids, $content_md5, $resource, $content_type): \SellingPartnerApi\Model\Uploads\CreateUploadDestinationResponse
```



Creates an upload destination, returning the information required to upload a file to the destination and to programmatically access the file.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| .1 | 5 |

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

$apiInstance = new SellingPartnerApi\Api\UploadsApi($config);
$marketplace_ids = array('marketplace_ids_example'); // string[] | A list of marketplace identifiers. This specifies the marketplaces where the upload will be available. Only one marketplace can be specified.
$content_md5 = 'content_md5_example'; // string | An MD5 hash of the content to be submitted to the upload destination. This value is used to determine if the data has been corrupted or tampered with during transit.
$resource = 'resource_example'; // string | The resource for the upload destination that you are creating. For example, if you are creating an upload destination for the createLegalDisclosure operation of the Messaging API, the {resource} would be /messaging/v1/orders/{amazonOrderId}/messages/legalDisclosure, and the entire path would be /uploads/2020-11-01/uploadDestinations/messaging/v1/orders/{amazonOrderId}/messages/legalDisclosure.
$content_type = 'content_type_example'; // string | The content type of the file to be uploaded.

try {
    $result = $apiInstance->createUploadDestinationForResource($marketplace_ids, $content_md5, $resource, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadsApi->createUploadDestinationForResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_ids** | [**string[]**](../Model/Uploads/string.md)| A list of marketplace identifiers. This specifies the marketplaces where the upload will be available. Only one marketplace can be specified. |
 **content_md5** | **string**| An MD5 hash of the content to be submitted to the upload destination. This value is used to determine if the data has been corrupted or tampered with during transit. |
 **resource** | **string**| The resource for the upload destination that you are creating. For example, if you are creating an upload destination for the createLegalDisclosure operation of the Messaging API, the {resource} would be /messaging/v1/orders/{amazonOrderId}/messages/legalDisclosure, and the entire path would be /uploads/2020-11-01/uploadDestinations/messaging/v1/orders/{amazonOrderId}/messages/legalDisclosure. |
 **content_type** | **string**| The content type of the file to be uploaded. | [optional]

### Return type

[**\SellingPartnerApi\Model\Uploads\CreateUploadDestinationResponse**](../Model/Uploads/CreateUploadDestinationResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[Uploads Model list]](../Model/Uploads)
[[README]](../../README.md)
