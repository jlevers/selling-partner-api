# Selling Partner API for PHP
A PHP library for connecting to Amazon's [Selling Partner API](https://github.com/amzn/selling-partner-api-docs/).

[![Total Downloads](https://img.shields.io/packagist/dt/jlevers/selling-partner-api.svg?style=flat-square)](https://packagist.org/packages/jlevers/selling-partner-api)
[![Latest Stable Version](https://img.shields.io/packagist/v/jlevers/selling-partner-api.svg?style=flat-square)](https://packagist.org/packages/jlevers/selling-partner-api)
[![License](https://img.shields.io/packagist/l/jlevers/selling-partner-api.svg?style=flat-square)](https://packagist.org/packages/jlevers/selling-partner-api)

If you've found this library useful, please consider [becoming a Sponsor](https://github.com/sponsors/jlevers), or making a one-time donation via the button below. I appreciate any and all support you can provide!

[![paypal](https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif)](https://www.paypal.com/donate?business=EL4PRLAEMGXNQ&currency_code=USD)


## Features

* Supports all Selling Partner API operations (for Sellers and Vendors) as of 5/30/2022 ([see here](#supported-api-segments) for links to documentation for all calls)
* Supports applications made with both IAM user and IAM role ARNs ([docs](#setup))
* Automatically generates Restricted Data Tokens for all calls that require them -- no extra calls to the Tokens API needed
* Includes a [`Document` helper class](#uploading-and-downloading-documents) for uploading and downloading feed/report documents


## Sponsors

* **[Tesmo](https://tesmollc.com)**


## Installation

`composer require jlevers/selling-partner-api`


## Table of Contents 

Check out the [Getting Started](#getting-started) section below for a quick overview.

This README is divided into several sections:
* [Setup](#setup)
    * [Configuration options](#configuration-options)
* [Examples](#examples)
* [Supported API segments](#supported-api-segments)
    * [Seller APIs](#seller-apis)
    * [Vendor APIs](#vendor-apis)
* [Restricted operations](#restricted-operations)
* [Uploading and downloading documents](#uploading-and-downloading-documents)
    * [Downloading a report document](#downloading-a-report-document)
    * [Uploading a feed document](#uploading-a-feed-document)
    * [Downloading a feed result document](#downloading-a-feed-result-document)
* [Working with model classes](#working-with-model-classes)
* [Response headers](#response-headers)
* [Custom request authorization](#custom-authorization-signer)
* [Custom request signing](#custom-request-signer)

## Getting Started

### Prerequisites

You need a few things to get started:
* A Selling Partner API developer account
* An AWS IAM user or role configured for use with the Selling Partner API
* A Selling Partner API application

If you're looking for more information on how to set those things up, check out [this blog post](https://jesseevers.com/selling-partner-api-access/). It provides a detailed walkthrough of the whole setup process.


### Setup

The [`Configuration`](https://github.com/jlevers/selling-partner-api/blob/main/lib/Configuration.php) constructor takes a single argument: an associative array with all the configuration information that's needed to connect to the Selling Partner API:

```php
$config = new SellingPartnerApi\Configuration([
    "lwaClientId" => "<LWA client ID>",
    "lwaClientSecret" => "<LWA client secret>",
    "lwaRefreshToken" => "<LWA refresh token>",
    "awsAccessKeyId" => "<AWS access key ID>",
    "awsSecretAccessKey" => "<AWS secret access key>",
    // If you're not working in the North American marketplace, change
    // this to another endpoint from lib/Endpoint.php
    "endpoint" => SellingPartnerApi\Endpoint::NA,
]);
```

If you created your Selling Partner API application using an IAM role ARN instead of a user ARN, pass that role ARN in the configuration array:

```php
$config = new SellingPartnerApi\Configuration([
    "lwaClientId" => "<LWA client ID>",
    "lwaClientSecret" => "<LWA client secret>",
    "lwaRefreshToken" => "<LWA refresh token>",
    "awsAccessKeyId" => "<AWS access key ID>",
    "awsSecretAccessKey" => "<AWS secret access key>",
    // If you're not working in the North American marketplace, change
    // this to another endpoint from lib/Endpoint.php
    "endpoint" => SellingPartnerApi\Endpoint::NA,
    "roleArn" => "<Role ARN>",
]);
```

Getter and setter methods exist for the `Configuration` class's `lwaClientId`, `lwaClientSecret`, `lwaRefreshToken`, `awsAccessKeyId`, `awsSecretAccessKey`, and `endpoint` properties. The methods are named in accordance with the name of the property they interact with: `getLwaClientId`, `setLwaClientId`, `getLwaClientSecret`, etc.

`$config` can then be passed into the constructor of any `SellingPartnerApi\Api\*Api` class. See the `Example` section for a complete example.

##### Configuration options

The array passed to the `Configuration` constructor accepts the following keys:

* `lwaClientId (string)`: Required. The LWA client ID of the SP API application to use to execute API requests.
* `lwaClientSecret (string)`: Required. The LWA client secret of the SP API application to use to execute API requests.
* `lwaRefreshToken (string)`: The LWA refresh token of the SP API application to use to execute API requests. Required, unless you're only using the `Configuration` instance to call [grantless operations](https://developer-docs.amazon.com/amazon-shipping/docs/grantless-operations).
* `awsAccessKeyId (string)`: Required. AWS IAM user Access Key ID with SP API ExecuteAPI permissions.
* `awsSecretAccessKey (string)`: Required. AWS IAM user Secret Access Key with SP API ExecuteAPI permissions.
* `endpoint (array)`: Required. An array containing a `url` key (the endpoint URL) and a `region` key (the AWS region). There are predefined constants for these arrays in [`lib/Endpoint.php`](https://github.com/jlevers/selling-partner-api/blob/main/lib/Endpoint.php): (`NA`, `EU`, `FE`, and `NA_SANDBOX`, `EU_SANDBOX`, and `FE_SANDBOX`. See [here](https://developer-docs.amazon.com/amazon-shipping/docs/sp-api-endpoints) for more details.
* `accessToken (string)`: An access token generated from the refresh token.
* `accessTokenExpiration (int)`: A Unix timestamp corresponding to the time when the `accessToken` expires. If `accessToken` is given, `accessTokenExpiration` is required (and vice versa).
* `onUpdateCredentials (callable|Closure)`: A callback function to call when a new access token is generated. The function should accept a single argument of type [`SellingPartnerApi\Credentials`](https://github.com/jlevers/selling-partner-api/blob/main/lib/Credentials.php).
* `roleArn (string)`: If you set up your SP API application with an AWS IAM role ARN instead of a user ARN, pass that ARN here.
* `authenticationClient (GuzzleHttp\ClientInterface)`: Optional `GuzzleHttp\ClientInterface` object that will be used to generate the access token from the refresh token
* `tokensApi (SellingPartnerApi\Api\TokensApi)`: Optional `SellingPartnerApi\Api\TokensApi` object that will be used to fetch Restricted Data Tokens (RDTs) when you call a [restricted operation](https://developer-docs.amazon.com/sp-api/docs/tokens-api-use-case-guide)
* `authorizationSigner (SellingPartnerApi\Contract\AuthorizationSignerContract)`: Optional `SellingPartnerApi\Contract\AuthorizationSignerContract` implementation. See [Custom Authorization Signer](#custom-authorization-signer) section
* `requestSigner (SellingPartnerApi\Contract\RequestSignerContract)`: Optional `SellingPartnerApi\Contract\RequestSignerContract` implementation. See [Custom Request Signer](#custom-request-signer) section.

### Examples

This example assumes you have access to the `Seller Insights` Selling Partner API role, but the general format applies to any Selling Partner API request.

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use SellingPartnerApi\Api\SellersV1Api as SellersApi;
use SellingPartnerApi\Configuration;
use SellingPartnerApi\Endpoint;

$config = new Configuration([
    "lwaClientId" => "amzn1.application-oa2-client.....",
    "lwaClientSecret" => "abcd....",
    "lwaRefreshToken" => "Aztr|IwEBI....",
    "awsAccessKeyId" => "AKIA....",
    "awsSecretAccessKey" => "ABCD....",
    // If you're not working in the North American marketplace, change
    // this to another endpoint from lib/Endpoint.php
    "endpoint" => Endpoint::NA
]);

$api = new SellersApi($config);
try {
    $result = $api->getMarketplaceParticipations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SellersApi->getMarketplaceParticipations: ', $e->getMessage(), PHP_EOL;
}

?>
```

To get debugging output when you make an API request, you can call `$config->setDebug(true)`. By default, debug output goes to `stdout` via `php://output`, but you can redirect it a file with `$config->setDebugFile('<path>')`.

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use SellingPartnerApi\Configuration;

$config = new Configuration([/* ... */]);
$config->setDebug(true);
// To redirect debug info to a file:
$config->setDebugFile('./debug.log');
```


## Supported API segments

Each API class name contains the API's version. This allows for multiple versions of the same API to be accessible in a single version of this package. It makes the class names a little uglier, but allows for simultaneously using new and old versions of the same API segment, which is often useful. The uglier names can be remedied by formatting `use` statements like so:

```php
use SellingPartnerApi\Api\SellersV1Api as SellersApi;
use SellingPartnerApi\Model\SellersV1 as Sellers;
```

It also means that if a new version of an existing API is introduced, the library can be updated to include that new version without introducing breaking changes.

### Seller APIs
* [A+ Content API (2020-11-01)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/AplusContentV20201101Api.md)
* [Authorization API (V1)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/AuthorizationV1Api.md)
* [Catalog Items API (2022-04-01)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/CatalogItemsV20220401Api.md)
* [Catalog Items API (2021-12-01)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/CatalogItemsV20211201Api.md)
* [Catalog Items API (V0)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/CatalogItemsV0Api.md)
* [EasyShip API (2022-03-23)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/EasyShipV20220323Api.md)
* [FBA Inbound API (V0)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/FbaInboundV0Api.md)
* [FBA Inbound Eligibility API (V1)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/FbaInboundEligibilityV1Api.md)
* [FBA Inventory API (V1)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/FbaInventoryV1Api.md)
* [FBA Outbound API (2020-07-01)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/FbaOutboundV20200701Api.md)
* [Feeds API (2021-06-30)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/FeedsV20210630Api.md)
* [Fees API (V0)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/FeesV0Api.md)
* [Finances API (V0)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/FinancesV0Api.md)
* [Listings API (2021-08-01)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/ListingsV20210801Api.md)
* [Listings Restrictions API (2021-08-01)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/ListingsRestrictionsV20210801Api.md)
* [Merchant Fulfillment API (V0)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/MerchantFulfillmentV0Api.md)
* [Messaging API (V1)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/MessagingV1Api.md)
* [Notifications API (V1)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/NotificationsV1Api.md)
* [Orders API (V0)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/OrdersV0Api.md)
* [Product Pricing API (V0)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/ProductPricingV0Api.md)
* [Product Type Definitions API (2020-09-01)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/ProductTypeDefinitionsV20200901Api.md)
* [Reports API (2021-06-30)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/ReportsV20210630Api.md)
* [Sales API (V1)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/SalesV1Api.md)
* [Sellers API (V1)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/SellersV1Api.md)
* [Service API (V1)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/ServiceV1Api.md)
* [Shipment Invoicing API (V0)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/ShipmentInvoicingV0Api.md)
* [Shipping API (V1)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/ShippingV1Api.md)
* [Small and Light API (V1)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/SmallAndLightV1Api.md)
* [Solicitations API (V1)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/SolicitationsV1Api.md)
* [Restricted Data Tokens API (2021-03-01)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/TokensV20210301Api.md)
* [Uploads API (2020-11-01)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/UploadsV20201101Api.md)

### Vendor APIs
* [Direct Fulfillment Inventory API (V1)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/VendorDirectFulfillmentInventoryV1Api.md)
* [Direct Fulfillment Orders API (V1)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/VendorDirectFulfillmentOrdersV1Api.md)
* [Direct Fulfillment Orders API (2021-12-28)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/VendorDirectFulfillmentOrdersV20211228Api.md)
* [Direct Fulfillment Payments API (V1)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/VendorDirectFulfillmentPaymentsV1Api.md)
* [Direct Fulfillment Sandbox API (2021-10-28)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/VendorDirectFulfillmentSandboxV20211028Api.md)
* [Direct Fulfillment Shipping API (V1)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/VendorDirectFulfillmentShippingV1Api.md)
* [Direct Fulfillment Shipping API (2021-12-28)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/VendorDirectFulfillmentShippingV20211228Api.md)
* [Direct Fulfillment Transactions API (V1)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/VendorDirectFulfillmentTransactionsV1Api.md)
* [Direct Fulfillment Transactions API (2021-12-28)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/VendorDirectFulfillmentTransactionsV20211228Api.md)
* [Invoices API (V1)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/VendorInvoicesV1Api.md)
* [Orders API (V1)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/VendorOrdersV1Api.md)
* [Shipping API (V1)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/VendorShippingV1Api.md)
* [Transaction Status API (V1)](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/VendorTransactionStatusV1Api.md)


## Restricted operations

When you call a [restricted operation](https://developer-docs.amazon.com/sp-api/docs/tokens-api-use-case-guide), a Restricted Data Token (RDT) is automatically generated. If you're calling a restricted operation that accepts a [`dataElements`](https://developer-docs.amazon.com/sp-api/docs/tokens-api-use-case-guide#restricted-operations) parameter, you can pass `dataElements` values as a parameter to the API call. Check out the [getOrders](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/OrdersV0Api.md#getOrders), [getOrder](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/OrdersV0Api.md#getOrder), and [getOrderItems](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/OrdersV0Api.md#getOrderItems) documentation to see how to pass `dataElements` values to those calls. (At the time of writing, those are the only restricted operations that accept `dataElements` values.)


## Uploading and downloading documents

The Feeds and Reports APIs include operations that involve uploading and downloading documents to and from Amazon. Amazon encrypts all documents they generate, and requires that all uploaded documents be encrypted. The `SellingPartnerApi\Document` class handles all the encryption/decryption, given an instance of one of the `Model\ReportsV20210630\ReportDocument`, `Model\FeedsV20210630\FeedDocument`, or `Model\FeedsV20210630\CreateFeedDocumentResponse` classes. Instances of those classes are in the response returned by Amazon when you make a call to the [`getReportDocument`](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/ReportsV20210630.md#getReportDocument), [`getFeedDocument`](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/FeedsV20210630.md#getFeedDocument), and [`createFeedDocument`](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/FeedsV20210630.md#createFeedDocument) endpoints, respectively.

### Downloading a report document

```php
use SellingPartnerApi\Api\ReportsV20210630Api as ReportsApi;
use SellingPartnerApi\ReportType;

// Assume we've already fetched a report document ID, and that a $config object was defined above
$documentId = 'foo.1234';
$reportType = ReportType::GET_FLAT_FILE_OPEN_LISTINGS_DATA;

$reportsApi = new ReportsApi($config);
$reportDocumentInfo = $reportsApi->getReportDocument($documentId, $reportType['name']);

$docToDownload = new SellingPartnerApi\Document($reportDocumentInfo, $reportType);
$contents = $docToDownload->download();  // The raw report text
/*
 * - Array of associative arrays, (each sub array corresponds to a row of the report) if content type is ContentType::TAB or ContentType::CSV
 * - A nested associative array (from json_decode) if content type is ContentType::JSON
 * - The raw report data if content type is ContentType::PLAIN or ContentType::PDF
 * - PHPOffice Spreadsheet object if content type is ContentType::XLSX
 * - SimpleXML object if the content type is ContentType::XML
 */
$data = $docToDownload->getData();
// ... do something with report data
```

### Uploading a feed document

```php
use SellingPartnerApi\Api\FeedsV20210630Api as FeedsApi;
use SellingPartnerApi\FeedType;
use SellingPartnerApi\Model\FeedsV20210630 as Feeds;

$feedType = FeedType::POST_PRODUCT_PRICING_DATA;
$feedsApi = new FeedsApi($config);

// Create feed document
$createFeedDocSpec = new Feeds\CreateFeedDocumentSpecification(['content_type' => $feedType['contentType']]);
$feedDocumentInfo = $feedsApi->createFeedDocument($createFeedDocSpec);
$feedDocumentId = $feedDocumentInfo->getFeedDocumentId();

// Upload feed contents to document
$feedContents = file_get_contents('<your/feed/file.xml>');
// The Document constructor accepts a custom \GuzzleHttp\Client object as an optional 3rd parameter. If that
// parameter is passed, your custom Guzzle client will be used when uploading the feed document contents to Amazon.
$docToUpload = new SellingPartnerApi\Document($feedDocumentInfo, $feedType);
$docToUpload->upload($feedContents);

// ... call FeedsApi::createFeed() with $feedDocumentId
```

## Downloading a feed result document

This works very similarly to downloading a report document:

```php
use SellingPartnerApi\Api\FeedsV20210630Api as FeedsApi;
use SellingPartnerApi\FeedType;

$feedType = FeedType::POST_PRODUCT_PRICING_DATA;
$feedsApi = new FeedsApi($config);

// ...
// Create and upload a feed document, and wait for it to finish processing
// ...

$feedId = '1234567890';  // From the createFeed call
$feed = $api->getFeed($feedId);

$feedResultDocumentId = $feed->resultFeedDocumentId;
$feedResultDocument = $api->getFeedDocument($feedResultDocumentId);

$doc = new Document($documentInfo, $feedType);

$docToDownload = new SellingPartnerApi\Document($feedResultDocument, $feedType);
$contents = $docToDownload->download();  // The raw report data
$data = $docToDownload->getData();  // Parsed/formatted report data
```


## Working with model classes

Most operations have one or more models associated with it. These models are classes that contain the data needed to make a certain kind of request to the API, or contain the data returned by a given request type. All of the models share the same general interface: you can either specify all the model's attributes during initialization, or set each attribute after the fact. Here's an example using the Service API's `Buyer` model ([docs](https://github.com/jlevers/selling-partner-api/blob/main/docs/Model/ServiceV1/Buyer.md), ([source](https://github.com/jlevers/selling-partner-api/blob/main/lib/Model/ServiceV1/Buyer.php)).

The `Buyer` model has four attributes: `buyer_id`, `name`, `phone`, and `is_prime_member`. (If you're wondering how you would figure out which attributes the model has on your own, check out the `docs` link above.) To create an instance of the `Buyer` model with all those attributes set:

```php
$buyer = new SellingPartnerApi\Model\ServiceV1\Buyer([
    "buyer_id" => "ABCDEFGHIJKLMNOPQRSTU0123456",
    "name" => "Jane Doe",
    "phone" => "+12345678901",
    "is_prime_member" => true
]);
```

Alternatively, you can create an instance of the `Buyer` model and then populate its fields:

```php
$buyer = new SellingPartnerApi\Model\ServiceV1\Buyer();
$buyer->buyerId = "ABCDEFGHIJKLMNOPQRSTU0123456";
$buyer->name = "Jane Doe";
$buyer->phone = "+12345678901";
$buyer->isPrimeMember = true;
```

Each model also has the property accessors you might expect:

```php
$buyer->buyerId;        // -> "ABCDEFGHIJKLMNOPQRSTU0123456"
$buyer->name;           // -> "Jane Doe"
$buyer->phone;          // -> "+12345678901"
$buyer->isPrimeMember;  // -> true
```

Models can (and usually do) have other models as attributes:

``` php
$serviceJob = new SellingPartnerApi\Model\ServiceV1\Buyer([
    // ...
    "buyer" => $buyer,
    // ...
]);

$serviceJob->buyer;        // -> [Buyer instance]
$serviceJob->buyer->name;  // -> "Jane Doe"
```


## Response headers
Amazon includes some useful headers with each SP API response. If you need those for any reason, you can get an associative array of response headers by calling `getHeaders()` on the response object. For instance:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use SellingPartnerApi\Api\SellersV1Api as SellersApi;
use SellingPartnerApi\Configuration;
use SellingPartnerApi\Endpoint;

$config = new Configuration([...]);
$api = new Api\SellersApi($config);
try {
    $result = $api->getMarketplaceParticipations();
    $headers = $result->headers;
    print_r($headers);
} catch (Exception $e) {
    echo 'Exception when calling SellersApi->getMarketplaceParticipations: ', $e->getMessage(), PHP_EOL;
}
```

## Custom Authorization Signer
You may need to do custom operations while signing the API request. You can create a custom authorization signer by creating an implementation of the [AuthorizationSignerContract](lib/Contract/AuthorizationSignerContract.php) interface and passing it into the `Configuration` constructor array.

```php
// CustomAuthorizationSigner.php
use GuzzleHttp\Psr7\Request;
use SellingPartnerApi\Contract\AuthorizationSignerContract;

class CustomAuthorizationSigner implements AuthorizationSignerContract
{
    public function sign(Request $request, Credentials $credentials): Request
    {
        // Calculate request signature and request date.
        
        $requestDate = '20220426T202300Z';
        $signatureHeaderValue = 'some calculated signature value';
        
        $signedRequest = $request
            ->withHeader('Authorization', $signatureHeaderValue)
            ->withHeader('x-amz-date', $requestDate);
        
        return $signedRequest;
    }

    // ...
}

// Consumer code
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use SellingPartnerApi\Api;
use SellingPartnerApi\Configuration;
use SellingPartnerApi\Endpoint;
use CustomAuthorizationSigner;

$config = new Configuration([
    ..., 
    'authorizationSigner' => new CustomAuthorizationSigner(),
]);
$api = new Api\SellersApi($config);
try {
    $result = $api->getMarketplaceParticipations();
    $headers = $result->headers;
    print_r($headers);
} catch (Exception $e) {
    echo 'Exception when calling SellersApi->getMarketplaceParticipations: ', $e->getMessage(), PHP_EOL;
}

```

## Custom Request Signer
You may also need to customize the entire request signing process – for instance, if you need to call an external service in the process of signing the request. You can do so by creating an implementation of the [RequestSignerContract](lib/Contract/RequestSignerContract.php) interface, and passing an instance of it into the `Configuration` constructor array.

```php
// RemoteRequestSigner.php
use GuzzleHttp\Psr7\Request;
use SellingPartnerApi\Contract\RequestSignerContract;

class RemoteRequestSigner implements RequestSignerContract
{
    public function signRequest(
        Request $request,
        ?string $scope = null,
        ?string $restrictedPath = null,
        ?string $operation = null
    ): Request {
        // Sign request by sending HTTP call
        // to external/separate service instance.
        
        return $signedRequest;
    }
}

// Consumer code
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use SellingPartnerApi\Api;
use SellingPartnerApi\Configuration;
use SellingPartnerApi\Endpoint;
use RemoteRequestSigner;

$config = new Configuration([
    ..., 
    'requestSigner' => new RemoteRequestSigner(),
]);
$api = new Api\SellersApi($config);
try {
    $result = $api->getMarketplaceParticipations();
    $headers = $result->headers;
    print_r($headers);
} catch (Exception $e) {
    echo 'Exception when calling SellersApi->getMarketplaceParticipations: ', $e->getMessage(), PHP_EOL;
}

```