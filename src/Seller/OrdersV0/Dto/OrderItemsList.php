<?php

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OrderItemsList extends BaseDto
{
    protected static array $attributeMap = [
        'orderItems' => 'OrderItems',
        'amazonOrderId' => 'AmazonOrderId',
        'nextToken' => 'NextToken',
    ];

    protected static array $complexArrayTypes = ['orderItems' => [OrderItem::class]];

    /**
     * @param  OrderItem[]  $orderItems  A list of order items.
     * @param  string  $amazonOrderId  An Amazon-defined order identifier, in 3-7-7 format.
     * @param  ?string  $nextToken  When present and not empty, pass this string token in the next request to return the next response page.
     */
    public function __construct(
        public readonly array $orderItems,
        public readonly string $amazonOrderId,
        public readonly ?string $nextToken = null,
    ) {
    }
}
