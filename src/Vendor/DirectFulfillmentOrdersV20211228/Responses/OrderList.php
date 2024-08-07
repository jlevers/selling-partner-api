<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Dto\Pagination;

final class OrderList extends Response
{
    protected static array $complexArrayTypes = ['orders' => Order::class];

    /**
     * @param  ?Pagination  $pagination  The pagination elements required to retrieve the remaining data.
     * @param  Order[]|null  $orders  Represents a purchase order within the OrderList.
     */
    public function __construct(
        public readonly ?Pagination $pagination = null,
        public readonly ?array $orders = null,
    ) {}
}
