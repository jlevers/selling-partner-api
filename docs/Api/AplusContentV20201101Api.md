# SellingPartnerApi\AplusContentV20201101Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**createContentDocument()**](AplusContentV20201101Api.md#createContentDocument) | **POST** /aplus/2020-11-01/contentDocuments | 
[**getContentDocument()**](AplusContentV20201101Api.md#getContentDocument) | **GET** /aplus/2020-11-01/contentDocuments/{contentReferenceKey} | 
[**listContentDocumentAsinRelations()**](AplusContentV20201101Api.md#listContentDocumentAsinRelations) | **GET** /aplus/2020-11-01/contentDocuments/{contentReferenceKey}/asins | 
[**postContentDocumentApprovalSubmission()**](AplusContentV20201101Api.md#postContentDocumentApprovalSubmission) | **POST** /aplus/2020-11-01/contentDocuments/{contentReferenceKey}/approvalSubmissions | 
[**postContentDocumentAsinRelations()**](AplusContentV20201101Api.md#postContentDocumentAsinRelations) | **POST** /aplus/2020-11-01/contentDocuments/{contentReferenceKey}/asins | 
[**postContentDocumentSuspendSubmission()**](AplusContentV20201101Api.md#postContentDocumentSuspendSubmission) | **POST** /aplus/2020-11-01/contentDocuments/{contentReferenceKey}/suspendSubmissions | 
[**searchContentDocuments()**](AplusContentV20201101Api.md#searchContentDocuments) | **GET** /aplus/2020-11-01/contentDocuments | 
[**searchContentPublishRecords()**](AplusContentV20201101Api.md#searchContentPublishRecords) | **GET** /aplus/2020-11-01/contentPublishRecords | 
[**updateContentDocument()**](AplusContentV20201101Api.md#updateContentDocument) | **POST** /aplus/2020-11-01/contentDocuments/{contentReferenceKey} | 
[**validateContentDocumentAsinRelations()**](AplusContentV20201101Api.md#validateContentDocumentAsinRelations) | **POST** /aplus/2020-11-01/contentAsinValidations | 


## `createContentDocument()`

```php
createContentDocument($marketplace_id, $post_content_document_request): \SellingPartnerApi\Model\AplusContentV20201101\PostContentDocumentResponse
```



Creates a new A+ Content document.

**Usage Plans:**

| Plan type | Rate (requests per second) | Burst |
| ---- | ---- | ---- |
|Default| 10 | 10 |
|Selling partner specific| Variable | Variable |

The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

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

$apiInstance = new SellingPartnerApi\Api\AplusContentV20201101Api($config);
$marketplace_id = 'marketplace_id_example'; // string | The identifier for the marketplace where the A+ Content is published.
$post_content_document_request = new \SellingPartnerApi\Model\AplusContentV20201101\PostContentDocumentRequest(); // \SellingPartnerApi\Model\AplusContentV20201101\PostContentDocumentRequest | The content document request details.

try {
    $result = $apiInstance->createContentDocument($marketplace_id, $post_content_document_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AplusContentV20201101Api->createContentDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| The identifier for the marketplace where the A+ Content is published. |
 **post_content_document_request** | [**\SellingPartnerApi\Model\AplusContentV20201101\PostContentDocumentRequest**](../Model/AplusContentV20201101/PostContentDocumentRequest.md)| The content document request details. |

### Return type

[**\SellingPartnerApi\Model\AplusContentV20201101\PostContentDocumentResponse**](../Model/AplusContentV20201101/PostContentDocumentResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[AplusContentV20201101 Model list]](../Model/AplusContentV20201101)
[[README]](../../README.md)

## `getContentDocument()`

```php
getContentDocument($content_reference_key, $marketplace_id, $included_data_set): \SellingPartnerApi\Model\AplusContentV20201101\GetContentDocumentResponse
```



Returns an A+ Content document, if available.

**Usage Plans:**

| Plan type | Rate (requests per second) | Burst |
| ---- | ---- | ---- |
|Default| 10 | 10 |
|Selling partner specific| Variable | Variable |

The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

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

$apiInstance = new SellingPartnerApi\Api\AplusContentV20201101Api($config);
$content_reference_key = 'content_reference_key_example'; // string | The unique reference key for the A+ Content document. A content reference key cannot form a permalink and may change in the future. A content reference key is not guaranteed to match any A+ Content identifier.
$marketplace_id = 'marketplace_id_example'; // string | The identifier for the marketplace where the A+ Content is published.
$included_data_set = array('included_data_set_example'); // string[] | The set of A+ Content data types to include in the response.

try {
    $result = $apiInstance->getContentDocument($content_reference_key, $marketplace_id, $included_data_set);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AplusContentV20201101Api->getContentDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_reference_key** | **string**| The unique reference key for the A+ Content document. A content reference key cannot form a permalink and may change in the future. A content reference key is not guaranteed to match any A+ Content identifier. |
 **marketplace_id** | **string**| The identifier for the marketplace where the A+ Content is published. |
 **included_data_set** | [**string[]**](../Model/AplusContentV20201101/string.md)| The set of A+ Content data types to include in the response. |

### Return type

[**\SellingPartnerApi\Model\AplusContentV20201101\GetContentDocumentResponse**](../Model/AplusContentV20201101/GetContentDocumentResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[AplusContentV20201101 Model list]](../Model/AplusContentV20201101)
[[README]](../../README.md)

## `listContentDocumentAsinRelations()`

```php
listContentDocumentAsinRelations($content_reference_key, $marketplace_id, $included_data_set, $asin_set, $page_token): \SellingPartnerApi\Model\AplusContentV20201101\ListContentDocumentAsinRelationsResponse
```



Returns a list of ASINs related to the specified A+ Content document, if available. If you do not include the asinSet parameter, the operation returns all ASINs related to the content document.

**Usage Plans:**

| Plan type | Rate (requests per second) | Burst |
| ---- | ---- | ---- |
|Default| 10 | 10 |
|Selling partner specific| Variable | Variable |

The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

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

$apiInstance = new SellingPartnerApi\Api\AplusContentV20201101Api($config);
$content_reference_key = 'content_reference_key_example'; // string | The unique reference key for the A+ Content document. A content reference key cannot form a permalink and may change in the future. A content reference key is not guaranteed to match any A+ Content identifier.
$marketplace_id = 'marketplace_id_example'; // string | The identifier for the marketplace where the A+ Content is published.
$included_data_set = array('included_data_set_example'); // string[] | The set of A+ Content data types to include in the response. If you do not include this parameter, the operation returns the related ASINs without metadata.
$asin_set = array('asin_set_example'); // string[] | The set of ASINs.
$page_token = 'page_token_example'; // string | A page token from the nextPageToken response element returned by your previous call to this operation. nextPageToken is returned when the results of a call exceed the page size. To get the next page of results, call the operation and include pageToken as the only parameter. Specifying pageToken with any other parameter will cause the request to fail. When no nextPageToken value is returned there are no more pages to return. A pageToken value is not usable across different operations.

try {
    $result = $apiInstance->listContentDocumentAsinRelations($content_reference_key, $marketplace_id, $included_data_set, $asin_set, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AplusContentV20201101Api->listContentDocumentAsinRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_reference_key** | **string**| The unique reference key for the A+ Content document. A content reference key cannot form a permalink and may change in the future. A content reference key is not guaranteed to match any A+ Content identifier. |
 **marketplace_id** | **string**| The identifier for the marketplace where the A+ Content is published. |
 **included_data_set** | [**string[]**](../Model/AplusContentV20201101/string.md)| The set of A+ Content data types to include in the response. If you do not include this parameter, the operation returns the related ASINs without metadata. | [optional]
 **asin_set** | [**string[]**](../Model/AplusContentV20201101/string.md)| The set of ASINs. | [optional]
 **page_token** | **string**| A page token from the nextPageToken response element returned by your previous call to this operation. nextPageToken is returned when the results of a call exceed the page size. To get the next page of results, call the operation and include pageToken as the only parameter. Specifying pageToken with any other parameter will cause the request to fail. When no nextPageToken value is returned there are no more pages to return. A pageToken value is not usable across different operations. | [optional]

### Return type

[**\SellingPartnerApi\Model\AplusContentV20201101\ListContentDocumentAsinRelationsResponse**](../Model/AplusContentV20201101/ListContentDocumentAsinRelationsResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[AplusContentV20201101 Model list]](../Model/AplusContentV20201101)
[[README]](../../README.md)

## `postContentDocumentApprovalSubmission()`

```php
postContentDocumentApprovalSubmission($content_reference_key, $marketplace_id): \SellingPartnerApi\Model\AplusContentV20201101\PostContentDocumentApprovalSubmissionResponse
```



Submits an A+ Content document for review, approval, and publishing.

**Usage Plans:**

| Plan type | Rate (requests per second) | Burst |
| ---- | ---- | ---- |
|Default| 10 | 10 |
|Selling partner specific| Variable | Variable |

The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

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

$apiInstance = new SellingPartnerApi\Api\AplusContentV20201101Api($config);
$content_reference_key = 'content_reference_key_example'; // string | The unique reference key for the A+ Content document. A content reference key cannot form a permalink and may change in the future. A content reference key is not guaranteed to match any A+ content identifier.
$marketplace_id = 'marketplace_id_example'; // string | The identifier for the marketplace where the A+ Content is published.

try {
    $result = $apiInstance->postContentDocumentApprovalSubmission($content_reference_key, $marketplace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AplusContentV20201101Api->postContentDocumentApprovalSubmission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_reference_key** | **string**| The unique reference key for the A+ Content document. A content reference key cannot form a permalink and may change in the future. A content reference key is not guaranteed to match any A+ content identifier. |
 **marketplace_id** | **string**| The identifier for the marketplace where the A+ Content is published. |

### Return type

[**\SellingPartnerApi\Model\AplusContentV20201101\PostContentDocumentApprovalSubmissionResponse**](../Model/AplusContentV20201101/PostContentDocumentApprovalSubmissionResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[AplusContentV20201101 Model list]](../Model/AplusContentV20201101)
[[README]](../../README.md)

## `postContentDocumentAsinRelations()`

```php
postContentDocumentAsinRelations($content_reference_key, $marketplace_id, $post_content_document_asin_relations_request): \SellingPartnerApi\Model\AplusContentV20201101\PostContentDocumentAsinRelationsResponse
```



Replaces all ASINs related to the specified A+ Content document, if available. This may add or remove ASINs, depending on the current set of related ASINs. Removing an ASIN has the side effect of suspending the content document from that ASIN.

**Usage Plans:**

| Plan type | Rate (requests per second) | Burst |
| ---- | ---- | ---- |
|Default| 10 | 10 |
|Selling partner specific| Variable | Variable |

The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

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

$apiInstance = new SellingPartnerApi\Api\AplusContentV20201101Api($config);
$content_reference_key = 'content_reference_key_example'; // string | The unique reference key for the A+ Content document. A content reference key cannot form a permalink and may change in the future. A content reference key is not guaranteed to match any A+ content identifier.
$marketplace_id = 'marketplace_id_example'; // string | The identifier for the marketplace where the A+ Content is published.
$post_content_document_asin_relations_request = new \SellingPartnerApi\Model\AplusContentV20201101\PostContentDocumentAsinRelationsRequest(); // \SellingPartnerApi\Model\AplusContentV20201101\PostContentDocumentAsinRelationsRequest | The content document ASIN relations request details.

try {
    $result = $apiInstance->postContentDocumentAsinRelations($content_reference_key, $marketplace_id, $post_content_document_asin_relations_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AplusContentV20201101Api->postContentDocumentAsinRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_reference_key** | **string**| The unique reference key for the A+ Content document. A content reference key cannot form a permalink and may change in the future. A content reference key is not guaranteed to match any A+ content identifier. |
 **marketplace_id** | **string**| The identifier for the marketplace where the A+ Content is published. |
 **post_content_document_asin_relations_request** | [**\SellingPartnerApi\Model\AplusContentV20201101\PostContentDocumentAsinRelationsRequest**](../Model/AplusContentV20201101/PostContentDocumentAsinRelationsRequest.md)| The content document ASIN relations request details. |

### Return type

[**\SellingPartnerApi\Model\AplusContentV20201101\PostContentDocumentAsinRelationsResponse**](../Model/AplusContentV20201101/PostContentDocumentAsinRelationsResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[AplusContentV20201101 Model list]](../Model/AplusContentV20201101)
[[README]](../../README.md)

## `postContentDocumentSuspendSubmission()`

```php
postContentDocumentSuspendSubmission($content_reference_key, $marketplace_id): \SellingPartnerApi\Model\AplusContentV20201101\PostContentDocumentSuspendSubmissionResponse
```



Submits a request to suspend visible A+ Content. This neither deletes the content document nor the ASIN relations.

**Usage Plans:**

| Plan type | Rate (requests per second) | Burst |
| ---- | ---- | ---- |
|Default| 10 | 10 |
|Selling partner specific| Variable | Variable |

The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

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

$apiInstance = new SellingPartnerApi\Api\AplusContentV20201101Api($config);
$content_reference_key = 'content_reference_key_example'; // string | The unique reference key for the A+ Content document. A content reference key cannot form a permalink and may change in the future. A content reference key is not guaranteed to match any A+ content identifier.
$marketplace_id = 'marketplace_id_example'; // string | The identifier for the marketplace where the A+ Content is published.

try {
    $result = $apiInstance->postContentDocumentSuspendSubmission($content_reference_key, $marketplace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AplusContentV20201101Api->postContentDocumentSuspendSubmission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_reference_key** | **string**| The unique reference key for the A+ Content document. A content reference key cannot form a permalink and may change in the future. A content reference key is not guaranteed to match any A+ content identifier. |
 **marketplace_id** | **string**| The identifier for the marketplace where the A+ Content is published. |

### Return type

[**\SellingPartnerApi\Model\AplusContentV20201101\PostContentDocumentSuspendSubmissionResponse**](../Model/AplusContentV20201101/PostContentDocumentSuspendSubmissionResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[AplusContentV20201101 Model list]](../Model/AplusContentV20201101)
[[README]](../../README.md)

## `searchContentDocuments()`

```php
searchContentDocuments($marketplace_id, $page_token): \SellingPartnerApi\Model\AplusContentV20201101\SearchContentDocumentsResponse
```



Returns a list of all A+ Content documents assigned to a selling partner. This operation returns only the metadata of the A+ Content documents. Call the getContentDocument operation to get the actual contents of the A+ Content documents.

**Usage Plans:**

| Plan type | Rate (requests per second) | Burst |
| ---- | ---- | ---- |
|Default| 10 | 10 |
|Selling partner specific| Variable | Variable |

The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

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

$apiInstance = new SellingPartnerApi\Api\AplusContentV20201101Api($config);
$marketplace_id = 'marketplace_id_example'; // string | The identifier for the marketplace where the A+ Content is published.
$page_token = 'page_token_example'; // string | A page token from the nextPageToken response element returned by your previous call to this operation. nextPageToken is returned when the results of a call exceed the page size. To get the next page of results, call the operation and include pageToken as the only parameter. Specifying pageToken with any other parameter will cause the request to fail. When no nextPageToken value is returned there are no more pages to return. A pageToken value is not usable across different operations.

try {
    $result = $apiInstance->searchContentDocuments($marketplace_id, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AplusContentV20201101Api->searchContentDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| The identifier for the marketplace where the A+ Content is published. |
 **page_token** | **string**| A page token from the nextPageToken response element returned by your previous call to this operation. nextPageToken is returned when the results of a call exceed the page size. To get the next page of results, call the operation and include pageToken as the only parameter. Specifying pageToken with any other parameter will cause the request to fail. When no nextPageToken value is returned there are no more pages to return. A pageToken value is not usable across different operations. | [optional]

### Return type

[**\SellingPartnerApi\Model\AplusContentV20201101\SearchContentDocumentsResponse**](../Model/AplusContentV20201101/SearchContentDocumentsResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[AplusContentV20201101 Model list]](../Model/AplusContentV20201101)
[[README]](../../README.md)

## `searchContentPublishRecords()`

```php
searchContentPublishRecords($marketplace_id, $asin, $page_token): \SellingPartnerApi\Model\AplusContentV20201101\SearchContentPublishRecordsResponse
```



Searches for A+ Content publishing records, if available.

**Usage Plans:**

| Plan type | Rate (requests per second) | Burst |
| ---- | ---- | ---- |
|Default| 10 | 10 |
|Selling partner specific| Variable | Variable |

The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

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

$apiInstance = new SellingPartnerApi\Api\AplusContentV20201101Api($config);
$marketplace_id = 'marketplace_id_example'; // string | The identifier for the marketplace where the A+ Content is published.
$asin = 'asin_example'; // string | The Amazon Standard Identification Number (ASIN).
$page_token = 'page_token_example'; // string | A page token from the nextPageToken response element returned by your previous call to this operation. nextPageToken is returned when the results of a call exceed the page size. To get the next page of results, call the operation and include pageToken as the only parameter. Specifying pageToken with any other parameter will cause the request to fail. When no nextPageToken value is returned there are no more pages to return. A pageToken value is not usable across different operations.

try {
    $result = $apiInstance->searchContentPublishRecords($marketplace_id, $asin, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AplusContentV20201101Api->searchContentPublishRecords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| The identifier for the marketplace where the A+ Content is published. |
 **asin** | **string**| The Amazon Standard Identification Number (ASIN). |
 **page_token** | **string**| A page token from the nextPageToken response element returned by your previous call to this operation. nextPageToken is returned when the results of a call exceed the page size. To get the next page of results, call the operation and include pageToken as the only parameter. Specifying pageToken with any other parameter will cause the request to fail. When no nextPageToken value is returned there are no more pages to return. A pageToken value is not usable across different operations. | [optional]

### Return type

[**\SellingPartnerApi\Model\AplusContentV20201101\SearchContentPublishRecordsResponse**](../Model/AplusContentV20201101/SearchContentPublishRecordsResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[AplusContentV20201101 Model list]](../Model/AplusContentV20201101)
[[README]](../../README.md)

## `updateContentDocument()`

```php
updateContentDocument($content_reference_key, $marketplace_id, $post_content_document_request): \SellingPartnerApi\Model\AplusContentV20201101\PostContentDocumentResponse
```



Updates an existing A+ Content document.

**Usage Plans:**

| Plan type | Rate (requests per second) | Burst |
| ---- | ---- | ---- |
|Default| 10 | 10 |
|Selling partner specific| Variable | Variable |

The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

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

$apiInstance = new SellingPartnerApi\Api\AplusContentV20201101Api($config);
$content_reference_key = 'content_reference_key_example'; // string | The unique reference key for the A+ Content document. A content reference key cannot form a permalink and may change in the future. A content reference key is not guaranteed to match any A+ Content identifier.
$marketplace_id = 'marketplace_id_example'; // string | The identifier for the marketplace where the A+ Content is published.
$post_content_document_request = new \SellingPartnerApi\Model\AplusContentV20201101\PostContentDocumentRequest(); // \SellingPartnerApi\Model\AplusContentV20201101\PostContentDocumentRequest | The content document request details.

try {
    $result = $apiInstance->updateContentDocument($content_reference_key, $marketplace_id, $post_content_document_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AplusContentV20201101Api->updateContentDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_reference_key** | **string**| The unique reference key for the A+ Content document. A content reference key cannot form a permalink and may change in the future. A content reference key is not guaranteed to match any A+ Content identifier. |
 **marketplace_id** | **string**| The identifier for the marketplace where the A+ Content is published. |
 **post_content_document_request** | [**\SellingPartnerApi\Model\AplusContentV20201101\PostContentDocumentRequest**](../Model/AplusContentV20201101/PostContentDocumentRequest.md)| The content document request details. |

### Return type

[**\SellingPartnerApi\Model\AplusContentV20201101\PostContentDocumentResponse**](../Model/AplusContentV20201101/PostContentDocumentResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[AplusContentV20201101 Model list]](../Model/AplusContentV20201101)
[[README]](../../README.md)

## `validateContentDocumentAsinRelations()`

```php
validateContentDocumentAsinRelations($marketplace_id, $post_content_document_request, $asin_set): \SellingPartnerApi\Model\AplusContentV20201101\ValidateContentDocumentAsinRelationsResponse
```



Checks if the A+ Content document is valid for use on a set of ASINs.

**Usage Plans:**

| Plan type | Rate (requests per second) | Burst |
| ---- | ---- | ---- |
|Default| 10 | 10 |
|Selling partner specific| Variable | Variable |

The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

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

$apiInstance = new SellingPartnerApi\Api\AplusContentV20201101Api($config);
$marketplace_id = 'marketplace_id_example'; // string | The identifier for the marketplace where the A+ Content is published.
$post_content_document_request = new \SellingPartnerApi\Model\AplusContentV20201101\PostContentDocumentRequest(); // \SellingPartnerApi\Model\AplusContentV20201101\PostContentDocumentRequest | The content document request details.
$asin_set = array('asin_set_example'); // string[] | The set of ASINs.

try {
    $result = $apiInstance->validateContentDocumentAsinRelations($marketplace_id, $post_content_document_request, $asin_set);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AplusContentV20201101Api->validateContentDocumentAsinRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| The identifier for the marketplace where the A+ Content is published. |
 **post_content_document_request** | [**\SellingPartnerApi\Model\AplusContentV20201101\PostContentDocumentRequest**](../Model/AplusContentV20201101/PostContentDocumentRequest.md)| The content document request details. |
 **asin_set** | [**string[]**](../Model/AplusContentV20201101/string.md)| The set of ASINs. | [optional]

### Return type

[**\SellingPartnerApi\Model\AplusContentV20201101\ValidateContentDocumentAsinRelationsResponse**](../Model/AplusContentV20201101/ValidateContentDocumentAsinRelationsResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[AplusContentV20201101 Model list]](../Model/AplusContentV20201101)
[[README]](../../README.md)
