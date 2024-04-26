<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\OrdersV1\Dto;

use SellingPartnerApi\Dto;

final class OrderList extends Dto
{
    protected static array $complexArrayTypes = ['orders' => [Order::class]];

    /**
     * @param  ?Pagination  $pagination
     * @param  Order[]  $orders
     */
    public function __construct(
        public readonly ?Pagination $pagination = null,
        public readonly ?array $orders = null,
    ) {
    }
}
