<?php

namespace SellingPartnerApi\Tests\Seller\ShippingV2\Dto;

use PHPUnit\Framework\TestCase;
use SellingPartnerApi\Seller\ShippingV2\Dto\Rate;

class RateTest extends TestCase
{
    public function test_deserialize_null_date_time()
    {
        $result = Rate::deserialize([
            'rateId' => '',
            'carrierId' => '',
            'carrierName' => '',
            'serviceId' => '',
            'serviceName' => '',
            'totalCharge' => [
                'value' => 4.88,
                'unit' => 'USD',
            ],
            'promise' => [
                'deliveryWindow' => [
                    'start' => '2024-12-29T07:59:59Z',
                    'end' => '2024-12-29T07:59:59Z',
                ],
                'pickupWindow' => [
                    'start' => null,
                    'end' => null,
                ],
            ],
            'supportedDocumentSpecifications' => [],
            'requiresAdditionalInputs' => false,
            'billedWeight' => [
                'unit' => 'GRAM',
                'value' => 205,
            ],
            'availableValueAddedServiceGroups' => [],
        ]);
        $this->assertNotNull($result);
        $this->assertNull($result->promise->pickupWindow->start);
    }
}
