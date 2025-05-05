<?php

namespace SellingPartnerApi\Tests\Seller\OrdersV0\Responses;

use PHPUnit\Framework\TestCase;
use SellingPartnerApi\Seller\OrdersV0\Responses\GetOrdersResponse;

class GetOrdersTest extends TestCase
{
    public function test_deserialize_string_boolean(): void
    {
        $result = GetOrdersResponse::deserialize([
            'payload' => [
                'CreatedBefore' => '1.569521782042E9',
                'Orders' => [
                    [
                        'AmazonOrderId' => '902-1845936-5435065',
                        'PurchaseDate' => '1970-01-19T03:58:30Z',
                        'LastUpdateDate' => '1970-01-19T03:58:32Z',
                        'OrderStatus' => 'Unshipped',
                        'FulfillmentChannel' => 'MFN',
                        'SalesChannel' => 'Amazon.com',
                        'ShipServiceLevel' => 'Std US D2D Dom',
                        'OrderTotal' => [
                            'CurrencyCode' => 'USD',
                            'Amount' => '11.01',
                        ],
                        'NumberOfItemsShipped' => 0,
                        'NumberOfItemsUnshipped' => 1,
                        'PaymentMethod' => 'Other',
                        'PaymentMethodDetails' => [
                            'Standard',
                        ],
                        'IsReplacementOrder' => 'false',
                        'MarketplaceId' => 'ATVPDKIKX0DER',
                        'ShipmentServiceLevelCategory' => 'Standard',
                        'OrderType' => 'StandardOrder',
                        'EarliestShipDate' => '1970-01-19T03:59:27Z',
                        'LatestShipDate' => '1970-01-19T04:05:13Z',
                        'EarliestDeliveryDate' => '1970-01-19T04:06:39Z',
                        'LatestDeliveryDate' => '1970-01-19T04:15:17Z',
                        'IsBusinessOrder' => 'true',
                        'IsPrime' => 'asdf',
                        'IsGlobalExpressEnabled' => '',
                        'IsPremiumOrder' => false,
                        'IsSoldByAB' => false,
                        'IsIBA' => false,
                        'DefaultShipFromLocationAddress' => [
                            'Name' => 'MFNIntegrationTestMerchant',
                            'AddressLine1' => '2201 WESTLAKE AVE',
                            'City' => 'SEATTLE',
                            'StateOrRegion' => 'WA',
                            'PostalCode' => '98121-2778',
                            'CountryCode' => 'US',
                            'Phone' => '+1 480-386-0930 ext. 73824',
                            'AddressType' => 'Commercial',
                        ],
                        'FulfillmentInstruction' => [
                            'FulfillmentSupplySourceId' => 'sampleSupplySourceId',
                        ],
                        'IsISPU' => false,
                        'IsAccessPointOrder' => false,
                        'AutomatedShippingSettings' => [
                            'HasAutomatedShippingSettings' => false,
                        ],
                        'EasyShipShipmentStatus' => 'PendingPickUp',
                        'ElectronicInvoiceStatus' => 'NotRequired',
                    ],
                ],
            ],
        ]);

        $this->assertEquals($result->payload->orders[0]->isReplacementOrder, false);
        $this->assertEquals($result->payload->orders[0]->isBusinessOrder, true);
        $this->assertEquals($result->payload->orders[0]->isPrime, true);
        $this->assertEquals($result->payload->orders[0]->isGlobalExpressEnabled, false);
    }
}
