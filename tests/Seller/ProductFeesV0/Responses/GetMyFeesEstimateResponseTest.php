<?php

namespace SellingPartnerApi\Tests\Seller\ProductFeesV0\Responses;

use DateTime;
use DateTimeInterface;
use DateTimeZone;
use PHPUnit\Framework\TestCase;
use SellingPartnerApi\Seller\ProductFeesV0\Responses\GetMyFeesEstimateResponse;

class GetMyFeesEstimateResponseTest extends TestCase
{
    public function testDeserializeDateTimeWithMs()
    {
        $now = new DateTime;
        $ms = $now->format('v');
        $result = GetMyFeesEstimateResponse::deserialize([
            'payload' => [
                'FeesEstimateResult' => [
                    'status' => 'Success',
                    'FeesEstimate' => [
                        'TimeOfFeesEstimation' => $now->format('Y-m-d\TH:i:s.vp'),
                    ],
                ],
            ],
        ]);
        $this->assertNotNull($result);
        $this->assertInstanceOf(DateTimeInterface::class, $result->payload->feesEstimateResult->feesEstimate->timeOfFeesEstimation);
        $this->assertEquals($ms, $result->payload->feesEstimateResult->feesEstimate->timeOfFeesEstimation->format('v'));
    }

    public function testDeserializeDateTimeWithTimezone(): void
    {
        $now = new DateTime;
        $now->setTimeZone(new DateTimeZone('+02:00'));

        $result = GetMyFeesEstimateResponse::deserialize([
            'payload' => [
                'FeesEstimateResult' => [
                    'status' => 'Success',
                    'FeesEstimate' => [
                        'TimeOfFeesEstimation' => $now->format(DateTimeInterface::ATOM),
                    ],
                ],
            ],
        ]);
        $this->assertInstanceOf(DateTimeInterface::class, $result->payload->feesEstimateResult->feesEstimate->timeOfFeesEstimation);
        $this->assertEquals(new DateTimeZone('+02:00'), $result->payload->feesEstimateResult->feesEstimate->timeOfFeesEstimation->getTimeZone());

        $nowUtc = new DateTime;
        $utcResult = GetMyFeesEstimateResponse::deserialize([
            'payload' => [
                'FeesEstimateResult' => [
                    'status' => 'Success',
                    'FeesEstimate' => [
                        'TimeOfFeesEstimation' => $nowUtc->format('Y-m-d\TH:i:s\Z'),
                    ],
                ],
            ],
        ]);
        $this->assertInstanceOf(DateTimeInterface::class, $utcResult->payload->feesEstimateResult->feesEstimate->timeOfFeesEstimation);
        $this->assertEquals(new DateTimeZone('UTC'), $utcResult->payload->feesEstimateResult->feesEstimate->timeOfFeesEstimation->getTimeZone());
    }
}
