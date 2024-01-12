<?php

namespace SellingPartnerApi\Vendor\OrdersV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OrderListStatus extends BaseDto
{
    protected static array $complexArrayTypes = ['ordersStatus' => [OrderStatus::class]];

    /**
     * @param  ?Pagination  $pagination
     * @param  OrderStatus[]  $ordersStatus
     */
    public function __construct(
        public readonly ?Pagination $pagination = null,
        public readonly ?array $ordersStatus = null,
    ) {
    }
}
