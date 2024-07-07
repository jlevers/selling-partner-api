<?php

namespace Seller\ReportsV20210630\Responses;

use DateTime;
use DateTimeInterface;
use PHPUnit\Framework\TestCase;
use SellingPartnerApi\Seller\ProductFeesV0\Responses\GetMyFeesEstimateResponse;

class GetMyFeesEstimateResponseTest extends TestCase
{
    public function testDeserializeDateTime()
    {
        $now = new DateTime();
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
    }
}
