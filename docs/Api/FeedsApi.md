# Evers\SellingPartnerApi\FeedsApi

All URIs are relative to https://sellingpartnerapi-na.amazon.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelFeed()**](FeedsApi.md#cancelFeed) | **DELETE** /feeds/2020-09-04/feeds/{feedId} | 
[**createFeed()**](FeedsApi.md#createFeed) | **POST** /feeds/2020-09-04/feeds | 
[**createFeedDocument()**](FeedsApi.md#createFeedDocument) | **POST** /feeds/2020-09-04/documents | 
[**getFeed()**](FeedsApi.md#getFeed) | **GET** /feeds/2020-09-04/feeds/{feedId} | 
[**getFeedDocument()**](FeedsApi.md#getFeedDocument) | **GET** /feeds/2020-09-04/documents/{feedDocumentId} | 
[**getFeeds()**](FeedsApi.md#getFeeds) | **GET** /feeds/2020-09-04/feeds | 


## `cancelFeed()`

```php
cancelFeed($feed_id): \Evers\SellingPartnerApi\Model\CancelFeedResponse
```



Cancels the feed that you specify. Only feeds with processingStatus=IN_QUEUE can be cancelled. Cancelled feeds are returned in subsequent calls to the getFeed and getFeeds operations.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 0.0222 | 10 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\FeedsApi();
$feed_id = 'feed_id_example'; // string | The identifier for the feed. This identifier is unique only in combination with a seller ID.

try {
    $result = $apiInstance->cancelFeed($feed_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedsApi->cancelFeed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feed_id** | **string**| The identifier for the feed. This identifier is unique only in combination with a seller ID. |

### Return type

[**\Evers\SellingPartnerApi\Model\CancelFeedResponse**](../Model/CancelFeedResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[Model list]](../Models)
[[README]](../../README.md)

## `createFeed()`

```php
createFeed($body): \Evers\SellingPartnerApi\Model\CreateFeedResponse
```



Creates a feed. Encrypt and upload the contents of the feed document before calling this operation.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 0.0083 | 15 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\FeedsApi();
$body = new \Evers\SellingPartnerApi\Model\CreateFeedSpecification(); // \Evers\SellingPartnerApi\Model\CreateFeedSpecification

try {
    $result = $apiInstance->createFeed($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedsApi->createFeed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Evers\SellingPartnerApi\Model\CreateFeedSpecification**](../Model/CreateFeedSpecification.md)|  |

### Return type

[**\Evers\SellingPartnerApi\Model\CreateFeedResponse**](../Model/CreateFeedResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[Model list]](../Models)
[[README]](../../README.md)

## `createFeedDocument()`

```php
createFeedDocument($body): \Evers\SellingPartnerApi\Model\CreateFeedDocumentResponse
```



Creates a feed document for the feed type that you specify. This operation returns encryption details for encrypting the contents of the document, as well as a presigned URL for uploading the encrypted feed document contents. It also returns a feedDocumentId value that you can pass in with a subsequent call to the createFeed operation.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 0.0083 | 15 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\FeedsApi();
$body = new \Evers\SellingPartnerApi\Model\CreateFeedDocumentSpecification(); // \Evers\SellingPartnerApi\Model\CreateFeedDocumentSpecification

try {
    $result = $apiInstance->createFeedDocument($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedsApi->createFeedDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Evers\SellingPartnerApi\Model\CreateFeedDocumentSpecification**](../Model/CreateFeedDocumentSpecification.md)|  |

### Return type

[**\Evers\SellingPartnerApi\Model\CreateFeedDocumentResponse**](../Model/CreateFeedDocumentResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[Model list]](../Models)
[[README]](../../README.md)

## `getFeed()`

```php
getFeed($feed_id): \Evers\SellingPartnerApi\Model\GetFeedResponse
```



Returns feed details (including the resultDocumentId, if available) for the feed that you specify.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2.0 | 15 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\FeedsApi();
$feed_id = 'feed_id_example'; // string | The identifier for the feed. This identifier is unique only in combination with a seller ID.

try {
    $result = $apiInstance->getFeed($feed_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedsApi->getFeed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feed_id** | **string**| The identifier for the feed. This identifier is unique only in combination with a seller ID. |

### Return type

[**\Evers\SellingPartnerApi\Model\GetFeedResponse**](../Model/GetFeedResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[Model list]](../Models)
[[README]](../../README.md)

## `getFeedDocument()`

```php
getFeedDocument($feed_document_id): \Evers\SellingPartnerApi\Model\GetFeedDocumentResponse
```



Returns the information required for retrieving a feed document's contents. This includes a presigned URL for the feed document as well as the information required to decrypt the document's contents.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 0.0222 | 10 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\FeedsApi();
$feed_document_id = 'feed_document_id_example'; // string | The identifier of the feed document.

try {
    $result = $apiInstance->getFeedDocument($feed_document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedsApi->getFeedDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feed_document_id** | **string**| The identifier of the feed document. |

### Return type

[**\Evers\SellingPartnerApi\Model\GetFeedDocumentResponse**](../Model/GetFeedDocumentResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[Model list]](../Models)
[[README]](../../README.md)

## `getFeeds()`

```php
getFeeds($feed_types, $marketplace_ids, $page_size, $processing_statuses, $created_since, $created_until, $next_token): \Evers\SellingPartnerApi\Model\GetFeedsResponse
```



Returns feed details for the feeds that match the filters that you specify.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 0.0222 | 10 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\FeedsApi();
$feed_types = array('feed_types_example'); // string[] | A list of feed types used to filter feeds. When feedTypes is provided, the other filter parameters (processingStatuses, marketplaceIds, createdSince, createdUntil) and pageSize may also be provided. Either feedTypes or nextToken is required.
$marketplace_ids = array('marketplace_ids_example'); // string[] | A list of marketplace identifiers used to filter feeds. The feeds returned will match at least one of the marketplaces that you specify.
$page_size = 10; // int | The maximum number of feeds to return in a single call.
$processing_statuses = array('processing_statuses_example'); // string[] | A list of processing statuses used to filter feeds.
$created_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The earliest feed creation date and time for feeds included in the response, in ISO 8601 format. The default is 90 days ago. Feeds are retained for a maximum of 90 days.
$created_until = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The latest feed creation date and time for feeds included in the response, in ISO 8601 format. The default is now.
$next_token = 'next_token_example'; // string | A string token returned in the response to your previous request. nextToken is returned when the number of results exceeds the specified pageSize value. To get the next page of results, call the getFeeds operation and include this token as the only parameter. Specifying nextToken with any other parameters will cause the request to fail.

try {
    $result = $apiInstance->getFeeds($feed_types, $marketplace_ids, $page_size, $processing_statuses, $created_since, $created_until, $next_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedsApi->getFeeds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feed_types** | [**string[]**](../Model/string.md)| A list of feed types used to filter feeds. When feedTypes is provided, the other filter parameters (processingStatuses, marketplaceIds, createdSince, createdUntil) and pageSize may also be provided. Either feedTypes or nextToken is required. | [optional]
 **marketplace_ids** | [**string[]**](../Model/string.md)| A list of marketplace identifiers used to filter feeds. The feeds returned will match at least one of the marketplaces that you specify. | [optional]
 **page_size** | **int**| The maximum number of feeds to return in a single call. | [optional] [default to 10]
 **processing_statuses** | [**string[]**](../Model/string.md)| A list of processing statuses used to filter feeds. | [optional]
 **created_since** | **\DateTime**| The earliest feed creation date and time for feeds included in the response, in ISO 8601 format. The default is 90 days ago. Feeds are retained for a maximum of 90 days. | [optional]
 **created_until** | **\DateTime**| The latest feed creation date and time for feeds included in the response, in ISO 8601 format. The default is now. | [optional]
 **next_token** | **string**| A string token returned in the response to your previous request. nextToken is returned when the number of results exceeds the specified pageSize value. To get the next page of results, call the getFeeds operation and include this token as the only parameter. Specifying nextToken with any other parameters will cause the request to fail. | [optional]

### Return type

[**\Evers\SellingPartnerApi\Model\GetFeedsResponse**](../Model/GetFeedsResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[Model list]](../Models)
[[README]](../../README.md)
