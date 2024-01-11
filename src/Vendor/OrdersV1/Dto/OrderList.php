<?php

namespace SellingPartnerApi\Vendor\OrdersV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OrderList extends BaseDto
{
    protected static array $complexArrayTypes = ['orders' => [Order::class]];

    /**
     * @param  ?Pagination  $pagination
     * @param  Order[]  $orders
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?Pagination $pagination = null,
        public readonly ?array $orders = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
