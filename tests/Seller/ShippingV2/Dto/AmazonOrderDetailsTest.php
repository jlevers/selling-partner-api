<?php

namespace SellingPartnerApi\Tests\Seller\ShippingV2\Dto;

use PHPUnit\Framework\TestCase;
use SellingPartnerApi\Seller\ShippingV2\Dto\AmazonOrderDetails;

class AmazonOrderDetailsTest extends TestCase
{
    public function test_amazon_seller_id_is_omitted_when_not_set()
    {
        $details = new AmazonOrderDetails(orderId: '111-8922865-1841805');

        $this->assertNull($details->amazonSellerId);
        $this->assertSame(['orderId' => '111-8922865-1841805'], $details->toArray());
    }

    public function test_amazon_seller_id_is_serialized_when_set()
    {
        $details = new AmazonOrderDetails(
            orderId: '111-8922865-1841805',
            amazonSellerId: 'A1B2C3D4E5F6G7',
        );

        $this->assertSame([
            'orderId' => '111-8922865-1841805',
            'amazonSellerId' => 'A1B2C3D4E5F6G7',
        ], $details->toArray());
    }

    public function test_amazon_seller_id_is_deserialized()
    {
        $details = AmazonOrderDetails::deserialize([
            'orderId' => '111-8922865-1841805',
            'amazonSellerId' => 'A1B2C3D4E5F6G7',
        ]);

        $this->assertSame('111-8922865-1841805', $details->orderId);
        $this->assertSame('A1B2C3D4E5F6G7', $details->amazonSellerId);
    }
}
