# SellingPartnerApi\EasyShipV20220323Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**createScheduledPackage()**](EasyShipV20220323Api.md#createScheduledPackage) | **POST** /easyShip/2022-03-23/package | 
[**getScheduledPackage()**](EasyShipV20220323Api.md#getScheduledPackage) | **GET** /easyShip/2022-03-23/package | 
[**listHandoverSlots()**](EasyShipV20220323Api.md#listHandoverSlots) | **POST** /easyShip/2022-03-23/timeSlot | 
[**updateScheduledPackages()**](EasyShipV20220323Api.md#updateScheduledPackages) | **PATCH** /easyShip/2022-03-23/package | 


## `createScheduledPackage()`

```php
createScheduledPackage($create_scheduled_package_request): \SellingPartnerApi\Model\EasyShipV20220323\Package
```



Schedules an Easy Ship order and returns the scheduled package information.

This operation does the following:

*  Specifies the time slot and handover method for the order to be scheduled for delivery.

* Updates the Easy Ship order status.

* Generates a shipping label and an invoice. Calling `createScheduledPackage` also generates a warranty document if you specify a `SerialNumber` value. To get these documents, see [How to get invoice, shipping label, and warranty documents](https://developer-docs.amazon.com/sp-api/docs/easy-ship-api-v2022-03-23-use-case-guide).

* Shows the status of Easy Ship orders when you call the `getOrders` operation of the Selling Partner API for Orders and examine the `EasyShipShipmentStatus` property in the response body.

See the **Shipping Label**, **Invoice**, and **Warranty** columns in the [Marketplace Support Table](https://developer-docs.amazon.com/sp-api/docs/easy-ship-api-v2022-03-23-use-case-guide) to see which documents are supported in each marketplace.

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

$apiInstance = new SellingPartnerApi\Api\EasyShipV20220323Api($config);
$create_scheduled_package_request = new \SellingPartnerApi\Model\EasyShipV20220323\CreateScheduledPackageRequest(); // \SellingPartnerApi\Model\EasyShipV20220323\CreateScheduledPackageRequest

try {
    $result = $apiInstance->createScheduledPackage($create_scheduled_package_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EasyShipV20220323Api->createScheduledPackage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_scheduled_package_request** | [**\SellingPartnerApi\Model\EasyShipV20220323\CreateScheduledPackageRequest**](../Model/EasyShipV20220323/CreateScheduledPackageRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\EasyShipV20220323\Package**](../Model/EasyShipV20220323/Package.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[EasyShipV20220323 Model list]](../Model/EasyShipV20220323)
[[README]](../../README.md)

## `getScheduledPackage()`

```php
getScheduledPackage($amazon_order_id, $marketplace_id): \SellingPartnerApi\Model\EasyShipV20220323\Package
```



Returns information about a package, including dimensions, weight, time slot information for handover, invoice and item information, and status.

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

$apiInstance = new SellingPartnerApi\Api\EasyShipV20220323Api($config);
$amazon_order_id = 'amazon_order_id_example'; // string | An Amazon-defined order identifier. Identifies the order that the seller wants to deliver using Amazon Easy Ship.
$marketplace_id = 'marketplace_id_example'; // string | An identifier for the marketplace in which the seller is selling.

try {
    $result = $apiInstance->getScheduledPackage($amazon_order_id, $marketplace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EasyShipV20220323Api->getScheduledPackage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon-defined order identifier. Identifies the order that the seller wants to deliver using Amazon Easy Ship. |
 **marketplace_id** | **string**| An identifier for the marketplace in which the seller is selling. |

### Return type

[**\SellingPartnerApi\Model\EasyShipV20220323\Package**](../Model/EasyShipV20220323/Package.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[EasyShipV20220323 Model list]](../Model/EasyShipV20220323)
[[README]](../../README.md)

## `listHandoverSlots()`

```php
listHandoverSlots($list_handover_slots_request): \SellingPartnerApi\Model\EasyShipV20220323\ListHandoverSlotsResponse
```



Returns time slots available for Easy Ship orders to be scheduled based on the package weight and dimensions that the seller specifies.

This operation is available for scheduled and unscheduled orders based on marketplace support. See **Get Time Slots** in the [Marketplace Support Table](https://developer-docs.amazon.com/sp-api/docs/easy-ship-api-v2022-03-23-use-case-guide).

This operation can return time slots that have either pickup or drop-off handover methods - see **Supported Handover Methods** in the [Marketplace Support Table](https://developer-docs.amazon.com/sp-api/docs/easy-ship-api-v2022-03-23-use-case-guide).

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

$apiInstance = new SellingPartnerApi\Api\EasyShipV20220323Api($config);
$list_handover_slots_request = new \SellingPartnerApi\Model\EasyShipV20220323\ListHandoverSlotsRequest(); // \SellingPartnerApi\Model\EasyShipV20220323\ListHandoverSlotsRequest

try {
    $result = $apiInstance->listHandoverSlots($list_handover_slots_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EasyShipV20220323Api->listHandoverSlots: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_handover_slots_request** | [**\SellingPartnerApi\Model\EasyShipV20220323\ListHandoverSlotsRequest**](../Model/EasyShipV20220323/ListHandoverSlotsRequest.md)|  | [optional]

### Return type

[**\SellingPartnerApi\Model\EasyShipV20220323\ListHandoverSlotsResponse**](../Model/EasyShipV20220323/ListHandoverSlotsResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[EasyShipV20220323 Model list]](../Model/EasyShipV20220323)
[[README]](../../README.md)

## `updateScheduledPackages()`

```php
updateScheduledPackages($update_scheduled_packages_request): \SellingPartnerApi\Model\EasyShipV20220323\Packages
```



Updates the time slot for handing over the package indicated by the specified `scheduledPackageId`. You can get the new `slotId` value for the time slot by calling the `listHandoverSlots` operation before making another `patch` call.

See the **Update Package** column in the [Marketplace Support Table](https://developer-docs.amazon.com/sp-api/docs/easy-ship-api-v2022-03-23-use-case-guide) to see which marketplaces this operation is supported in.

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

$apiInstance = new SellingPartnerApi\Api\EasyShipV20220323Api($config);
$update_scheduled_packages_request = new \SellingPartnerApi\Model\EasyShipV20220323\UpdateScheduledPackagesRequest(); // \SellingPartnerApi\Model\EasyShipV20220323\UpdateScheduledPackagesRequest

try {
    $result = $apiInstance->updateScheduledPackages($update_scheduled_packages_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EasyShipV20220323Api->updateScheduledPackages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_scheduled_packages_request** | [**\SellingPartnerApi\Model\EasyShipV20220323\UpdateScheduledPackagesRequest**](../Model/EasyShipV20220323/UpdateScheduledPackagesRequest.md)|  | [optional]

### Return type

[**\SellingPartnerApi\Model\EasyShipV20220323\Packages**](../Model/EasyShipV20220323/Packages.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[EasyShipV20220323 Model list]](../Model/EasyShipV20220323)
[[README]](../../README.md)
