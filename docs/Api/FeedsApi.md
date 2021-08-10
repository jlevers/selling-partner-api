# SellingPartnerApi\FeedsApi

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelFeed()**](FeedsApi.md#cancelFeed) | **DELETE** /feeds/2021-06-30/feeds/{feedId} | 
[**createFeed()**](FeedsApi.md#createFeed) | **POST** /feeds/2021-06-30/feeds | 
[**createFeedDocument()**](FeedsApi.md#createFeedDocument) | **POST** /feeds/2021-06-30/documents | 
[**getFeed()**](FeedsApi.md#getFeed) | **GET** /feeds/2021-06-30/feeds/{feedId} | 
[**getFeedDocument()**](FeedsApi.md#getFeedDocument) | **GET** /feeds/2021-06-30/documents/{feedDocumentId} | 
[**getFeeds()**](FeedsApi.md#getFeeds) | **GET** /feeds/2021-06-30/feeds | 


## `cancelFeed()`

```php
cancelFeed($feed_id)
```



Cancels the feed that you specify. Only feeds with processingStatus=IN_QUEUE can be cancelled. Cancelled feeds are returned in subsequent calls to the getFeed and getFeeds operations.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 0.0222 | 10 |

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

$apiInstance = new SellingPartnerApi\Api\FeedsApi($config);
$feed_id = 'feed_id_example'; // string | The identifier for the feed. This identifier is unique only in combination with a seller ID.

try {
    $apiInstance->cancelFeed($feed_id);
} catch (Exception $e) {
    echo 'Exception when calling FeedsApi->cancelFeed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feed_id** | **string**| The identifier for the feed. This identifier is unique only in combination with a seller ID. |

### Return type

void (empty response body)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[Feeds Model list]](../Model/Feeds)
[[README]](../../README.md)

## `createFeed()`

```php
createFeed($body): \SellingPartnerApi\Model\Feeds\CreateFeedResponse
```



Creates a feed. Upload the contents of the feed document before calling this operation.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 0.0083 | 15 |

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

$apiInstance = new SellingPartnerApi\Api\FeedsApi($config);
$body = new \SellingPartnerApi\Model\Feeds\CreateFeedSpecification(); // \SellingPartnerApi\Model\Feeds\CreateFeedSpecification

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
 **body** | [**\SellingPartnerApi\Model\Feeds\CreateFeedSpecification**](../Model/Feeds/CreateFeedSpecification.md)|  |

### Return type

[**\SellingPartnerApi\Model\Feeds\CreateFeedResponse**](../Model/Feeds/CreateFeedResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[Feeds Model list]](../Model/Feeds)
[[README]](../../README.md)

## `createFeedDocument()`

```php
createFeedDocument($body): \SellingPartnerApi\Model\Feeds\CreateFeedDocumentResponse
```



Creates a feed document for the feed type that you specify. This operation returns a presigned URL for uploading the feed document contents. It also returns a feedDocumentId value that you can pass in with a subsequent call to the createFeed operation.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 0.0083 | 15 |

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

$apiInstance = new SellingPartnerApi\Api\FeedsApi($config);
$body = new \SellingPartnerApi\Model\Feeds\CreateFeedDocumentSpecification(); // \SellingPartnerApi\Model\Feeds\CreateFeedDocumentSpecification

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
 **body** | [**\SellingPartnerApi\Model\Feeds\CreateFeedDocumentSpecification**](../Model/Feeds/CreateFeedDocumentSpecification.md)|  |

### Return type

[**\SellingPartnerApi\Model\Feeds\CreateFeedDocumentResponse**](../Model/Feeds/CreateFeedDocumentResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[Feeds Model list]](../Model/Feeds)
[[README]](../../README.md)

## `getFeed()`

```php
getFeed($feed_id): \SellingPartnerApi\Model\Feeds\Feed
```



Returns feed details (including the resultDocumentId, if available) for the feed that you specify.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 2.0 | 15 |

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

$apiInstance = new SellingPartnerApi\Api\FeedsApi($config);
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

[**\SellingPartnerApi\Model\Feeds\Feed**](../Model/Feeds/Feed.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[Feeds Model list]](../Model/Feeds)
[[README]](../../README.md)

## `getFeedDocument()`

```php
getFeedDocument($feed_document_id): \SellingPartnerApi\Model\Feeds\FeedDocument
```



Returns the information required for retrieving a feed document's contents.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 0.0222 | 10 |

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

$apiInstance = new SellingPartnerApi\Api\FeedsApi($config);
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

[**\SellingPartnerApi\Model\Feeds\FeedDocument**](../Model/Feeds/FeedDocument.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[Feeds Model list]](../Model/Feeds)
[[README]](../../README.md)

## `getFeeds()`

```php
getFeeds($feed_types, $marketplace_ids, $page_size, $processing_statuses, $created_since, $created_until, $next_token): \SellingPartnerApi\Model\Feeds\GetFeedsResponse
```



Returns feed details for the feeds that match the filters that you specify.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 0.0222 | 10 |

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

$apiInstance = new SellingPartnerApi\Api\FeedsApi($config);
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
 **feed_types** | [**string[]**](../Model/Feeds/string.md)| A list of feed types used to filter feeds. When feedTypes is provided, the other filter parameters (processingStatuses, marketplaceIds, createdSince, createdUntil) and pageSize may also be provided. Either feedTypes or nextToken is required. | [optional]
 **marketplace_ids** | [**string[]**](../Model/Feeds/string.md)| A list of marketplace identifiers used to filter feeds. The feeds returned will match at least one of the marketplaces that you specify. | [optional]
 **page_size** | **int**| The maximum number of feeds to return in a single call. | [optional] [default to 10]
 **processing_statuses** | [**string[]**](../Model/Feeds/string.md)| A list of processing statuses used to filter feeds. | [optional]
 **created_since** | **\DateTime**| The earliest feed creation date and time for feeds included in the response, in ISO 8601 format. The default is 90 days ago. Feeds are retained for a maximum of 90 days. | [optional]
 **created_until** | **\DateTime**| The latest feed creation date and time for feeds included in the response, in ISO 8601 format. The default is now. | [optional]
 **next_token** | **string**| A string token returned in the response to your previous request. nextToken is returned when the number of results exceeds the specified pageSize value. To get the next page of results, call the getFeeds operation and include this token as the only parameter. Specifying nextToken with any other parameters will cause the request to fail. | [optional]

### Return type

[**\SellingPartnerApi\Model\Feeds\GetFeedsResponse**](../Model/Feeds/GetFeedsResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[Feeds Model list]](../Model/Feeds)
[[README]](../../README.md)
