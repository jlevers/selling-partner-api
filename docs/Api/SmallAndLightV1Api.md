# SellingPartnerApi\SmallAndLightV1Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteSmallAndLightEnrollmentBySellerSKU()**](SmallAndLightV1Api.md#deleteSmallAndLightEnrollmentBySellerSKU) | **DELETE** /fba/smallAndLight/v1/enrollments/{sellerSKU} | 
[**getSmallAndLightEligibilityBySellerSKU()**](SmallAndLightV1Api.md#getSmallAndLightEligibilityBySellerSKU) | **GET** /fba/smallAndLight/v1/eligibilities/{sellerSKU} | 
[**getSmallAndLightEnrollmentBySellerSKU()**](SmallAndLightV1Api.md#getSmallAndLightEnrollmentBySellerSKU) | **GET** /fba/smallAndLight/v1/enrollments/{sellerSKU} | 
[**getSmallAndLightFeePreview()**](SmallAndLightV1Api.md#getSmallAndLightFeePreview) | **POST** /fba/smallAndLight/v1/feePreviews | 
[**putSmallAndLightEnrollmentBySellerSKU()**](SmallAndLightV1Api.md#putSmallAndLightEnrollmentBySellerSKU) | **PUT** /fba/smallAndLight/v1/enrollments/{sellerSKU} | 


## `deleteSmallAndLightEnrollmentBySellerSKU()`

```php
deleteSmallAndLightEnrollmentBySellerSKU($seller_sku, $marketplace_ids)
```



Removes the item indicated by the specified seller SKU from the Small and Light program in the specified marketplace. If the item is not eligible for disenrollment, the ineligibility reasons are returned.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 2 | 5 |

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

$apiInstance = new SellingPartnerApi\Api\SmallAndLightV1Api($config);
$seller_sku = 'seller_sku_example'; // string | The seller SKU that identifies the item.
$marketplace_ids = array('marketplace_ids_example'); // string[] | The marketplace in which to remove the item from the Small and Light program. Note: Accepts a single marketplace only.

try {
    $apiInstance->deleteSmallAndLightEnrollmentBySellerSKU($seller_sku, $marketplace_ids);
} catch (Exception $e) {
    echo 'Exception when calling SmallAndLightV1Api->deleteSmallAndLightEnrollmentBySellerSKU: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_sku** | **string**| The seller SKU that identifies the item. |
 **marketplace_ids** | [**string[]**](../Model/SmallAndLightV1/string.md)| The marketplace in which to remove the item from the Small and Light program. Note: Accepts a single marketplace only. |

### Return type

void (empty response body)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[SmallAndLightV1 Model list]](../Model/SmallAndLightV1)
[[README]](../../README.md)

## `getSmallAndLightEligibilityBySellerSKU()`

```php
getSmallAndLightEligibilityBySellerSKU($seller_sku, $marketplace_ids): \SellingPartnerApi\Model\SmallAndLightV1\SmallAndLightEligibility
```



Returns the Small and Light program eligibility status of the item indicated by the specified seller SKU in the specified marketplace. If the item is not eligible, the ineligibility reasons are returned.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 2 | 10 |

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

$apiInstance = new SellingPartnerApi\Api\SmallAndLightV1Api($config);
$seller_sku = 'seller_sku_example'; // string | The seller SKU that identifies the item.
$marketplace_ids = array('marketplace_ids_example'); // string[] | The marketplace for which the eligibility status is retrieved. NOTE: Accepts a single marketplace only.

try {
    $result = $apiInstance->getSmallAndLightEligibilityBySellerSKU($seller_sku, $marketplace_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmallAndLightV1Api->getSmallAndLightEligibilityBySellerSKU: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_sku** | **string**| The seller SKU that identifies the item. |
 **marketplace_ids** | [**string[]**](../Model/SmallAndLightV1/string.md)| The marketplace for which the eligibility status is retrieved. NOTE: Accepts a single marketplace only. |

### Return type

[**\SellingPartnerApi\Model\SmallAndLightV1\SmallAndLightEligibility**](../Model/SmallAndLightV1/SmallAndLightEligibility.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[SmallAndLightV1 Model list]](../Model/SmallAndLightV1)
[[README]](../../README.md)

## `getSmallAndLightEnrollmentBySellerSKU()`

```php
getSmallAndLightEnrollmentBySellerSKU($seller_sku, $marketplace_ids): \SellingPartnerApi\Model\SmallAndLightV1\SmallAndLightEnrollment
```



Returns the Small and Light enrollment status for the item indicated by the specified seller SKU in the specified marketplace.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 2 | 10 |

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

$apiInstance = new SellingPartnerApi\Api\SmallAndLightV1Api($config);
$seller_sku = 'seller_sku_example'; // string | The seller SKU that identifies the item.
$marketplace_ids = array('marketplace_ids_example'); // string[] | The marketplace for which the enrollment status is retrieved. Note: Accepts a single marketplace only.

try {
    $result = $apiInstance->getSmallAndLightEnrollmentBySellerSKU($seller_sku, $marketplace_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmallAndLightV1Api->getSmallAndLightEnrollmentBySellerSKU: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_sku** | **string**| The seller SKU that identifies the item. |
 **marketplace_ids** | [**string[]**](../Model/SmallAndLightV1/string.md)| The marketplace for which the enrollment status is retrieved. Note: Accepts a single marketplace only. |

### Return type

[**\SellingPartnerApi\Model\SmallAndLightV1\SmallAndLightEnrollment**](../Model/SmallAndLightV1/SmallAndLightEnrollment.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[SmallAndLightV1 Model list]](../Model/SmallAndLightV1)
[[README]](../../README.md)

## `getSmallAndLightFeePreview()`

```php
getSmallAndLightFeePreview($body): \SellingPartnerApi\Model\SmallAndLightV1\SmallAndLightFeePreviews
```



Returns the Small and Light fee estimates for the specified items. You must include a marketplaceId parameter to retrieve the proper fee estimates for items to be sold in that marketplace. The ordering of items in the response will mirror the order of the items in the request. Duplicate ASIN/price combinations are removed.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1 | 3 |

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

$apiInstance = new SellingPartnerApi\Api\SmallAndLightV1Api($config);
$body = new \SellingPartnerApi\Model\SmallAndLightV1\SmallAndLightFeePreviewRequest(); // \SellingPartnerApi\Model\SmallAndLightV1\SmallAndLightFeePreviewRequest

try {
    $result = $apiInstance->getSmallAndLightFeePreview($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmallAndLightV1Api->getSmallAndLightFeePreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\SmallAndLightV1\SmallAndLightFeePreviewRequest**](../Model/SmallAndLightV1/SmallAndLightFeePreviewRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\SmallAndLightV1\SmallAndLightFeePreviews**](../Model/SmallAndLightV1/SmallAndLightFeePreviews.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[SmallAndLightV1 Model list]](../Model/SmallAndLightV1)
[[README]](../../README.md)

## `putSmallAndLightEnrollmentBySellerSKU()`

```php
putSmallAndLightEnrollmentBySellerSKU($seller_sku, $marketplace_ids): \SellingPartnerApi\Model\SmallAndLightV1\SmallAndLightEnrollment
```



Enrolls the item indicated by the specified seller SKU in the Small and Light program in the specified marketplace. If the item is not eligible, the ineligibility reasons are returned.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 2 | 5 |

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

$apiInstance = new SellingPartnerApi\Api\SmallAndLightV1Api($config);
$seller_sku = 'seller_sku_example'; // string | The seller SKU that identifies the item.
$marketplace_ids = array('marketplace_ids_example'); // string[] | The marketplace in which to enroll the item. Note: Accepts a single marketplace only.

try {
    $result = $apiInstance->putSmallAndLightEnrollmentBySellerSKU($seller_sku, $marketplace_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmallAndLightV1Api->putSmallAndLightEnrollmentBySellerSKU: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_sku** | **string**| The seller SKU that identifies the item. |
 **marketplace_ids** | [**string[]**](../Model/SmallAndLightV1/string.md)| The marketplace in which to enroll the item. Note: Accepts a single marketplace only. |

### Return type

[**\SellingPartnerApi\Model\SmallAndLightV1\SmallAndLightEnrollment**](../Model/SmallAndLightV1/SmallAndLightEnrollment.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[SmallAndLightV1 Model list]](../Model/SmallAndLightV1)
[[README]](../../README.md)
