# SellingPartnerApi\VendorDirectFulfillmentTransactionsV20211228Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTransactionStatus()**](VendorDirectFulfillmentTransactionsV20211228Api.md#getTransactionStatus) | **GET** /vendor/directFulfillment/transactions/2021-12-28/transactions/{transactionId} | 


## `getTransactionStatus()`

```php
getTransactionStatus($transaction_id): \SellingPartnerApi\Model\VendorDirectFulfillmentTransactionsV20211228\TransactionStatus
```



Returns the status of the transaction indicated by the specified transactionId.

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 10 | 10 |

The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values then those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

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

$apiInstance = new SellingPartnerApi\Api\VendorDirectFulfillmentTransactionsV20211228Api($config);
$transaction_id = 'transaction_id_example'; // string | Previously returned in the response to the POST request of a specific transaction.

try {
    $result = $apiInstance->getTransactionStatus($transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorDirectFulfillmentTransactionsV20211228Api->getTransactionStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **string**| Previously returned in the response to the POST request of a specific transaction. |

### Return type

[**\SellingPartnerApi\Model\VendorDirectFulfillmentTransactionsV20211228\TransactionStatus**](../Model/VendorDirectFulfillmentTransactionsV20211228/TransactionStatus.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[VendorDirectFulfillmentTransactionsV20211228 Model list]](../Model/VendorDirectFulfillmentTransactionsV20211228)
[[README]](../../README.md)
