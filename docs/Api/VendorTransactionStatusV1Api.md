# SellingPartnerApi\VendorTransactionStatusV1Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTransaction()**](VendorTransactionStatusV1Api.md#getTransaction) | **GET** /vendor/transactions/v1/transactions/{transactionId} | 


## `getTransaction()`

```php
getTransaction($transaction_id): \SellingPartnerApi\Model\VendorTransactionStatusV1\GetTransactionResponse
```



Returns the status of the transaction that you specify.

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

$apiInstance = new SellingPartnerApi\Api\VendorTransactionStatusV1Api($config);
$transaction_id = 'transaction_id_example'; // string | The GUID provided by Amazon in the 'transactionId' field in response to the post request of a specific transaction.

try {
    $result = $apiInstance->getTransaction($transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorTransactionStatusV1Api->getTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **string**| The GUID provided by Amazon in the 'transactionId' field in response to the post request of a specific transaction. |

### Return type

[**\SellingPartnerApi\Model\VendorTransactionStatusV1\GetTransactionResponse**](../Model/VendorTransactionStatusV1/GetTransactionResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[VendorTransactionStatusV1 Model list]](../Model/VendorTransactionStatusV1)
[[README]](../../README.md)
