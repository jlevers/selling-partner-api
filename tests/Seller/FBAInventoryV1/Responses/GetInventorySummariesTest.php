<?php

namespace SellingPartnerApi\Tests\Seller\FBAInboundV20240320\Responses;

use PHPUnit\Framework\TestCase;
use SellingPartnerApi\Seller\FBAInventoryV1\Responses\GetInventorySummariesResponse;

class GetInventorySummariesTest extends TestCase
{
    public function test_deserialize_empty_string_datetime(): void
    {
        $result = GetInventorySummariesResponse::deserialize([
            'payload' => [
                'granularity' => [
                    'granularityType' => 'Marketplace',
                    'granularityId' => 'ATVPDKIKX0DER',
                ],
                'inventorySummaries' => [
                    [
                        'asin' => 'B000000000',
                        'fnSku' => '1234567890',
                        'sellerSku' => '1234567890',
                        'condition' => 'New',
                        'lastUpdatedTime' => '',
                    ],
                ],
            ],
        ]);
        $this->assertNotNull($result);
        $this->assertNull($result->payload->inventorySummaries[0]->lastUpdatedTime);
    }
}
