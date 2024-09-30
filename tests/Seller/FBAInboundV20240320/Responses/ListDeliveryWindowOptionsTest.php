<?php

namespace SellingPartnerApi\Tests\Seller\FBAInboundV20240320\Responses;

use DateTime;
use DateTimeInterface;
use PHPUnit\Framework\TestCase;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\ListDeliveryWindowOptionsResponse;

class ListDeliveryWindowOptionsTest extends TestCase
{
    public function testDeserializeDateTimeWithoutSeconds(): void
    {
        $now = new DateTime;
        $result = ListDeliveryWindowOptionsResponse::deserialize([
            'pagination' => [
                'nextToken' => 'aafd8957-77f9-434c-b432-3277b795156d',
            ],
            'deliveryWindowOptions' => [
                [
                    'availabilityType' => 'AVAILABLE',
                    'endDate' => '2024-08-12T00:00Z',
                    'validUntil' => '2024-09-24T00:00Z',
                    'deliveryWindowOptionId' => 'dwf5ab76c1-ed8a-4885-beb6-3a9992b6954e',
                    'startDate' => $now->format('Y-m-d\TH:i\Z'),
                ],
            ],
        ]);
        $this->assertNotNull($result);
        $this->assertInstanceOf(DateTimeInterface::class, $result->deliveryWindowOptions[0]->validUntil);
        // Since this datetime format doesn't include seconds, the deserialized datetime should be within 60 seconds
        // of the original datetime
        $this->assertEqualsWithDelta($now->getTimestamp(), $result->deliveryWindowOptions[0]->startDate->getTimestamp(), 60);
    }
}
