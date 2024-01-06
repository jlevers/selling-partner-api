<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ListAllFulfillmentOrdersResult extends BaseDto
{
    protected static array $complexArrayTypes = ['fulfillmentOrders' => [FulfillmentOrder::class]];

    /**
     * @param  string  $nextToken When present and not empty, pass this string token in the next request to return the next response page.
     * @param  FulfillmentOrder[]  $fulfillmentOrders An array of fulfillment order information.
     */
    public function __construct(
        public readonly string $nextToken,
        public readonly array $fulfillmentOrders,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
