<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use SellingPartnerApi\Dto;

final class GetFulfillmentOrderResult extends Dto
{
    protected static array $complexArrayTypes = [
        'fulfillmentOrderItems' => [FulfillmentOrderItem::class],
        'returnItems' => [ReturnItem::class],
        'returnAuthorizations' => [ReturnAuthorization::class],
        'fulfillmentShipments' => [FulfillmentShipment::class],
    ];

    /**
     * @param  FulfillmentOrder  $fulfillmentOrder  General information about a fulfillment order, including its status.
     * @param  FulfillmentOrderItem[]  $fulfillmentOrderItems  An array of fulfillment order item information.
     * @param  ReturnItem[]  $returnItems  An array of items that Amazon accepted for return. Returns empty if no items were accepted for return.
     * @param  ReturnAuthorization[]  $returnAuthorizations  An array of return authorization information.
     * @param  FulfillmentShipment[]|null  $fulfillmentShipments  An array of fulfillment shipment information.
     */
    public function __construct(
        public readonly FulfillmentOrder $fulfillmentOrder,
        public readonly array $fulfillmentOrderItems,
        public readonly array $returnItems,
        public readonly array $returnAuthorizations,
        public readonly ?array $fulfillmentShipments = null,
    ) {
    }
}
