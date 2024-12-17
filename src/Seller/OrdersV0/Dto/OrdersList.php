<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use SellingPartnerApi\Dto;

final class OrdersList extends Dto
{
    protected static array $attributeMap = [
        'orders' => 'Orders',
        'nextToken' => 'NextToken',
        'lastUpdatedBefore' => 'LastUpdatedBefore',
        'createdBefore' => 'CreatedBefore',
    ];

    protected static array $complexArrayTypes = ['orders' => Order::class];

    /**
     * @param  Order[]  $orders  A list of orders.
     * @param  ?string  $nextToken  When present and not empty, pass this string token in the next request to return the next response page.
     * @param  ?string  $lastUpdatedBefore  Use this date to select orders that were last updated before (or at) a specified time. An update is defined as any change in order status, including the creation of a new order. Includes updates made by Amazon and by the seller. All dates must be in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) format.
     * @param  ?string  $createdBefore  Use this date to select orders created before (or at) a specified time. Only orders placed before the specified time are returned. The date must be in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) format.
     */
    public function __construct(
        public array $orders,
        public ?string $nextToken = null,
        public ?string $lastUpdatedBefore = null,
        public ?string $createdBefore = null,
    ) {}
}
