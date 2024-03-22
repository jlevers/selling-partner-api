<p align="center">
    <a href="https://highsidelabs.co" target="_blank">
        <img src="https://github.com/highsidelabs/.github/blob/main/images/logo.png?raw=true" width="125">
    </a>
</p>

<p align="center">
    <a href="https://packagist.org/packages/jlevers/selling-partner-api"><img alt="Total downloads" src="https://img.shields.io/packagist/dt/jlevers/selling-partner-api.svg?style=flat-square"></a>
    <a href="https://packagist.org/packages/jlevers/selling-partner-api"><img alt="Latest stable version" src="https://img.shields.io/packagist/v/jlevers/selling-partner-api.svg?style=flat-square"></a>
    <a href="https://packagist.org/packages/jlevers/selling-partner-api"><img alt="License" src="https://img.shields.io/packagist/l/jlevers/selling-partner-api.svg?style=flat-square"></a>
</p>

## Selling Partner API for PHP
A PHP library for connecting to Amazon's [Selling Partner API](https://github.com/amzn/selling-partner-api-docs/).

### Related packages

* [`highsidelabs/laravel-spapi`](https://github.com/highsidelabs/laravel-spapi): A [Laravel](https://laravel.com) wrapper for this package that makes SP API integration in Laravel projects quick and easy.
* [`highsidelabs/amazon-business-api`](https://github.com/highsidelabs/amazon-business-api): A PHP library for Amazon's [Business API](https://developer-docs.amazon.com/amazon-business/docs), with a near-identical interface to this package.
* [`highsidelabs/walmart-api`](https://github.com/highsidelabs/walmart-api-php): A PHP library for [Walmart's seller and supplier APIs](https://developer.walmart.com), including the Marketplace, Drop Ship Vendor, Content Provider, and Warehouse Supplier APIs.

---

**This package is developed and maintained by [Highside Labs](https://highsidelabs.co). If you need support integrating with Amazon's (or any other e-commerce platform's) APIs, we're happy to help! Shoot us an email at [hi@highsidelabs.co](mailto:hi@highsidelabs.co). We'd love to hear from you :)**

If you've found any of our packages useful, please consider [becoming a Sponsor](https://github.com/sponsors/jlevers), or making a one-time donation via the button below. I appreciate any and all support you can provide!

<p align="center">
    <a href="https://www.paypal.com/donate?business=EL4PRLAEMGXNQ&currency_code=USD"><img alt="Donate to Highside Labs" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif"></a>
</p>

### Sponsored by **[Tesmo](https://tesmollc.com)**.

---

## Features

* Supports all Selling Partner API operations (for Sellers and Vendors) as of 2/10/2024
* Automatically generates Restricted Data Tokens for all calls that require them -- no extra calls to the Tokens API needed
* Includes a [`Document` helper class](#uploading-and-downloading-documents) for uploading and downloading feed/report documents


## Installation

`composer require jlevers/selling-partner-api`


## Table of Contents

Check out the [Getting Started](#getting-started) section below for a quick overview.

This README is divided into several sections:
* [Setup](#setup)
    * [Configuration options](#configuration-options)
* [Debugging](#debugging)
* [Supported API segments](#supported-api-segments)
    * [Seller APIs](#seller-apis)
    * [Vendor APIs](#vendor-apis)
* [Restricted operations](#restricted-operations)
* [Uploading and downloading documents](#uploading-and-downloading-documents)
    * [Downloading a report document](#downloading-a-report-document)
    * [Uploading a feed document](#uploading-a-feed-document)
    * [Downloading a feed result document](#downloading-a-feed-result-document)
* [Naming conventions](#naming-conventions)
* [API versions](#api-versions)
* [Working with DTOs](#working-with-dtos)

## Getting Started

### Prerequisites

To get started, you need an approved Selling Partner API developer account, and SP API application credentials, which you can get by creating a new SP API application in Seller Central.



### Setup

The [`SellingPartnerApi`](https://github.com/jlevers/selling-partner-api/blob/main/src/SellingPartnerApi.php) class acts as a factory to generate API connector instances. It takes a set of (optionally) named parameters. Its basic usage looks like this:

```php
use SellingPartnerApi\SellingPartnerApi;
use SellingPartnerApi\Enums\Endpoint;

$connector = SellingPartnerApi::make(
    clientId: 'amzn1.application-oa2-client.asdfqwertyuiop...',
    clientSecret: 'amzn1.oa2-cs.v1.1234567890asdfghjkl...',
    refreshToken: 'Atzr|IwEBIA...',
    endpoint: Endpoint::NA,  // Or Endpoint::EU, Endpoint::FE, Endpoint::NA_SANDBOX, etc.
)->seller();
```

> [!NOTE]
> Older versions of the Selling Partner API used AWS IAM credentials to authenticate, and so this library had additional AWS configuration options. If you're upgrading from an older version of this library and are confused about what to do with your AWS creds, you can just ignore them. The SP API no longer authenticates via AWS IAM roles or users.

Now you have a Selling Partner API connector instance, and you can start making calls to the API. The connector instance has methods for each of the API segments (e.g., `sellers`, `orders`, `fba-inbound`), and you can access them like so:

```php
$ordersApi = $connector->orders();
$response = $ordersApi->getOrders(
    createdAfter: new DateTime('2024-01-01'),
    marketplaceIds: ['ATVPDKIKX0DER'],
);
```

Once you have a response, you can either access the raw JSON response via `$response->json()`, or you can automatically parse the response into a DTO by calling `$response->dto()`. Once the response is turned into a DTO, you can access the data via the DTO's properties. For instance, you can get the first order's purchase date like so:

```php
$dto = $response->dto();
$purchaseDate = $dto->payload->orders[0]->purchaseDate;
```

See the [Working with DTOs](#working-with-dtos) section for more details on how to work with requests and responses.


##### Configuration options

The `SellingPartnerApi::make()` builder method accepts the following keys:

* `clientId (string)`: Required. The LWA client ID of the SP API application to use to execute API requests.
* `clientSecret (string)`: Required. The LWA client secret of the SP API application to use to execute API requests.
* `refreshToken (string)`: The LWA refresh token of the SP API application to use to execute API requests. Required, unless you're only using [grantless operations](https://developer-docs.amazon.com/sp-api/docs/grantless-operations).
* `endpoint`: Required. An instance of the [`SellingPartnerApi\Enums\Endpoint` enum](https://github.com/jlevers/selling-partner-api/blob/main/src/Enums/Endpoint.php). Primary endpoints are `Endpoint::NA`, `Endpoint::EU`, and `Endpoint::FE`. Sandbox endpoints are `Endpoint::NA_SANDBOX`, `Endpoint::EU_SANDBOX`, and `Endpoint::FE_SANDBOX`.
* `dataElements (array)`: Optional. An array of data elements to pass to restricted operations. See the [Restricted operations](#restricted-operations) section for more details.
* `delegatee (string)`: Optional. The application ID of a delegatee application to generate RDTs on behalf of.
* `authenticationClient`: Optional `GuzzleHttp\ClientInterface` object that will be used to generate the access token from the refresh token. If not provided, a default Guzzle client will be used.


### Debugging

To get detailed debugging output, you can take advantage of [Saloon's debugging hooks](https://docs.saloon.dev/digging-deeper/debugging). This package is built on top of Saloon, so anything that works in Saloon will work here. For instance, to debug requests:

```php
use SellingPartnerApi\SellingPartnerApi;

$connector = SellingPartnerApi::make(
    clientId: 'amzn1.application-oa2-client.asdfqwertyuiop...',
    clientSecret: 'amzn1.oa2-cs.v1.1234567890asdfghjkl...',
    refreshToken: 'Atzr|IwEBIA...',
    endpoint: Endpoint::NA,
)->seller();

$connector->debugRequest(
    function (PendingRequest $pendingRequest, RequestInterface $psrRequest) {
        dd($pendingRequest->headers()->all(), $psrRequest);
    }
);
```

Then make requests with the connector as usual, and you'll hit the closure above every time a request is fired. You can also debug responses in a similar fashion – check out the [Saloon docs](https://docs.saloon.dev/digging-deeper/debugging#debugging-responses) for more details.


## Supported API segments

Each API class name contains the API's version. This allows for multiple versions of the same API to be accessible in a single version of this package. It makes the class names a little uglier, but allows for simultaneously using new and old versions of the same API segment, which is often useful. The uglier names can be remedied by formatting `use` statements like so:

```php
use SellingPartnerApi\Api\SellersV1Api as SellersApi;
use SellingPartnerApi\Model\SellersV1 as Sellers;
```

It also means that if a new version of an existing API is introduced, the library can be updated to include that new version without introducing breaking changes.

### Seller APIs

Seller APIs are accessed via the `SellerConnector` class:

```php
<?php
use SellingPartnerApi\SellingPartnerApi;

$sellerConnector = SellingPartnerApi::make(/* ... */)->seller();
```

* **Application Management API (v2023-11-30)** ([docs](https://developer-docs.amazon.com/sp-api/docs/application-management-api-v2023-11-30-reference))
    ```php
    $applicationManagementApi = $sellerConnector->applicationManagement();
    ```
* **A+ Content API (v2020-11-01)** ([docs](https://developer-docs.amazon.com/sp-api/docs/selling-partner-api-for-a-content-management))
    ```php
    $aPlusContentApi = $sellerConnector->aPlusContent();
    ```
* **Authorization API (v1)** ([docs](https://developer-docs.amazon.com/sp-api/docs/authorization-api-v1-reference))
    ```php
    $authorizationApi = $sellerConnector->authorization();
    ```
* **Catalog Items API (v2022-04-01)** ([docs](https://developer-docs.amazon.com/sp-api/docs/catalog-items-api-v2022-04-01-reference))
    ```php
    $catalogItemsApi = $sellerConnector->catalogItems();
    ```
* **Catalog Items API (v2021-12-01)** ([docs](https://developer-docs.amazon.com/sp-api/docs/catalog-items-api-v2020-12-01-reference))
    ```php
    $catalogItemsApi = $sellerConnector->catalogItemsV20211201();
    ```
* **Catalog Items API (v0)** ([docs](https://developer-docs.amazon.com/sp-api/docs/catalog-items-api-v0-reference))
    ```php
    $catalogItemsApi = $sellerConnector->catalogItemsV0();
    ```
* **Data Kiosk API (v2023-11-15)** ([docs](https://developer-docs.amazon.com/sp-api/v0/docs/data-kiosk-api-v2023-11-15-reference))
    ```php
    $dataKioskApi = $sellerConnector->dataKiosk();
    ```
* **EasyShip API (v2022-03-23)** ([docs](https://developer-docs.amazon.com/sp-api/docs/easy-ship-api-v2022-03-23-reference))
    ```php
    $easyShipApi = $sellerConnector->easyShip();
    ```
* **FBA Inbound API (v0)** ([docs](https://developer-docs.amazon.com/sp-api/docs/fulfillment-inbound-api-v0-reference))
    ```php
    $fbaInboundApi = $sellerConnector->fbaInbound();
    ```
* **FBA Inbound Eligibility API (v1)** ([docs](https://developer-docs.amazon.com/sp-api/docs/fbainboundeligibility-api-v1-reference))
    ```php
    $fbaInboundEligibility = $sellerConnector->fbaInboundEligibility();
    ```
* **FBA Inventory API (v1)** ([docs](https://developer-docs.amazon.com/sp-api/docs/fbainventory-api-v1-reference))
    ```php
    $fbaInventoryApi = $sellerConnector->fbaInventory();
    ```
* **FBA Outbound API (v2020-07-01)** ([docs](https://developer-docs.amazon.com/sp-api/docs/fulfillment-outbound-api-v2020-07-01-reference))
    ```php
    $fbaOutboundApi = $sellerConnector->fbaOutbound();
    ```
* **FBA Small and Light API (v1)** ([docs](https://developer-docs.amazon.com/sp-api/docs/fbasmallandlight-api-v1-reference))
    ```php
    $fbaSmallAndLightApi = $sellerConnector->fbaSmallAndLight();
    ```
* **Feeds API (v2021-06-30)** ([docs](https://developer-docs.amazon.com/sp-api/docs/feeds-api-v2021-06-30-reference))
    ```php
    $feedsApi = $sellerConnector->feeds();
    ```
* **Finances API (v0)** ([docs](https://developer-docs.amazon.com/sp-api/docs/finances-api-reference))
    ```php
    $financesApi = $sellerConnector->finances();
    ```
* **Listings Items API (v2021-08-01)** ([docs](https://developer-docs.amazon.com/sp-api/docs/listings-items-api-v2021-08-01-reference))
    ```php
    $listingsItemsApi = $sellerConnector->listingsItems();
    ```
* **Listings Items API (v2020-09-01)** ([docs](https://developer-docs.amazon.com/sp-api/docs/listings-items-api-v2020-09-01-reference))
    ```php
    $listingsItemsApi = $sellerConnector->listingsItemsV20200901();
    ```
* **Listings Restrictions API (v2021-08-01)** ([docs](https://developer-docs.amazon.com/sp-api/docs/listings-restrictions-api-v2021-08-01-reference))
    ```php
    $listingsRestrictionsApi = $sellerConnector->listingsRestrictions();
    ```
* **Merchant Fulfillment API (v0)** ([docs](https://developer-docs.amazon.com/sp-api/docs/merchant-fulfillment-api-v0-reference))
    ```php
    $merchantFulfillmentApi = $sellerConnector->merchantFulfillment();
    ```
* **Messaging API (v1)** ([docs](https://developer-docs.amazon.com/sp-api/docs/merchant-fulfillment-api-v0-reference))
    ```php
    $messagingApi = $sellerConnector->messaging();
    ```
* **Notifications API (v1)** ([docs](https://developer-docs.amazon.com/sp-api/docs/notifications-api-v1-reference))
    ```php
    $notificationsApi = $sellerConnector->notifications();
    ```
* **Orders API (v0)** ([docs](https://developer-docs.amazon.com/sp-api/docs/orders-api-v0-reference))
    ```php
    $ordersApi = $sellerConnector->orders();
    ```
* **Product Fees API (v0)** ([docs](https://developer-docs.amazon.com/sp-api/docs/product-fees-api-v0-reference))
    ```php
    $productFeesApi = $sellerConnector->productFees();
    ```
* **Product Pricing API (v2022-05-01)** ([docs](https://developer-docs.amazon.com/sp-api/docs/product-pricing-api-v2022-05-01-reference))
    ```php
    $productPricingApi = $sellerConnector->productPricing();
    ```
* **Product Pricing API (v0)** ([docs](https://developer-docs.amazon.com/sp-api/docs/product-pricing-api-v0-reference))
    ```php
    $productPricingApi = $sellerConnector->productPricingV0();
    ```
* **Product Type Definitions API (v2020-09-01)** ([docs](https://developer-docs.amazon.com/sp-api/docs/product-type-definitions-api-v2020-09-01-reference))
    ```php
    $productTypeDefinitionsApi = $sellerConnector->productTypeDefinitions();
    ```
* **Replenishment API (v2022-11-07)** ([docs](https://developer-docs.amazon.com/sp-api/docs/replenishment-api-v2022-11-07-use-case-guide))
    ```php
    $replenishmentApi = $sellerConnector->replenishment();
    ```
* **Reports API (v2021-06-30)** ([docs](https://developer-docs.amazon.com/sp-api/docs/reports-api-v2021-06-30-reference))
    ```php
    $reportsApi = $sellerConnector->reports();
    ```
* **Sales API (v1)** ([docs](https://developer-docs.amazon.com/sp-api/docs/sales-api-v1-reference))
    ```php
    $salesApi = $sellerConnector->sales();
    ```
* **Sellers API (v1)** ([docs](https://developer-docs.amazon.com/sp-api/docs/sellers-api-v1-reference))
    ```php
    $sellersApi = $sellerConnector->sellers();
    ```
* **Services API (v1)** ([docs](https://developer-docs.amazon.com/sp-api/docs/services-api-v1-reference))
    ```php
    $servicesApi = $sellerConnector->services();
    ```
* **Shipment Invoicing API (v0)** ([docs](https://developer-docs.amazon.com/sp-api/docs/shipment-invoicing-api-v0-reference))
    ```php
    $shipmentInvoicingApi = $sellerConnector->shipmentInvoicing();
    ```
* **Shipping API (v2)** ([docs](https://developer-docs.amazon.com/amazon-shipping/docs/shipping-api-v2-reference))
    ```php
    $shippingApi = $sellerConnector->shipping();
    ```
* **Shipping API (v1)** ([docs](https://developer-docs.amazon.com/sp-api/docs/shipping-api-v1-reference))
    ```php
    $shippingApi = $sellerConnector->shippingV1();
    ```
* **Solicitations API (v1)** ([docs](https://developer-docs.amazon.com/sp-api/docs/solicitations-api-v1-reference))
    ```php
    $solicitationsApi = $sellerConnector->solicitations();
    ```
* **Supply Sources API (v2020-07-01)** ([docs](https://developer-docs.amazon.com/sp-api/docs/supply-sources-api-v2020-07-01-reference))
    ```php
    $supplySourcesApi = $sellerConnector->supplySources();
    ```
* **Tokens API (v2021-03-01)** ([docs](https://developer-docs.amazon.com/sp-api/docs/tokens-api-v2021-03-01-reference))
    ```php
    $tokensApi = $sellerConnector->tokens();
    ```
* **Uploads API (v2020-11-01)** ([docs](https://developer-docs.amazon.com/sp-api/docs/uploads-api-reference))
    ```php
    $uploadsApi = $sellerConnector->uploads();
    ```

### Vendor APIs

Vendor APIs are accessed via the `VendorConnector` class:

```php
<?php
use SellingPartnerApi\SellingPartnerApi;

$vendorConnector = SellingPartnerApi::make(/* ... */)->vendor();
```

* **Direct Fulfillment Inventory API (v1)** ([docs](https://developer-docs.amazon.com/sp-api/docs/vendor-direct-fulfillment-inventory-api-v1-reference))
    ```php
    $directFulfillmentInventoryApi = $vendorConnector->directFulfillmentInventory();
    ```
* **Direct Fulfillment Orders API (v2021-12-28)** ([docs](https://developer-docs.amazon.com/sp-api/docs/vendor-direct-fulfillment-orders-api-2021-12-28-reference))
    ```php
    $directFulfillmentOrdersApi = $vendorConnector->directFulfillmentOrders();
    ```
* **Direct Fulfillment Orders API (v1)** ([docs](https://developer-docs.amazon.com/sp-api/docs/vendor-direct-fulfillment-orders-api-v1-reference))
    ```php
    $directFulfillmentOrdersApi = $vendorConnector->directFulfillmentOrdersV1();
    ```
* **Direct Fulfillment Payments API (v1)** ([docs](https://developer-docs.amazon.com/sp-api/docs/vendor-direct-fulfillment-payments-api-v1-reference))
    ```php
    $directFulfillmentPaymentsApi = $vendorConnector->directFulfillmentPayments();
    ```
* **Direct Fulfillment Sandbox API (v2021-10-28)** ([docs](https://developer-docs.amazon.com/sp-api/docs/vendor-direct-fulfillment-sandbox-test-data-api-2021-10-28-reference))
    ```php
    $directFulfillmentSandboxApi = $vendorConnector->directFulfillmentSandbox();
    ```
* **Direct Fulfillment Shipping API (v2021-12-28)** ([docs](https://developer-docs.amazon.com/sp-api/docs/vendor-direct-fulfillment-shipping-api-2021-12-28-reference))
    ```php
    $directFulfillmentShippingApi = $vendorConnector->directFulfillmentShipping();
    ```
* **Direct Fulfillment Shipping API (v1)** ([docs](https://developer-docs.amazon.com/sp-api/docs/vendor-direct-fulfillment-shipping-api-v1-reference))
    ```php
    $directFulfillmentShippingApi = $vendorConnector->directFulfillmentShippingV1();
    ```
* **Direct Fulfillment Transactions API (v2021-12-28)** ([docs](https://developer-docs.amazon.com/sp-api/docs/vendor-direct-fulfillment-transactions-api-2021-12-28-reference))
    ```php
    $directFulfillmentTransactionsApi = $vendorConnector->directFulfillmentTransactions();
    ```
* **Direct Fulfillment Transactions API (v1)** ([docs](https://developer-docs.amazon.com/sp-api/docs/vendor-direct-fulfillment-transactions-api-v1-reference))
    ```php
    $directFulfillmentTransactionsApi = $vendorConnector->directFulfillmentTransactionsV1();
    ```
* **Invoices API (v1)** ([docs](https://developer-docs.amazon.com/sp-api/docs/vendor-invoices-api-v1-reference))
    ```php
    $invoicesApi = $vendorConnector->invoices();
    ```
* **Orders API (v1)** ([docs](https://developer-docs.amazon.com/sp-api/docs/vendor-orders-api-v1-reference))
    ```php
    $ordersApi = $vendorConnector->orders();
    ```
* **Shipments API (v1)** ([docs](https://developer-docs.amazon.com/sp-api/docs/vendor-shipments-api-v1-reference))
    ```php
    $shipmentsApi = $vendorConnector->shipments();
    ```
* **Transaction Status API (v1)** ([docs](https://developer-docs.amazon.com/sp-api/docs/vendor-transaction-status-api-v1-reference))
    ```php
    $transactionStatusApi = $vendorConnector->transactionStatus();
    ```


## Restricted operations

When you call a [restricted operation](https://developer-docs.amazon.com/sp-api/docs/tokens-api-use-case-guide), a Restricted Data Token (RDT) is automatically generated. If you're calling restricted operations that accept a [`dataElements`](https://developer-docs.amazon.com/sp-api/docs/tokens-api-use-case-guide#restricted-operations) parameter, specify the restricted data elements you want to retrieve in the `dataElements` parameter of `SellingPartnerApi::make()`. Currently, `getOrder`, `getOrders`, and `getOrderItems` are the only restricted operations that take a `dataElements` parameter.

Note that if you want to call a restricted operation on a sandbox endpoint (e.g., `Endpoint::NA_SANDBOX`), you *should not* specify any `dataElements`. RDTs are not necessary for restricted operations in the sandbox.

If you would like to make calls on behalf of a delegatee application, you can specify the `delegatee` parameter in `SellingPartnerApi::make()`. This will cause the connector to generate a token for the delegatee application instead of the main application.


## Uploading and downloading documents

The Feeds and Reports APIs include operations that involve uploading and downloading documents to and from Amazon. This library has integrated supports for uploading and downloading documents on the relevant DTOs: `ReportDocument`, `CreateFeedDocumentResponse`, and `FeedDocument`, which are the result of calling [`getReportDocument`](https://developer-docs.amazon.com/sp-api/docs/reports-api-v2021-06-30-reference#getreportdocument), [`createFeedDocument`](https://developer-docs.amazon.com/sp-api/docs/feeds-api-v2021-06-30-reference#createfeeddocument), and [`getFeedDocument`](https://developer-docs.amazon.com/sp-api/docs/feeds-api-v2021-06-30-reference#getfeeddocument), respectively.

### Downloading a report document

```php
use SellingPartnerApi\SellingPartnerApi;

$reportType = 'GET_MERCHANT_LISTINGS_DATA';
// Assume we already got a report document ID from a previous getReport call
$documentId = '1234567890.asdf';

$connector = SellingPartnerApi::make(/* ... */)->seller();
$response = $connector->reports()->getReportDocument($documentId, $reportType);

$reportDocument = $response->dto();

/*
 * - Array of arrays, where each sub array corresponds to a row of the report, if this is a TSV, CSV, or XLSX report
 * - A nested associative array (from json_decode) if this is a JSON report
 * - The raw report data if this is a TXT or PDF report
 * - A SimpleXMLElement object if this is an XML report
 */
$contents = $reportDocument->download($reportType);
```

The `download` method has three parameters:
* `documentType` (string): The report type (or feed type of the feed result document being fetched). This is required if you want the document data parsed for you.
* `preProcess` (bool): Whether to preprocess the document data. If `true`, the document data will be parsed and formatted into a more usable format. If `false`, the raw document text will be returned. Defaults to `true`.
* `encoding` (string): The encoding of the document data. Defaults to `UTF-8`.

If you are working with huge documents you can use `downloadStream()` to minimize the memory consumption. `downloadStream()` returns a `Psr\Http\Message\StreamInterface`.

```php
$streamContents = $reportDocument->downloadStream();  // The raw report stream
```

### Uploading a feed document

```php
use SellingPartnerApi\Seller\FeedsV20210630\Dto\CreateFeedDocumentSpecification;
use SellingPartnerApi\Seller\FeedsV20210630\Dto\CreateFeedSpecification;
use SellingPartnerApi\Seller\FeedsV20210630\Responses\CreateFeedDocumentResponse;

$feedType = 'POST_PRODUCT_PRICING_DATA';

$connector = SellingPartnerApi::make(/* ... */)->seller();
$feedsApi = $connector->feeds();

// Create feed document
$contentType = CreateFeedDocumentResponse::getContentType($feedType);
$createFeedDoc = new CreateFeedDocumentSpecification($contentType);
$createDocumentResponse = $feedsApi->createFeedDocument($createFeedDoc);
$feedDocument = $createDocumentResponse->dto();

// Upload feed contents to document
$feedContents = file_get_contents('your/feed/file.xml');
$feedDocument->upload($feedType, $feedContents);

$createFeedSpec = new CreateFeedSpecification(
    marketplaceIds: ['ATVPDKIKX0DER'],
    inputFeedDocumentId: $feedDocument->feedDocumentId,
    feedType: $feedType,
);

// Create feed with the feed document we just uploaded
$createFeedResponse = $feedsApi->createFeed($createFeedRequest);
$feedId = $createFeedResponse->dto()->feedId;
```

If you are working with feed documents that are too large to fit in memory, you can pass anything that Guzzle can turn into a stream into `FeedDocument::upload()` instead of a string.


## Downloading a feed result document

This process is very similar to downloading a report document:

```php
use SellingPartnerApi\SellingPartnerApi;

$feedType = 'POST_PRODUCT_PRICING_DATA';
// Assume we already got a feed result document ID from a previous getFeed call
$documentId = '1234567890.asdf';

$connector = SellingPartnerApi::make(/* ... */)->seller();
$response = $connector->feeds()->getFeedDocument($documentId);
$feedDocument = $response->dto();

$contents = $feedResultDocument->download($feedType);
```

## Naming conventions

Wherever possible, the names of the classes, methods, and properties in this package are identical to the names used in the Selling Partner API documentation. There are limited cases where this is not true, such as where the SP API documentation itself is inconsistent: for instance, there are some cases the SP API docs name properties in `UpperCamelCase` instead of `camelCase`, and in those cases the properties are named in `camelCase` in this package. Methods are named in `camelCase`, and DTOs are named in `UpperCamelCase`.

Instead of maintaining a redundant set of documentation, we link to the official SP API documentation whenever possible. If it's unclear how to use a particular method or DTO, check out the corresponding section of the [official SP API documentation](https://developer-docs.amazon.com/sp-api/docs/welcome).

## API versions

Some Selling Partner API segments have multiple versions. For instance, the Product Pricing API has two versions: `v0` and `v2022-05-01`. The connector method `SellerConnector::productPricing()` points to the newer version (`v2022-05-01`), but you can get an instance of the older version by calling `SellerConnector::productPricingV0()`. Or, if you want to explicitly specify `v2022-05-01` in a way that will not break in a future major release if a new version of the API is introduced, you can call `SellerConnector::productPricingV20220501()`.

More generally, the latest version of a given API segment (at the time when the major version of this library you're using was released) can be accessed with `Connector::apiName()`. Specific versions can be accessed with `Connector::apiNameV<version>()`.

## Working with DTOs

Some methods take DTOs as parameters. For instance, the `confirmShipment` method in the Orders API takes a `ConfirmShipmentRequest` DTO as a parameter. You can call `confirmShipment` like so:

```php
<?php

use SellingPartnerApi\Seller\OrdersV0\Dto;
use SellingPartnerApi\SellingPartnerApi;

$confirmShipmentRequest = new Dto\ConfirmShipmentRequest(
    packageDetail: new Dto\PackageDetail(
        packageReferenceId: 'PKG123',
        carrierCode: 'USPS',
        trackingNumber: 'ASDF1234567890',
        shipDate: new DateTime('2024-01-01 12:00:00'),
        orderItems: [
            new Dto\ConfirmShipmentOrderItem(
                orderItemId: '1234567890',
                quantity: 1,
            ),
            new Dto\ConfirmShipmentOrderItem(
                orderItemId: '0987654321',
                quantity: 2,
            )
        ],
    ),
    marketplaceId: 'ATVPDKIKX0DER',
);

$response = $ordersApi->confirmShipment(
    orderId: '123-4567890-1234567',
    confirmShipmentRequest: $confirmShipmentRequest,
)
```
