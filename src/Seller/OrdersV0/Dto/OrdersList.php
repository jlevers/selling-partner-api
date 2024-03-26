<?php

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OrdersList extends BaseDto
{
    protected static array $attributeMap = [
        'orders' => 'Orders',
        'nextToken' => 'NextToken',
        'lastUpdatedBefore' => 'LastUpdatedBefore',
        'createdBefore' => 'CreatedBefore',
    ];

    protected static array $complexArrayTypes = ['orders' => [Order::class]];

    /**
     * @param  Order[]  $orders  A list of orders.
     * @param  ?string  $nextToken  When present and not empty, pass this string token in the next request to return the next response page.
     * @param  ?string  $lastUpdatedBefore  A date used for selecting orders that were last updated before (or at) a specified time. An update is defined as any change in order status, including the creation of a new order. Includes updates made by Amazon and by the seller. All dates must be in ISO 8601 format.
     * @param  ?string  $createdBefore  A date used for selecting orders created before (or at) a specified time. Only orders placed before the specified time are returned. The date must be in ISO 8601 format.
     */
    public function __construct(
        public readonly array $orders,
        public readonly ?string $nextToken = null,
        public readonly ?string $lastUpdatedBefore = null,
        public readonly ?string $createdBefore = null,
    ) {
    }
}
