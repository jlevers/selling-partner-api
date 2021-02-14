# Evers\SellingPartnerApi\MessagingApi

All URIs are relative to *https://sellingpartnerapi-na.amazon.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**confirmCustomizationDetails**](MessagingApi.md#confirmCustomizationDetails) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/confirmCustomizationDetails | 
[**createAmazonMotors**](MessagingApi.md#createAmazonMotors) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/amazonMotors | 
[**createConfirmDeliveryDetails**](MessagingApi.md#createConfirmDeliveryDetails) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/confirmDeliveryDetails | 
[**createConfirmOrderDetails**](MessagingApi.md#createConfirmOrderDetails) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/confirmOrderDetails | 
[**createConfirmServiceDetails**](MessagingApi.md#createConfirmServiceDetails) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/confirmServiceDetails | 
[**createDigitalAccessKey**](MessagingApi.md#createDigitalAccessKey) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/digitalAccessKey | 
[**createLegalDisclosure**](MessagingApi.md#createLegalDisclosure) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/legalDisclosure | 
[**createNegativeFeedbackRemoval**](MessagingApi.md#createNegativeFeedbackRemoval) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/negativeFeedbackRemoval | 
[**createUnexpectedProblem**](MessagingApi.md#createUnexpectedProblem) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/unexpectedProblem | 
[**createWarranty**](MessagingApi.md#createWarranty) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/warranty | 
[**getAttributes**](MessagingApi.md#getAttributes) | **GET** /messaging/v1/orders/{amazonOrderId}/attributes | 
[**getMessagingActionsForOrder**](MessagingApi.md#getMessagingActionsForOrder) | **GET** /messaging/v1/orders/{amazonOrderId} | 


# **confirmCustomizationDetails**
> \Evers\SellingPartnerApi\Model\CreateConfirmCustomizationDetailsResponse confirmCustomizationDetails($amazon_order_id, $marketplace_ids, $body)



Sends a message asking a buyer to provide or verify customization details such as name spelling, images, initials, etc.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\MessagingApi(
);
$amazon_order_id = "amazon_order_id_example"; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array("marketplace_ids_example"); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$body = new \Evers\SellingPartnerApi\Model\CreateConfirmCustomizationDetailsRequest(); // \Evers\SellingPartnerApi\Model\CreateConfirmCustomizationDetailsRequest | 

try {
    $result = $apiInstance->confirmCustomizationDetails($amazon_order_id, $marketplace_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->confirmCustomizationDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **body** | [**\Evers\SellingPartnerApi\Model\CreateConfirmCustomizationDetailsRequest**](../Model/CreateConfirmCustomizationDetailsRequest.md)|  |

### Return type

[**\Evers\SellingPartnerApi\Model\CreateConfirmCustomizationDetailsResponse**](../Model/CreateConfirmCustomizationDetailsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/hal+json

[[Top]](#) [[API list]](../) [[Model list]](../Model) [[README]](../../README.md)

# **createAmazonMotors**
> \Evers\SellingPartnerApi\Model\CreateAmazonMotorsResponse createAmazonMotors($amazon_order_id, $marketplace_ids, $body)



Sends a message to a buyer to provide details about an Amazon Motors order. This message can only be sent by Amazon Motors sellers.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\MessagingApi(
);
$amazon_order_id = "amazon_order_id_example"; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array("marketplace_ids_example"); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$body = new \Evers\SellingPartnerApi\Model\CreateAmazonMotorsRequest(); // \Evers\SellingPartnerApi\Model\CreateAmazonMotorsRequest | 

try {
    $result = $apiInstance->createAmazonMotors($amazon_order_id, $marketplace_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->createAmazonMotors: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **body** | [**\Evers\SellingPartnerApi\Model\CreateAmazonMotorsRequest**](../Model/CreateAmazonMotorsRequest.md)|  |

### Return type

[**\Evers\SellingPartnerApi\Model\CreateAmazonMotorsResponse**](../Model/CreateAmazonMotorsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/hal+json

[[Top]](#) [[API list]](../) [[Model list]](../Model) [[README]](../../README.md)

# **createConfirmDeliveryDetails**
> \Evers\SellingPartnerApi\Model\CreateConfirmDeliveryDetailsResponse createConfirmDeliveryDetails($amazon_order_id, $marketplace_ids, $body)



Sends a message to a buyer to arrange a delivery or to confirm contact information for making a delivery.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\MessagingApi(
);
$amazon_order_id = "amazon_order_id_example"; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array("marketplace_ids_example"); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$body = new \Evers\SellingPartnerApi\Model\CreateConfirmDeliveryDetailsRequest(); // \Evers\SellingPartnerApi\Model\CreateConfirmDeliveryDetailsRequest | 

try {
    $result = $apiInstance->createConfirmDeliveryDetails($amazon_order_id, $marketplace_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->createConfirmDeliveryDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **body** | [**\Evers\SellingPartnerApi\Model\CreateConfirmDeliveryDetailsRequest**](../Model/CreateConfirmDeliveryDetailsRequest.md)|  |

### Return type

[**\Evers\SellingPartnerApi\Model\CreateConfirmDeliveryDetailsResponse**](../Model/CreateConfirmDeliveryDetailsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/hal+json

[[Top]](#) [[API list]](../) [[Model list]](../Model) [[README]](../../README.md)

# **createConfirmOrderDetails**
> \Evers\SellingPartnerApi\Model\CreateConfirmOrderDetailsResponse createConfirmOrderDetails($amazon_order_id, $marketplace_ids, $body)



Sends a message to ask a buyer an order-related question prior to shipping their order.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\MessagingApi(
);
$amazon_order_id = "amazon_order_id_example"; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array("marketplace_ids_example"); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$body = new \Evers\SellingPartnerApi\Model\CreateConfirmOrderDetailsRequest(); // \Evers\SellingPartnerApi\Model\CreateConfirmOrderDetailsRequest | 

try {
    $result = $apiInstance->createConfirmOrderDetails($amazon_order_id, $marketplace_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->createConfirmOrderDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **body** | [**\Evers\SellingPartnerApi\Model\CreateConfirmOrderDetailsRequest**](../Model/CreateConfirmOrderDetailsRequest.md)|  |

### Return type

[**\Evers\SellingPartnerApi\Model\CreateConfirmOrderDetailsResponse**](../Model/CreateConfirmOrderDetailsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/hal+json

[[Top]](#) [[API list]](../) [[Model list]](../Model) [[README]](../../README.md)

# **createConfirmServiceDetails**
> \Evers\SellingPartnerApi\Model\CreateConfirmServiceDetailsResponse createConfirmServiceDetails($amazon_order_id, $marketplace_ids, $body)



Sends a message to contact a Home Service customer to arrange a service call or to gather information prior to a service call.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\MessagingApi(
);
$amazon_order_id = "amazon_order_id_example"; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array("marketplace_ids_example"); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$body = new \Evers\SellingPartnerApi\Model\CreateConfirmServiceDetailsRequest(); // \Evers\SellingPartnerApi\Model\CreateConfirmServiceDetailsRequest | 

try {
    $result = $apiInstance->createConfirmServiceDetails($amazon_order_id, $marketplace_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->createConfirmServiceDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **body** | [**\Evers\SellingPartnerApi\Model\CreateConfirmServiceDetailsRequest**](../Model/CreateConfirmServiceDetailsRequest.md)|  |

### Return type

[**\Evers\SellingPartnerApi\Model\CreateConfirmServiceDetailsResponse**](../Model/CreateConfirmServiceDetailsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/hal+json

[[Top]](#) [[API list]](../) [[Model list]](../Model) [[README]](../../README.md)

# **createDigitalAccessKey**
> \Evers\SellingPartnerApi\Model\CreateDigitalAccessKeyResponse createDigitalAccessKey($amazon_order_id, $marketplace_ids, $body)



Sends a message to a buyer to share a digital access key needed to utilize digital content in their order.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\MessagingApi(
);
$amazon_order_id = "amazon_order_id_example"; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array("marketplace_ids_example"); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$body = new \Evers\SellingPartnerApi\Model\CreateDigitalAccessKeyRequest(); // \Evers\SellingPartnerApi\Model\CreateDigitalAccessKeyRequest | 

try {
    $result = $apiInstance->createDigitalAccessKey($amazon_order_id, $marketplace_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->createDigitalAccessKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **body** | [**\Evers\SellingPartnerApi\Model\CreateDigitalAccessKeyRequest**](../Model/CreateDigitalAccessKeyRequest.md)|  |

### Return type

[**\Evers\SellingPartnerApi\Model\CreateDigitalAccessKeyResponse**](../Model/CreateDigitalAccessKeyResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/hal+json

[[Top]](#) [[API list]](../) [[Model list]](../Model) [[README]](../../README.md)

# **createLegalDisclosure**
> \Evers\SellingPartnerApi\Model\CreateLegalDisclosureResponse createLegalDisclosure($amazon_order_id, $marketplace_ids, $body)



Sends a critical message that contains documents that a seller is legally obligated to provide to the buyer. This message should only be used to deliver documents that are required by law.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\MessagingApi(
);
$amazon_order_id = "amazon_order_id_example"; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array("marketplace_ids_example"); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$body = new \Evers\SellingPartnerApi\Model\CreateLegalDisclosureRequest(); // \Evers\SellingPartnerApi\Model\CreateLegalDisclosureRequest | 

try {
    $result = $apiInstance->createLegalDisclosure($amazon_order_id, $marketplace_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->createLegalDisclosure: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **body** | [**\Evers\SellingPartnerApi\Model\CreateLegalDisclosureRequest**](../Model/CreateLegalDisclosureRequest.md)|  |

### Return type

[**\Evers\SellingPartnerApi\Model\CreateLegalDisclosureResponse**](../Model/CreateLegalDisclosureResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/hal+json

[[Top]](#) [[API list]](../) [[Model list]](../Model) [[README]](../../README.md)

# **createNegativeFeedbackRemoval**
> \Evers\SellingPartnerApi\Model\CreateNegativeFeedbackRemovalResponse createNegativeFeedbackRemoval($amazon_order_id, $marketplace_ids)



Sends a non-critical message that asks a buyer to remove their negative feedback. This message should only be sent after the seller has resolved the buyer's problem.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\MessagingApi(
);
$amazon_order_id = "amazon_order_id_example"; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array("marketplace_ids_example"); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.

try {
    $result = $apiInstance->createNegativeFeedbackRemoval($amazon_order_id, $marketplace_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->createNegativeFeedbackRemoval: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |

### Return type

[**\Evers\SellingPartnerApi\Model\CreateNegativeFeedbackRemovalResponse**](../Model/CreateNegativeFeedbackRemovalResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/hal+json

[[Top]](#) [[API list]](../) [[Model list]](../Model) [[README]](../../README.md)

# **createUnexpectedProblem**
> \Evers\SellingPartnerApi\Model\CreateUnexpectedProblemResponse createUnexpectedProblem($amazon_order_id, $marketplace_ids, $body)



Sends a critical message to a buyer that an unexpected problem was encountered affecting the completion of the order.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\MessagingApi(
);
$amazon_order_id = "amazon_order_id_example"; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array("marketplace_ids_example"); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$body = new \Evers\SellingPartnerApi\Model\CreateUnexpectedProblemRequest(); // \Evers\SellingPartnerApi\Model\CreateUnexpectedProblemRequest | 

try {
    $result = $apiInstance->createUnexpectedProblem($amazon_order_id, $marketplace_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->createUnexpectedProblem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **body** | [**\Evers\SellingPartnerApi\Model\CreateUnexpectedProblemRequest**](../Model/CreateUnexpectedProblemRequest.md)|  |

### Return type

[**\Evers\SellingPartnerApi\Model\CreateUnexpectedProblemResponse**](../Model/CreateUnexpectedProblemResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/hal+json

[[Top]](#) [[API list]](../) [[Model list]](../Model) [[README]](../../README.md)

# **createWarranty**
> \Evers\SellingPartnerApi\Model\CreateWarrantyResponse createWarranty($amazon_order_id, $marketplace_ids, $body)



Sends a message to a buyer to provide details about warranty information on a purchase in their order.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\MessagingApi(
);
$amazon_order_id = "amazon_order_id_example"; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array("marketplace_ids_example"); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$body = new \Evers\SellingPartnerApi\Model\CreateWarrantyRequest(); // \Evers\SellingPartnerApi\Model\CreateWarrantyRequest | 

try {
    $result = $apiInstance->createWarranty($amazon_order_id, $marketplace_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->createWarranty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **body** | [**\Evers\SellingPartnerApi\Model\CreateWarrantyRequest**](../Model/CreateWarrantyRequest.md)|  |

### Return type

[**\Evers\SellingPartnerApi\Model\CreateWarrantyResponse**](../Model/CreateWarrantyResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/hal+json

[[Top]](#) [[API list]](../) [[Model list]](../Model) [[README]](../../README.md)

# **getAttributes**
> \Evers\SellingPartnerApi\Model\GetAttributesResponse getAttributes($amazon_order_id, $marketplace_ids)



Returns a response containing attributes related to an order. This includes buyer preferences.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\MessagingApi(
);
$amazon_order_id = "amazon_order_id_example"; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array("marketplace_ids_example"); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.

try {
    $result = $apiInstance->getAttributes($amazon_order_id, $marketplace_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->getAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |

### Return type

[**\Evers\SellingPartnerApi\Model\GetAttributesResponse**](../Model/GetAttributesResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/hal+json

[[Top]](#) [[API list]](../) [[Model list]](../Model) [[README]](../../README.md)

# **getMessagingActionsForOrder**
> \Evers\SellingPartnerApi\Model\GetMessagingActionsForOrderResponse getMessagingActionsForOrder($amazon_order_id, $marketplace_ids)



Returns a list of message types that are available for an order that you specify. A message type is represented by an actions object, which contains a path and query parameter(s). You can use the path and parameter(s) to call an operation that sends a message.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\MessagingApi(
);
$amazon_order_id = "amazon_order_id_example"; // string | An Amazon order identifier. This specifies the order for which you want a list of available message types.
$marketplace_ids = array("marketplace_ids_example"); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.

try {
    $result = $apiInstance->getMessagingActionsForOrder($amazon_order_id, $marketplace_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->getMessagingActionsForOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which you want a list of available message types. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |

### Return type

[**\Evers\SellingPartnerApi\Model\GetMessagingActionsForOrderResponse**](../Model/GetMessagingActionsForOrderResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/hal+json

[[Top]](#) [[API list]](../) [[Model list]](../Model) [[README]](../../README.md)

