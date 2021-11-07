# Selling Partner API for PHP
A PHP library for connecting to Amazon's [Selling Partner API](https://github.com/amzn/selling-partner-api-docs/).

## Sponsors

* [B&L Consulting](http://www.blmc.group/)
* [Meteora Growth](http://www.meteoragrowth.com/)

## Powering companies like...

* [Wizard Industries](https://wizard-industries.com)
* [Mendota Pet](https://mendotapet.com)
* [GLE Tech](https://gletech.com)

---

If you've found this library useful, please consider [becoming a Sponsor](https://github.com/sponsors/jlevers), or making a one-time donation via the button below. I appreciate any and all support you can provide!

[![paypal](https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif)](https://www.paypal.com/donate?business=EL4PRLAEMGXNQ&currency_code=USD)


## Features

* Supports all Selling Partner API operations (for Sellers and Vendors) as of 7/2/2021 ([see here](#supported-api-segments) for links to documentation for all calls)
* Supports applications made with both IAM user and IAM role ARNs ([docs](#setup))
* Automatically generates Restricted Data Tokens for all calls that require them -- no extra calls to the Tokens API needed
* Includes a [`Document` helper class](#uploading-and-downloading-documents) for uploading and downloading feed/report documents


## Installation

`composer require jlevers/selling-partner-api`


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
* `lwaRefreshToken (string)`: The LWA refresh token of the SP API application to use to execute API requests. Required, unless you're only using the `Configuration` instance to call [grantless operations](https://github.com/amzn/selling-partner-api-docs/blob/main/guides/en-US/developer-guide/SellingPartnerApiDeveloperGuide.md#grantless-operations).
* `awsAccessKeyId (string)`: Required. AWS IAM user Access Key ID with SP API ExecuteAPI permissions.
* `awsSecretAccessKey (string)`: Required. AWS IAM user Secret Access Key with SP API ExecuteAPI permissions.
* `endpoint (array)`: Required. An array containing a `url` key (the endpoint URL) and a `region` key (the AWS region). There are predefined constants for these arrays in [`lib/Endpoint.php`](https://github.com/jlevers/selling-partner-api/blob/main/lib/Endpoint.php): (`NA`, `EU`, `FE`, and `NA_SANDBOX`, `EU_SANDBOX`, and `FE_SANDBOX`. See [here](https://github.com/amzn/selling-partner-api-docs/blob/main/guides/en-US/developer-guide/SellingPartnerApiDeveloperGuide.md#selling-partner-api-endpoints) for more details.
* `accessToken (string)`: An access token generated from the refresh token.
* `accessTokenExpiration (int)`: A Unix timestamp corresponding to the time when the `accessToken` expires. If `accessToken` is given, `accessTokenExpiration` is required (and vice versa).
* `onUpdateCredentials (callable|Closure)`: A callback function to call when a new access token is generated. The function should accept a single argument of type [`SellingPartnerApi\Credentials`](https://github.com/jlevers/selling-partner-api/blob/main/lib/Credentials.php).
* `roleArn (string)`: If you set up your SP API application with an AWS IAM role ARN instead of a user ARN, pass that ARN here.

### Example

This example assumes you have access to the `Seller Insights` Selling Partner API role, but the general format applies to any Selling Partner API request.

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use SellingPartnerApi\Api;
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

$api = new Api\SellersApi($config);
try {
    $result = $api->getMarketplaceParticipations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SellersApi->getMarketplaceParticipations: ', $e->getMessage(), PHP_EOL;
}

?>
```


## Supported API segments

### Seller APIs
* [A+ Content API](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/AplusContentApi.md)
* [Authorization API](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/AuthorizationApi.md)
* [Catalog API](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/CatalogApi.md)
* [Catalog Items API V0](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/CatalogItemsV0Api.md) (the original Catalog API)
* [FBA Inbound API](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/FbaInboundApi.md)
* [FBA Inbound Eligibility API](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/FbaInboundEligibilityApi.md)
* [FBA Inventory API](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/FbaInventoryApi.md)
* [FBA Outbound API](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/FbaOutboundApi.md)
* [Feeds API](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/FeedsApi.md)
* [Fees API](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/FeesApi.md)
* [Finances API](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/FinancesApi.md)
* [Listings API](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/ListingsApi.md)
* [Listings Restrictions API](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/ListingsRestrictionsApi.md)
* [Merchant Fulfillment API](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/MerchantFulfillmentApi.md)
* [Messaging API](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/MessageApi.md)
* [Notifications API](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/NotificationsApi.md)
* [Orders API](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/OrdersApi.md)
* [Product Pricing API](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/ProductPricingApi.md)
* [Product Type Definitions API](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/ProductTypeDefinitionsApi.md)
* [Reports API](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/ReportsApi.md)
* [Sales API](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/SalesApi.md)
* [Sellers API](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/SellersApi.md)
* [Service API](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/ServiceApi.md)
* [Shipment Invoicing API](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/ShipmentInvoicingApi.md)
* [Shipping API](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/ShippingApi.md)
* [Small and Light API](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/SmallAndLightApi.md)
* [Solicitations API](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/SolicitationsApi.md)
* [Restricted Data Tokens API](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/TokensApi.md)
* [Uploads API](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/UploadsApi.md)

### Vendor APIs
* [Direct Fulfillment Inventory API](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/VendorDirectFulfillmentInventoryApi.md)
* [Direct Fulfillment Orders API](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/VendorDirectFulfillmentOrdersApi.md)
* [Direct Fulfillment Payments API](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/VendorDirectFulfillmentPaymentsApi.md)
* [Direct Fulfillment Shipping API](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/VendorDirectFulfillmentShippingApi.md)
* [Direct Fulfillment Transactions API](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/VendorDirectFulfillmentTransactionsApi.md)
* [Invoices API](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/VendorInvoicesApi.md)
* [Orders API](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/VendorOrdersApi.md)
* [Shipping API](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/VendorShippingApi.md)
* [Transaction Status API](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/VendorTransactionStatusApi.md)


## Restricted operations

When you call a [restricted operation]((https://github.com/amzn/selling-partner-api-docs/blob/main/guides/en-US/use-case-guides/tokens-api-use-case-guide/tokens-API-use-case-guide-2021-03-01.md)), a Restricted Data Token (RDT) is automatically generated. If you're calling a restricted operation that accepts a [`dataElements`](https://github.com/amzn/selling-partner-api-docs/blob/main/references/tokens-api/tokens_2021-03-01.md#restrictedresource) parameter, you can pass `dataElements` values as a parameter to the API call. Check out the [getOrders](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/OrdersApi.md#getOrders), [getOrder](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/OrdersApi.md#getOrder), and [getOrderItems](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/OrdersApi.md#getOrderItems) documentation to see how to pass `dataElements` values to those calls. (At the time of writing, those are the only restricted operations that accept `dataElements` values.)


## Uploading and downloading documents

The Feeds and Reports APIs include operations that involve uploading and downloading documents to and from Amazon. Amazon encrypts all documents they generate, and requires that all uploaded documents be encrypted. The `SellingPartnerApi\Document` class handles all the encryption/decryption, given an instance of one of the `Model\Reports\ReportDocument`, `Model\Feeds\FeedDocument`, or `Model\Feeds\CreateFeedDocumentResponse` classes. Instances of those classes are in the response returned by Amazon when you make a call to the [`getReportDocument`](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/ReportsApi.md#getReportDocument), [`getFeedDocument`](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/FeedsApi.md#getFeedDocument), and [`createFeedDocument`](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/FeedsApi.md#createFeedDocument) endpoints, respectively.

### Downloading a report document

```php
use SellingPartnerApi\Api\ReportsApi;
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
use SellingPartnerApi\Api\FeedsApi;
use SellingPartnerApi\FeedType;
use SellingPartnerApi\Model\Feeds;

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
use SellingPartnerApi\Api\FeedsApi;
use SellingPartnerApi\FeedType;

$feedType = FeedType::GET_FLAT_FILE_OPEN_LISTINGS_DATA;
$feedsApi = new FeedsApi($config);

// ...
// Create and upload a feed document, and wait for it to finish processing
// ...

$feedId = '1234567890';  // From the createFeed call
$feed = $api->getFeed($feedId);

$feedResultDocumentId = $feed->getResultFeedDocumentId();
$feedResultDocument = $api->getFeedDocument($feedResultDocumentId);

$doc = new Document($documentInfo, $feedType);

$docToDownload = new SellingPartnerApi\Document($feedResultDocument, $feedType);
$contents = $docToDownload->download();  // The raw report data
$data = $docToDownload->getData();  // Parsed/formatted report data
```


## Models

Most operations have one or more models associated with it. These models are classes that contain the data needed to make a certain kind of request to the API, or contain the data returned by a given request type. All of the models share the same general interface: you can either specify all the model's attributes during initialization, or use setter methods to set each attribute after the fact. Here's an example using the Service API's `Buyer` model ([docs](https://github.com/jlevers/selling-partner-api/blob/main/docs/Model/Service/Buyer.md), ([source](https://github.com/jlevers/selling-partner-api/blob/main/lib/Model/Service/Buyer.php)).

The `Buyer` model has four attributes: `buyer_id`, `name`, `phone`, and `is_prime_member`. (If you're wondering how you would figure out which attributes the model has on your own, check out the `docs` link above.) To create an instance of the `Buyer` model with all those attributes set:

```php
$buyer = new SellingPartnerApi\Model\Service\Buyer([
    "buyer_id" => "ABCDEFGHIJKLMNOPQRSTU0123456",
    "name" => "Jane Doe",
    "phone" => "+12345678901",
    "is_prime_member" => true
]);
```

Alternatively, you can create an instance of the `Buyer` model and then populate its fields:

```php
$buyer = new SellingPartnerApi\Model\Service\Buyer();
$buyer->setBuyerId("ABCDEFGHIJKLMNOPQRSTU0123456");
$buyer->setName("Jane Doe");
$buyer->setPhone("+12345678901");
$buyer->setIsPrimeMember(true);
```

Each model also has the getter methods you might expect:

```php
$buyer->getBuyerId();        // -> "ABCDEFGHIJKLMNOPQRSTU0123456"
$buyer->getName();           // -> "Jane Doe"
$buyer->getPhone();          // -> "+12345678901"
$buyer->getIsPrimeMember();  // -> true
```

Models can (and usually do) have other models as attributes:

``` php
$serviceJob = new SellingPartnerApi\Model\Service\Buyer([
    // ...
    "buyer" => $buyer,
    // ...
]);

$serviceJob->getBuyer();             // -> [Buyer instance]
$serviceJob->getBuyer()->getName();  // -> "Jane Doe"
```


## Response headers
Amazon includes some useful headers with each SP API response. If you need those for any reason, you can get an associative array of response headers by calling `getHeaders()` on the response object. For instance:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use SellingPartnerApi\Api;
use SellingPartnerApi\Configuration;
use SellingPartnerApi\Endpoint;

$config = new Configuration([...]);
$api = new Api\SellersApi($config);
try {
    $result = $api->getMarketplaceParticipations();
    $headers = $result->getHeaders();
    print_r($headers);
} catch (Exception $e) {
    echo 'Exception when calling SellersApi->getMarketplaceParticipations: ', $e->getMessage(), PHP_EOL;
}
```