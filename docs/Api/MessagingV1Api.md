# SellingPartnerApi\MessagingV1Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**confirmCustomizationDetails()**](MessagingV1Api.md#confirmCustomizationDetails) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/confirmCustomizationDetails | 
[**createAmazonMotors()**](MessagingV1Api.md#createAmazonMotors) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/amazonMotors | 
[**createConfirmDeliveryDetails()**](MessagingV1Api.md#createConfirmDeliveryDetails) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/confirmDeliveryDetails | 
[**createConfirmOrderDetails()**](MessagingV1Api.md#createConfirmOrderDetails) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/confirmOrderDetails | 
[**createConfirmServiceDetails()**](MessagingV1Api.md#createConfirmServiceDetails) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/confirmServiceDetails | 
[**createDigitalAccessKey()**](MessagingV1Api.md#createDigitalAccessKey) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/digitalAccessKey | 
[**createLegalDisclosure()**](MessagingV1Api.md#createLegalDisclosure) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/legalDisclosure | 
[**createNegativeFeedbackRemoval()**](MessagingV1Api.md#createNegativeFeedbackRemoval) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/negativeFeedbackRemoval | 
[**createUnexpectedProblem()**](MessagingV1Api.md#createUnexpectedProblem) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/unexpectedProblem | 
[**createWarranty()**](MessagingV1Api.md#createWarranty) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/warranty | 
[**getAttributes()**](MessagingV1Api.md#getAttributes) | **GET** /messaging/v1/orders/{amazonOrderId}/attributes | 
[**getMessagingActionsForOrder()**](MessagingV1Api.md#getMessagingActionsForOrder) | **GET** /messaging/v1/orders/{amazonOrderId} | 
[**sendInvoice()**](MessagingV1Api.md#sendInvoice) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/invoice | 


## `confirmCustomizationDetails()`

```php
confirmCustomizationDetails($amazon_order_id, $marketplace_ids, $body): \SellingPartnerApi\Model\MessagingV1\CreateConfirmCustomizationDetailsResponse
```



Sends a message asking a buyer to provide or verify customization details such as name spelling, images, initials, etc.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1 | 5 |

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

$apiInstance = new SellingPartnerApi\Api\MessagingV1Api($config);
$amazon_order_id = 'amazon_order_id_example'; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array('marketplace_ids_example'); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$body = new \SellingPartnerApi\Model\MessagingV1\CreateConfirmCustomizationDetailsRequest(); // \SellingPartnerApi\Model\MessagingV1\CreateConfirmCustomizationDetailsRequest

try {
    $result = $apiInstance->confirmCustomizationDetails($amazon_order_id, $marketplace_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingV1Api->confirmCustomizationDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/MessagingV1/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **body** | [**\SellingPartnerApi\Model\MessagingV1\CreateConfirmCustomizationDetailsRequest**](../Model/MessagingV1/CreateConfirmCustomizationDetailsRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\MessagingV1\CreateConfirmCustomizationDetailsResponse**](../Model/MessagingV1/CreateConfirmCustomizationDetailsResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/hal+json`

[[Top]](#) [[API list]](../)
[[MessagingV1 Model list]](../Model/MessagingV1)
[[README]](../../README.md)

## `createAmazonMotors()`

```php
createAmazonMotors($amazon_order_id, $marketplace_ids, $body): \SellingPartnerApi\Model\MessagingV1\CreateAmazonMotorsResponse
```



Sends a message to a buyer to provide details about an Amazon Motors order. This message can only be sent by Amazon Motors sellers.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1 | 5 |

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

$apiInstance = new SellingPartnerApi\Api\MessagingV1Api($config);
$amazon_order_id = 'amazon_order_id_example'; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array('marketplace_ids_example'); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$body = new \SellingPartnerApi\Model\MessagingV1\CreateAmazonMotorsRequest(); // \SellingPartnerApi\Model\MessagingV1\CreateAmazonMotorsRequest

try {
    $result = $apiInstance->createAmazonMotors($amazon_order_id, $marketplace_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingV1Api->createAmazonMotors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/MessagingV1/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **body** | [**\SellingPartnerApi\Model\MessagingV1\CreateAmazonMotorsRequest**](../Model/MessagingV1/CreateAmazonMotorsRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\MessagingV1\CreateAmazonMotorsResponse**](../Model/MessagingV1/CreateAmazonMotorsResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/hal+json`

[[Top]](#) [[API list]](../)
[[MessagingV1 Model list]](../Model/MessagingV1)
[[README]](../../README.md)

## `createConfirmDeliveryDetails()`

```php
createConfirmDeliveryDetails($amazon_order_id, $marketplace_ids, $body): \SellingPartnerApi\Model\MessagingV1\CreateConfirmDeliveryDetailsResponse
```



Sends a message to a buyer to arrange a delivery or to confirm contact information for making a delivery.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1 | 5 |

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

$apiInstance = new SellingPartnerApi\Api\MessagingV1Api($config);
$amazon_order_id = 'amazon_order_id_example'; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array('marketplace_ids_example'); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$body = new \SellingPartnerApi\Model\MessagingV1\CreateConfirmDeliveryDetailsRequest(); // \SellingPartnerApi\Model\MessagingV1\CreateConfirmDeliveryDetailsRequest

try {
    $result = $apiInstance->createConfirmDeliveryDetails($amazon_order_id, $marketplace_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingV1Api->createConfirmDeliveryDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/MessagingV1/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **body** | [**\SellingPartnerApi\Model\MessagingV1\CreateConfirmDeliveryDetailsRequest**](../Model/MessagingV1/CreateConfirmDeliveryDetailsRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\MessagingV1\CreateConfirmDeliveryDetailsResponse**](../Model/MessagingV1/CreateConfirmDeliveryDetailsResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/hal+json`

[[Top]](#) [[API list]](../)
[[MessagingV1 Model list]](../Model/MessagingV1)
[[README]](../../README.md)

## `createConfirmOrderDetails()`

```php
createConfirmOrderDetails($amazon_order_id, $marketplace_ids, $body): \SellingPartnerApi\Model\MessagingV1\CreateConfirmOrderDetailsResponse
```



Sends a message to ask a buyer an order-related question prior to shipping their order.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1 | 5 |

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

$apiInstance = new SellingPartnerApi\Api\MessagingV1Api($config);
$amazon_order_id = 'amazon_order_id_example'; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array('marketplace_ids_example'); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$body = new \SellingPartnerApi\Model\MessagingV1\CreateConfirmOrderDetailsRequest(); // \SellingPartnerApi\Model\MessagingV1\CreateConfirmOrderDetailsRequest

try {
    $result = $apiInstance->createConfirmOrderDetails($amazon_order_id, $marketplace_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingV1Api->createConfirmOrderDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/MessagingV1/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **body** | [**\SellingPartnerApi\Model\MessagingV1\CreateConfirmOrderDetailsRequest**](../Model/MessagingV1/CreateConfirmOrderDetailsRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\MessagingV1\CreateConfirmOrderDetailsResponse**](../Model/MessagingV1/CreateConfirmOrderDetailsResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/hal+json`

[[Top]](#) [[API list]](../)
[[MessagingV1 Model list]](../Model/MessagingV1)
[[README]](../../README.md)

## `createConfirmServiceDetails()`

```php
createConfirmServiceDetails($amazon_order_id, $marketplace_ids, $body): \SellingPartnerApi\Model\MessagingV1\CreateConfirmServiceDetailsResponse
```



Sends a message to contact a Home Service customer to arrange a service call or to gather information prior to a service call.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1 | 5 |

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

$apiInstance = new SellingPartnerApi\Api\MessagingV1Api($config);
$amazon_order_id = 'amazon_order_id_example'; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array('marketplace_ids_example'); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$body = new \SellingPartnerApi\Model\MessagingV1\CreateConfirmServiceDetailsRequest(); // \SellingPartnerApi\Model\MessagingV1\CreateConfirmServiceDetailsRequest

try {
    $result = $apiInstance->createConfirmServiceDetails($amazon_order_id, $marketplace_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingV1Api->createConfirmServiceDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/MessagingV1/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **body** | [**\SellingPartnerApi\Model\MessagingV1\CreateConfirmServiceDetailsRequest**](../Model/MessagingV1/CreateConfirmServiceDetailsRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\MessagingV1\CreateConfirmServiceDetailsResponse**](../Model/MessagingV1/CreateConfirmServiceDetailsResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/hal+json`

[[Top]](#) [[API list]](../)
[[MessagingV1 Model list]](../Model/MessagingV1)
[[README]](../../README.md)

## `createDigitalAccessKey()`

```php
createDigitalAccessKey($amazon_order_id, $marketplace_ids, $body): \SellingPartnerApi\Model\MessagingV1\CreateDigitalAccessKeyResponse
```



Sends a message to a buyer to share a digital access key needed to utilize digital content in their order.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1 | 5 |

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

$apiInstance = new SellingPartnerApi\Api\MessagingV1Api($config);
$amazon_order_id = 'amazon_order_id_example'; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array('marketplace_ids_example'); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$body = new \SellingPartnerApi\Model\MessagingV1\CreateDigitalAccessKeyRequest(); // \SellingPartnerApi\Model\MessagingV1\CreateDigitalAccessKeyRequest

try {
    $result = $apiInstance->createDigitalAccessKey($amazon_order_id, $marketplace_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingV1Api->createDigitalAccessKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/MessagingV1/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **body** | [**\SellingPartnerApi\Model\MessagingV1\CreateDigitalAccessKeyRequest**](../Model/MessagingV1/CreateDigitalAccessKeyRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\MessagingV1\CreateDigitalAccessKeyResponse**](../Model/MessagingV1/CreateDigitalAccessKeyResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/hal+json`

[[Top]](#) [[API list]](../)
[[MessagingV1 Model list]](../Model/MessagingV1)
[[README]](../../README.md)

## `createLegalDisclosure()`

```php
createLegalDisclosure($amazon_order_id, $marketplace_ids, $body): \SellingPartnerApi\Model\MessagingV1\CreateLegalDisclosureResponse
```



Sends a critical message that contains documents that a seller is legally obligated to provide to the buyer. This message should only be used to deliver documents that are required by law.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1 | 5 |

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

$apiInstance = new SellingPartnerApi\Api\MessagingV1Api($config);
$amazon_order_id = 'amazon_order_id_example'; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array('marketplace_ids_example'); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$body = new \SellingPartnerApi\Model\MessagingV1\CreateLegalDisclosureRequest(); // \SellingPartnerApi\Model\MessagingV1\CreateLegalDisclosureRequest

try {
    $result = $apiInstance->createLegalDisclosure($amazon_order_id, $marketplace_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingV1Api->createLegalDisclosure: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/MessagingV1/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **body** | [**\SellingPartnerApi\Model\MessagingV1\CreateLegalDisclosureRequest**](../Model/MessagingV1/CreateLegalDisclosureRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\MessagingV1\CreateLegalDisclosureResponse**](../Model/MessagingV1/CreateLegalDisclosureResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/hal+json`

[[Top]](#) [[API list]](../)
[[MessagingV1 Model list]](../Model/MessagingV1)
[[README]](../../README.md)

## `createNegativeFeedbackRemoval()`

```php
createNegativeFeedbackRemoval($amazon_order_id, $marketplace_ids): \SellingPartnerApi\Model\MessagingV1\CreateNegativeFeedbackRemovalResponse
```



Sends a non-critical message that asks a buyer to remove their negative feedback. This message should only be sent after the seller has resolved the buyer's problem.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1 | 5 |

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

$apiInstance = new SellingPartnerApi\Api\MessagingV1Api($config);
$amazon_order_id = 'amazon_order_id_example'; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array('marketplace_ids_example'); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.

try {
    $result = $apiInstance->createNegativeFeedbackRemoval($amazon_order_id, $marketplace_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingV1Api->createNegativeFeedbackRemoval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/MessagingV1/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |

### Return type

[**\SellingPartnerApi\Model\MessagingV1\CreateNegativeFeedbackRemovalResponse**](../Model/MessagingV1/CreateNegativeFeedbackRemovalResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/hal+json`

[[Top]](#) [[API list]](../)
[[MessagingV1 Model list]](../Model/MessagingV1)
[[README]](../../README.md)

## `createUnexpectedProblem()`

```php
createUnexpectedProblem($amazon_order_id, $marketplace_ids, $body): \SellingPartnerApi\Model\MessagingV1\CreateUnexpectedProblemResponse
```



Sends a critical message to a buyer that an unexpected problem was encountered affecting the completion of the order.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1 | 5 |

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

$apiInstance = new SellingPartnerApi\Api\MessagingV1Api($config);
$amazon_order_id = 'amazon_order_id_example'; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array('marketplace_ids_example'); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$body = new \SellingPartnerApi\Model\MessagingV1\CreateUnexpectedProblemRequest(); // \SellingPartnerApi\Model\MessagingV1\CreateUnexpectedProblemRequest

try {
    $result = $apiInstance->createUnexpectedProblem($amazon_order_id, $marketplace_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingV1Api->createUnexpectedProblem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/MessagingV1/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **body** | [**\SellingPartnerApi\Model\MessagingV1\CreateUnexpectedProblemRequest**](../Model/MessagingV1/CreateUnexpectedProblemRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\MessagingV1\CreateUnexpectedProblemResponse**](../Model/MessagingV1/CreateUnexpectedProblemResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/hal+json`

[[Top]](#) [[API list]](../)
[[MessagingV1 Model list]](../Model/MessagingV1)
[[README]](../../README.md)

## `createWarranty()`

```php
createWarranty($amazon_order_id, $marketplace_ids, $body): \SellingPartnerApi\Model\MessagingV1\CreateWarrantyResponse
```



Sends a message to a buyer to provide details about warranty information on a purchase in their order.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1 | 5 |

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

$apiInstance = new SellingPartnerApi\Api\MessagingV1Api($config);
$amazon_order_id = 'amazon_order_id_example'; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array('marketplace_ids_example'); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$body = new \SellingPartnerApi\Model\MessagingV1\CreateWarrantyRequest(); // \SellingPartnerApi\Model\MessagingV1\CreateWarrantyRequest

try {
    $result = $apiInstance->createWarranty($amazon_order_id, $marketplace_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingV1Api->createWarranty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/MessagingV1/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **body** | [**\SellingPartnerApi\Model\MessagingV1\CreateWarrantyRequest**](../Model/MessagingV1/CreateWarrantyRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\MessagingV1\CreateWarrantyResponse**](../Model/MessagingV1/CreateWarrantyResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/hal+json`

[[Top]](#) [[API list]](../)
[[MessagingV1 Model list]](../Model/MessagingV1)
[[README]](../../README.md)

## `getAttributes()`

```php
getAttributes($amazon_order_id, $marketplace_ids): \SellingPartnerApi\Model\MessagingV1\GetAttributesResponse
```



Returns a response containing attributes related to an order. This includes buyer preferences.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1 | 5 |

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

$apiInstance = new SellingPartnerApi\Api\MessagingV1Api($config);
$amazon_order_id = 'amazon_order_id_example'; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array('marketplace_ids_example'); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.

try {
    $result = $apiInstance->getAttributes($amazon_order_id, $marketplace_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingV1Api->getAttributes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/MessagingV1/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |

### Return type

[**\SellingPartnerApi\Model\MessagingV1\GetAttributesResponse**](../Model/MessagingV1/GetAttributesResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/hal+json`

[[Top]](#) [[API list]](../)
[[MessagingV1 Model list]](../Model/MessagingV1)
[[README]](../../README.md)

## `getMessagingActionsForOrder()`

```php
getMessagingActionsForOrder($amazon_order_id, $marketplace_ids): \SellingPartnerApi\Model\MessagingV1\GetMessagingActionsForOrderResponse
```



Returns a list of message types that are available for an order that you specify. A message type is represented by an actions object, which contains a path and query parameter(s). You can use the path and parameter(s) to call an operation that sends a message.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1 | 5 |

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

$apiInstance = new SellingPartnerApi\Api\MessagingV1Api($config);
$amazon_order_id = 'amazon_order_id_example'; // string | An Amazon order identifier. This specifies the order for which you want a list of available message types.
$marketplace_ids = array('marketplace_ids_example'); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.

try {
    $result = $apiInstance->getMessagingActionsForOrder($amazon_order_id, $marketplace_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingV1Api->getMessagingActionsForOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which you want a list of available message types. |
 **marketplace_ids** | [**string[]**](../Model/MessagingV1/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |

### Return type

[**\SellingPartnerApi\Model\MessagingV1\GetMessagingActionsForOrderResponse**](../Model/MessagingV1/GetMessagingActionsForOrderResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/hal+json`

[[Top]](#) [[API list]](../)
[[MessagingV1 Model list]](../Model/MessagingV1)
[[README]](../../README.md)

## `sendInvoice()`

```php
sendInvoice($amazon_order_id, $marketplace_ids, $body): \SellingPartnerApi\Model\MessagingV1\InvoiceResponse
```



Sends a message providing the buyer an invoice

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

$apiInstance = new SellingPartnerApi\Api\MessagingV1Api($config);
$amazon_order_id = 'amazon_order_id_example'; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array('marketplace_ids_example'); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$body = new \SellingPartnerApi\Model\MessagingV1\InvoiceRequest(); // \SellingPartnerApi\Model\MessagingV1\InvoiceRequest

try {
    $result = $apiInstance->sendInvoice($amazon_order_id, $marketplace_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingV1Api->sendInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/MessagingV1/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **body** | [**\SellingPartnerApi\Model\MessagingV1\InvoiceRequest**](../Model/MessagingV1/InvoiceRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\MessagingV1\InvoiceResponse**](../Model/MessagingV1/InvoiceResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/hal+json`

[[Top]](#) [[API list]](../)
[[MessagingV1 Model list]](../Model/MessagingV1)
[[README]](../../README.md)
