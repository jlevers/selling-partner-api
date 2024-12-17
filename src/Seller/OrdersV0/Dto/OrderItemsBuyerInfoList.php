<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use SellingPartnerApi\Dto;

final class OrderItemsBuyerInfoList extends Dto
{
    protected static array $attributeMap = [
        'orderItems' => 'OrderItems',
        'amazonOrderId' => 'AmazonOrderId',
        'nextToken' => 'NextToken',
    ];

    protected static array $complexArrayTypes = ['orderItems' => OrderItemBuyerInfo::class];

    /**
     * @param  OrderItemBuyerInfo[]  $orderItems  A single order item's buyer information list.
     * @param  string  $amazonOrderId  An Amazon-defined order identifier, in 3-7-7 format.
     * @param  ?string  $nextToken  When present and not empty, pass this string token in the next request to return the next response page.
     */
    public function __construct(
        public array $orderItems,
        public string $amazonOrderId,
        public ?string $nextToken = null,
    ) {}
}
