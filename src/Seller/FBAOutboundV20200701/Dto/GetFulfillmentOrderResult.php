<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GetFulfillmentOrderResult extends BaseDto
{
    protected static array $complexArrayTypes = [
        'fulfillmentOrderItems' => [FulfillmentOrderItem::class],
        'fulfillmentShipments' => [FulfillmentShipment::class],
        'returnItems' => [ReturnItem::class],
        'returnAuthorizations' => [ReturnAuthorization::class],
    ];

    /**
     * @param  FulfillmentOrder  $fulfillmentOrder General information about a fulfillment order, including its status.
     * @param  FulfillmentOrderItem[]  $fulfillmentOrderItems An array of fulfillment order item information.
     * @param  FulfillmentShipment[]  $fulfillmentShipments An array of fulfillment shipment information.
     * @param  ReturnItem[]  $returnItems An array of items that Amazon accepted for return. Returns empty if no items were accepted for return.
     * @param  ReturnAuthorization[]  $returnAuthorizations An array of return authorization information.
     */
    public function __construct(
        public readonly FulfillmentOrder $fulfillmentOrder,
        public readonly ?array $fulfillmentOrderItems = null,
        public readonly ?array $fulfillmentShipments = null,
        public readonly ?array $returnItems = null,
        public readonly ?array $returnAuthorizations = null,
    ) {
    }
}
