# Evers\SellingPartnerApi\SolicitationsApi

All URIs are relative to *https://sellingpartnerapi-na.amazon.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProductReviewAndSellerFeedbackSolicitation**](SolicitationsApi.md#createProductReviewAndSellerFeedbackSolicitation) | **POST** /solicitations/v1/orders/{amazonOrderId}/solicitations/productReviewAndSellerFeedback | 
[**getSolicitationActionsForOrder**](SolicitationsApi.md#getSolicitationActionsForOrder) | **GET** /solicitations/v1/orders/{amazonOrderId} | 


# **createProductReviewAndSellerFeedbackSolicitation**
> \Evers\SellingPartnerApi\Model\CreateProductReviewAndSellerFeedbackSolicitationResponse createProductReviewAndSellerFeedbackSolicitation($amazon_order_id, $marketplace_ids)



Sends a solicitation to a buyer asking for seller feedback and a product review for the specified order. Send only one productReviewAndSellerFeedback or free form proactive message per order.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\SolicitationsApi(
);
$amazon_order_id = "amazon_order_id_example"; // string | An Amazon order identifier. This specifies the order for which a solicitation is sent.
$marketplace_ids = array("marketplace_ids_example"); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.

try {
    $result = $apiInstance->createProductReviewAndSellerFeedbackSolicitation($amazon_order_id, $marketplace_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolicitationsApi->createProductReviewAndSellerFeedbackSolicitation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a solicitation is sent. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |

### Return type

[**\Evers\SellingPartnerApi\Model\CreateProductReviewAndSellerFeedbackSolicitationResponse**](../Model/CreateProductReviewAndSellerFeedbackSolicitationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/hal+json

[[Top]](#) [[API list]](../) [[Model list]](../Model) [[README]](../../README.md)

# **getSolicitationActionsForOrder**
> \Evers\SellingPartnerApi\Model\GetSolicitationActionsForOrderResponse getSolicitationActionsForOrder($amazon_order_id, $marketplace_ids)



Returns a list of solicitation types that are available for an order that you specify. A solicitation type is represented by an actions object, which contains a path and query parameter(s). You can use the path and parameter(s) to call an operation that sends a solicitation. Currently only the productReviewAndSellerFeedbackSolicitation solicitation type is available.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\SolicitationsApi(
);
$amazon_order_id = "amazon_order_id_example"; // string | An Amazon order identifier. This specifies the order for which you want a list of available solicitation types.
$marketplace_ids = array("marketplace_ids_example"); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.

try {
    $result = $apiInstance->getSolicitationActionsForOrder($amazon_order_id, $marketplace_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolicitationsApi->getSolicitationActionsForOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which you want a list of available solicitation types. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |

### Return type

[**\Evers\SellingPartnerApi\Model\GetSolicitationActionsForOrderResponse**](../Model/GetSolicitationActionsForOrderResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/hal+json

[[Top]](#) [[API list]](../) [[Model list]](../Model) [[README]](../../README.md)

