# SellingPartnerApi\VendorDirectFulfillmentSandboxV20211028Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**generateOrderScenarios()**](VendorDirectFulfillmentSandboxV20211028Api.md#generateOrderScenarios) | **POST** /vendor/directFulfillment/sandbox/2021-10-28/orders | 
[**getOrderScenarios()**](VendorDirectFulfillmentSandboxV20211028Api.md#getOrderScenarios) | **GET** /vendor/directFulfillment/sandbox/2021-10-28/transactions/{transactionId} | 


## `generateOrderScenarios()`

```php
generateOrderScenarios($body): \SellingPartnerApi\Model\VendorDirectFulfillmentSandboxV20211028\TransactionReference
```



Submits a request to generate test order data for Vendor Direct Fulfillment API entities.

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

$apiInstance = new SellingPartnerApi\Api\VendorDirectFulfillmentSandboxV20211028Api($config);
$body = new \SellingPartnerApi\Model\VendorDirectFulfillmentSandboxV20211028\GenerateOrderScenarioRequest(); // \SellingPartnerApi\Model\VendorDirectFulfillmentSandboxV20211028\GenerateOrderScenarioRequest

try {
    $result = $apiInstance->generateOrderScenarios($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorDirectFulfillmentSandboxV20211028Api->generateOrderScenarios: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentSandboxV20211028\GenerateOrderScenarioRequest**](../Model/VendorDirectFulfillmentSandboxV20211028/GenerateOrderScenarioRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\VendorDirectFulfillmentSandboxV20211028\TransactionReference**](../Model/VendorDirectFulfillmentSandboxV20211028/TransactionReference.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[VendorDirectFulfillmentSandboxV20211028 Model list]](../Model/VendorDirectFulfillmentSandboxV20211028)
[[README]](../../README.md)

## `getOrderScenarios()`

```php
getOrderScenarios($transaction_id): \SellingPartnerApi\Model\VendorDirectFulfillmentSandboxV20211028\TransactionStatus
```



Returns the status of the transaction indicated by the specified transactionId. If the transaction was successful, also returns the requested test order data.

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

$apiInstance = new SellingPartnerApi\Api\VendorDirectFulfillmentSandboxV20211028Api($config);
$transaction_id = 'transaction_id_example'; // string | The transaction identifier returned in the response to the generateOrderScenarios operation.

try {
    $result = $apiInstance->getOrderScenarios($transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorDirectFulfillmentSandboxV20211028Api->getOrderScenarios: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **string**| The transaction identifier returned in the response to the generateOrderScenarios operation. |

### Return type

[**\SellingPartnerApi\Model\VendorDirectFulfillmentSandboxV20211028\TransactionStatus**](../Model/VendorDirectFulfillmentSandboxV20211028/TransactionStatus.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[VendorDirectFulfillmentSandboxV20211028 Model list]](../Model/VendorDirectFulfillmentSandboxV20211028)
[[README]](../../README.md)
