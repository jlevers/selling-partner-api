<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\OrdersV1\Dto;

use SellingPartnerApi\Dto;

final class OrderList extends Dto
{
    protected static array $complexArrayTypes = ['orders' => Order::class];

    /**
     * @param  ?Pagination  $pagination  The pagination elements required to retrieve the remaining data.
     * @param  Order[]|null  $orders  Represents an individual order within the OrderList.
     */
    public function __construct(
        public ?Pagination $pagination = null,
        public ?array $orders = null,
    ) {}
}
