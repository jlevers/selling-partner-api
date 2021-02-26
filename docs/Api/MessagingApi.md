# Evers\SellingPartnerApi\MessagingApi

All URIs are relative to https://sellingpartnerapi-na.amazon.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**confirmCustomizationDetails()**](MessagingApi.md#confirmCustomizationDetails) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/confirmCustomizationDetails | 
[**createAmazonMotors()**](MessagingApi.md#createAmazonMotors) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/amazonMotors | 
[**createConfirmDeliveryDetails()**](MessagingApi.md#createConfirmDeliveryDetails) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/confirmDeliveryDetails | 
[**createConfirmOrderDetails()**](MessagingApi.md#createConfirmOrderDetails) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/confirmOrderDetails | 
[**createConfirmServiceDetails()**](MessagingApi.md#createConfirmServiceDetails) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/confirmServiceDetails | 
[**createDigitalAccessKey()**](MessagingApi.md#createDigitalAccessKey) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/digitalAccessKey | 
[**createLegalDisclosure()**](MessagingApi.md#createLegalDisclosure) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/legalDisclosure | 
[**createNegativeFeedbackRemoval()**](MessagingApi.md#createNegativeFeedbackRemoval) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/negativeFeedbackRemoval | 
[**createUnexpectedProblem()**](MessagingApi.md#createUnexpectedProblem) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/unexpectedProblem | 
[**createWarranty()**](MessagingApi.md#createWarranty) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/warranty | 
[**getAttributes()**](MessagingApi.md#getAttributes) | **GET** /messaging/v1/orders/{amazonOrderId}/attributes | 
[**getMessagingActionsForOrder()**](MessagingApi.md#getMessagingActionsForOrder) | **GET** /messaging/v1/orders/{amazonOrderId} | 


## `confirmCustomizationDetails()`

```php
confirmCustomizationDetails($amazon_order_id, $marketplace_ids, $body): \Evers\SellingPartnerApi\Model\Messaging\CreateConfirmCustomizationDetailsResponse
```



Sends a message asking a buyer to provide or verify customization details such as name spelling, images, initials, etc.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\MessagingApi();
$amazon_order_id = 'amazon_order_id_example'; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array('marketplace_ids_example'); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$body = new \Evers\SellingPartnerApi\Model\Messaging\CreateConfirmCustomizationDetailsRequest(); // \Evers\SellingPartnerApi\Model\Messaging\CreateConfirmCustomizationDetailsRequest

try {
    $result = $apiInstance->confirmCustomizationDetails($amazon_order_id, $marketplace_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->confirmCustomizationDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **body** | [**\Evers\SellingPartnerApi\Model\Messaging\CreateConfirmCustomizationDetailsRequest**](../Model/CreateConfirmCustomizationDetailsRequest.md)|  |

### Return type

[**\Evers\SellingPartnerApi\Model\Messaging\CreateConfirmCustomizationDetailsResponse**](../Model/CreateConfirmCustomizationDetailsResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/hal+json`

[[Top]](#) [[API list]](../)
[[Model list]](../Models)
[[README]](../../README.md)

## `createAmazonMotors()`

```php
createAmazonMotors($amazon_order_id, $marketplace_ids, $body): \Evers\SellingPartnerApi\Model\Messaging\CreateAmazonMotorsResponse
```



Sends a message to a buyer to provide details about an Amazon Motors order. This message can only be sent by Amazon Motors sellers.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\MessagingApi();
$amazon_order_id = 'amazon_order_id_example'; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array('marketplace_ids_example'); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$body = new \Evers\SellingPartnerApi\Model\Messaging\CreateAmazonMotorsRequest(); // \Evers\SellingPartnerApi\Model\Messaging\CreateAmazonMotorsRequest

try {
    $result = $apiInstance->createAmazonMotors($amazon_order_id, $marketplace_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->createAmazonMotors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **body** | [**\Evers\SellingPartnerApi\Model\Messaging\CreateAmazonMotorsRequest**](../Model/CreateAmazonMotorsRequest.md)|  |

### Return type

[**\Evers\SellingPartnerApi\Model\Messaging\CreateAmazonMotorsResponse**](../Model/CreateAmazonMotorsResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/hal+json`

[[Top]](#) [[API list]](../)
[[Model list]](../Models)
[[README]](../../README.md)

## `createConfirmDeliveryDetails()`

```php
createConfirmDeliveryDetails($amazon_order_id, $marketplace_ids, $body): \Evers\SellingPartnerApi\Model\Messaging\CreateConfirmDeliveryDetailsResponse
```



Sends a message to a buyer to arrange a delivery or to confirm contact information for making a delivery.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\MessagingApi();
$amazon_order_id = 'amazon_order_id_example'; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array('marketplace_ids_example'); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$body = new \Evers\SellingPartnerApi\Model\Messaging\CreateConfirmDeliveryDetailsRequest(); // \Evers\SellingPartnerApi\Model\Messaging\CreateConfirmDeliveryDetailsRequest

try {
    $result = $apiInstance->createConfirmDeliveryDetails($amazon_order_id, $marketplace_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->createConfirmDeliveryDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **body** | [**\Evers\SellingPartnerApi\Model\Messaging\CreateConfirmDeliveryDetailsRequest**](../Model/CreateConfirmDeliveryDetailsRequest.md)|  |

### Return type

[**\Evers\SellingPartnerApi\Model\Messaging\CreateConfirmDeliveryDetailsResponse**](../Model/CreateConfirmDeliveryDetailsResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/hal+json`

[[Top]](#) [[API list]](../)
[[Model list]](../Models)
[[README]](../../README.md)

## `createConfirmOrderDetails()`

```php
createConfirmOrderDetails($amazon_order_id, $marketplace_ids, $body): \Evers\SellingPartnerApi\Model\Messaging\CreateConfirmOrderDetailsResponse
```



Sends a message to ask a buyer an order-related question prior to shipping their order.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\MessagingApi();
$amazon_order_id = 'amazon_order_id_example'; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array('marketplace_ids_example'); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$body = new \Evers\SellingPartnerApi\Model\Messaging\CreateConfirmOrderDetailsRequest(); // \Evers\SellingPartnerApi\Model\Messaging\CreateConfirmOrderDetailsRequest

try {
    $result = $apiInstance->createConfirmOrderDetails($amazon_order_id, $marketplace_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->createConfirmOrderDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **body** | [**\Evers\SellingPartnerApi\Model\Messaging\CreateConfirmOrderDetailsRequest**](../Model/CreateConfirmOrderDetailsRequest.md)|  |

### Return type

[**\Evers\SellingPartnerApi\Model\Messaging\CreateConfirmOrderDetailsResponse**](../Model/CreateConfirmOrderDetailsResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/hal+json`

[[Top]](#) [[API list]](../)
[[Model list]](../Models)
[[README]](../../README.md)

## `createConfirmServiceDetails()`

```php
createConfirmServiceDetails($amazon_order_id, $marketplace_ids, $body): \Evers\SellingPartnerApi\Model\Messaging\CreateConfirmServiceDetailsResponse
```



Sends a message to contact a Home Service customer to arrange a service call or to gather information prior to a service call.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\MessagingApi();
$amazon_order_id = 'amazon_order_id_example'; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array('marketplace_ids_example'); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$body = new \Evers\SellingPartnerApi\Model\Messaging\CreateConfirmServiceDetailsRequest(); // \Evers\SellingPartnerApi\Model\Messaging\CreateConfirmServiceDetailsRequest

try {
    $result = $apiInstance->createConfirmServiceDetails($amazon_order_id, $marketplace_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->createConfirmServiceDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **body** | [**\Evers\SellingPartnerApi\Model\Messaging\CreateConfirmServiceDetailsRequest**](../Model/CreateConfirmServiceDetailsRequest.md)|  |

### Return type

[**\Evers\SellingPartnerApi\Model\Messaging\CreateConfirmServiceDetailsResponse**](../Model/CreateConfirmServiceDetailsResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/hal+json`

[[Top]](#) [[API list]](../)
[[Model list]](../Models)
[[README]](../../README.md)

## `createDigitalAccessKey()`

```php
createDigitalAccessKey($amazon_order_id, $marketplace_ids, $body): \Evers\SellingPartnerApi\Model\Messaging\CreateDigitalAccessKeyResponse
```



Sends a message to a buyer to share a digital access key needed to utilize digital content in their order.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\MessagingApi();
$amazon_order_id = 'amazon_order_id_example'; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array('marketplace_ids_example'); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$body = new \Evers\SellingPartnerApi\Model\Messaging\CreateDigitalAccessKeyRequest(); // \Evers\SellingPartnerApi\Model\Messaging\CreateDigitalAccessKeyRequest

try {
    $result = $apiInstance->createDigitalAccessKey($amazon_order_id, $marketplace_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->createDigitalAccessKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **body** | [**\Evers\SellingPartnerApi\Model\Messaging\CreateDigitalAccessKeyRequest**](../Model/CreateDigitalAccessKeyRequest.md)|  |

### Return type

[**\Evers\SellingPartnerApi\Model\Messaging\CreateDigitalAccessKeyResponse**](../Model/CreateDigitalAccessKeyResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/hal+json`

[[Top]](#) [[API list]](../)
[[Model list]](../Models)
[[README]](../../README.md)

## `createLegalDisclosure()`

```php
createLegalDisclosure($amazon_order_id, $marketplace_ids, $body): \Evers\SellingPartnerApi\Model\Messaging\CreateLegalDisclosureResponse
```



Sends a critical message that contains documents that a seller is legally obligated to provide to the buyer. This message should only be used to deliver documents that are required by law.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\MessagingApi();
$amazon_order_id = 'amazon_order_id_example'; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array('marketplace_ids_example'); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$body = new \Evers\SellingPartnerApi\Model\Messaging\CreateLegalDisclosureRequest(); // \Evers\SellingPartnerApi\Model\Messaging\CreateLegalDisclosureRequest

try {
    $result = $apiInstance->createLegalDisclosure($amazon_order_id, $marketplace_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->createLegalDisclosure: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **body** | [**\Evers\SellingPartnerApi\Model\Messaging\CreateLegalDisclosureRequest**](../Model/CreateLegalDisclosureRequest.md)|  |

### Return type

[**\Evers\SellingPartnerApi\Model\Messaging\CreateLegalDisclosureResponse**](../Model/CreateLegalDisclosureResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/hal+json`

[[Top]](#) [[API list]](../)
[[Model list]](../Models)
[[README]](../../README.md)

## `createNegativeFeedbackRemoval()`

```php
createNegativeFeedbackRemoval($amazon_order_id, $marketplace_ids): \Evers\SellingPartnerApi\Model\Messaging\CreateNegativeFeedbackRemovalResponse
```



Sends a non-critical message that asks a buyer to remove their negative feedback. This message should only be sent after the seller has resolved the buyer's problem.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\MessagingApi();
$amazon_order_id = 'amazon_order_id_example'; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array('marketplace_ids_example'); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.

try {
    $result = $apiInstance->createNegativeFeedbackRemoval($amazon_order_id, $marketplace_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->createNegativeFeedbackRemoval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |

### Return type

[**\Evers\SellingPartnerApi\Model\Messaging\CreateNegativeFeedbackRemovalResponse**](../Model/CreateNegativeFeedbackRemovalResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/hal+json`

[[Top]](#) [[API list]](../)
[[Model list]](../Models)
[[README]](../../README.md)

## `createUnexpectedProblem()`

```php
createUnexpectedProblem($amazon_order_id, $marketplace_ids, $body): \Evers\SellingPartnerApi\Model\Messaging\CreateUnexpectedProblemResponse
```



Sends a critical message to a buyer that an unexpected problem was encountered affecting the completion of the order.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\MessagingApi();
$amazon_order_id = 'amazon_order_id_example'; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array('marketplace_ids_example'); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$body = new \Evers\SellingPartnerApi\Model\Messaging\CreateUnexpectedProblemRequest(); // \Evers\SellingPartnerApi\Model\Messaging\CreateUnexpectedProblemRequest

try {
    $result = $apiInstance->createUnexpectedProblem($amazon_order_id, $marketplace_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->createUnexpectedProblem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **body** | [**\Evers\SellingPartnerApi\Model\Messaging\CreateUnexpectedProblemRequest**](../Model/CreateUnexpectedProblemRequest.md)|  |

### Return type

[**\Evers\SellingPartnerApi\Model\Messaging\CreateUnexpectedProblemResponse**](../Model/CreateUnexpectedProblemResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/hal+json`

[[Top]](#) [[API list]](../)
[[Model list]](../Models)
[[README]](../../README.md)

## `createWarranty()`

```php
createWarranty($amazon_order_id, $marketplace_ids, $body): \Evers\SellingPartnerApi\Model\Messaging\CreateWarrantyResponse
```



Sends a message to a buyer to provide details about warranty information on a purchase in their order.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\MessagingApi();
$amazon_order_id = 'amazon_order_id_example'; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array('marketplace_ids_example'); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$body = new \Evers\SellingPartnerApi\Model\Messaging\CreateWarrantyRequest(); // \Evers\SellingPartnerApi\Model\Messaging\CreateWarrantyRequest

try {
    $result = $apiInstance->createWarranty($amazon_order_id, $marketplace_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->createWarranty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **body** | [**\Evers\SellingPartnerApi\Model\Messaging\CreateWarrantyRequest**](../Model/CreateWarrantyRequest.md)|  |

### Return type

[**\Evers\SellingPartnerApi\Model\Messaging\CreateWarrantyResponse**](../Model/CreateWarrantyResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/hal+json`

[[Top]](#) [[API list]](../)
[[Model list]](../Models)
[[README]](../../README.md)

## `getAttributes()`

```php
getAttributes($amazon_order_id, $marketplace_ids): \Evers\SellingPartnerApi\Model\Messaging\GetAttributesResponse
```



Returns a response containing attributes related to an order. This includes buyer preferences.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\MessagingApi();
$amazon_order_id = 'amazon_order_id_example'; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array('marketplace_ids_example'); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.

try {
    $result = $apiInstance->getAttributes($amazon_order_id, $marketplace_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->getAttributes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |

### Return type

[**\Evers\SellingPartnerApi\Model\Messaging\GetAttributesResponse**](../Model/GetAttributesResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/hal+json`

[[Top]](#) [[API list]](../)
[[Model list]](../Models)
[[README]](../../README.md)

## `getMessagingActionsForOrder()`

```php
getMessagingActionsForOrder($amazon_order_id, $marketplace_ids): \Evers\SellingPartnerApi\Model\Messaging\GetMessagingActionsForOrderResponse
```



Returns a list of message types that are available for an order that you specify. A message type is represented by an actions object, which contains a path and query parameter(s). You can use the path and parameter(s) to call an operation that sends a message.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\MessagingApi();
$amazon_order_id = 'amazon_order_id_example'; // string | An Amazon order identifier. This specifies the order for which you want a list of available message types.
$marketplace_ids = array('marketplace_ids_example'); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.

try {
    $result = $apiInstance->getMessagingActionsForOrder($amazon_order_id, $marketplace_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->getMessagingActionsForOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which you want a list of available message types. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |

### Return type

[**\Evers\SellingPartnerApi\Model\Messaging\GetMessagingActionsForOrderResponse**](../Model/GetMessagingActionsForOrderResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/hal+json`

[[Top]](#) [[API list]](../)
[[Model list]](../Models)
[[README]](../../README.md)
