# Evers\SellingPartnerApi\SellersApi

All URIs are relative to *https://sellingpartnerapi-na.amazon.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMarketplaceParticipations**](SellersApi.md#getMarketplaceParticipations) | **GET** /sellers/v1/marketplaceParticipations | 


# **getMarketplaceParticipations**
> \Evers\SellingPartnerApi\Model\GetMarketplaceParticipationsResponse getMarketplaceParticipations()



Returns a list of marketplaces that the seller submitting the request can sell in and information about the seller's participation in those marketplaces.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | .016 | 15 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evers\SellingPartnerApi\Api\SellersApi(
);

try {
    $result = $apiInstance->getMarketplaceParticipations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SellersApi->getMarketplaceParticipations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Evers\SellingPartnerApi\Model\GetMarketplaceParticipationsResponse**](../Model/GetMarketplaceParticipationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Top]](#) [[API list]](../) [[Model list]](../Model) [[README]](../../README.md)

