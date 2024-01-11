<?php

namespace SellingPartnerApi\Vendor\OrdersV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OrderListStatus extends BaseDto
{
    protected static array $complexArrayTypes = ['ordersStatus' => [OrderStatus::class]];

    /**
     * @param  ?Pagination  $pagination
     * @param  OrderStatus[]  $ordersStatus
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?Pagination $pagination = null,
        public readonly ?array $ordersStatus = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
