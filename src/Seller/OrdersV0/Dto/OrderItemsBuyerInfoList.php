<?php

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OrderItemsBuyerInfoList extends BaseDto
{
    protected static array $complexArrayTypes = ['orderItems' => [OrderItemBuyerInfo::class]];

    /**
     * @param  OrderItemBuyerInfo[]  $orderItems A single order item's buyer information list.
     * @param  string  $nextToken When present and not empty, pass this string token in the next request to return the next response page.
     * @param  string  $amazonOrderId An Amazon-defined order identifier, in 3-7-7 format.
     */
    public function __construct(
        public readonly array $orderItems,
        public readonly ?string $nextToken,
        public readonly string $amazonOrderId,
    ) {
    }
}
