<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use SellingPartnerApi\Dto;

final class GetFulfillmentOrderResult extends Dto
{
    protected static array $complexArrayTypes = [
        'fulfillmentOrderItems' => FulfillmentOrderItem::class,
        'returnItems' => ReturnItem::class,
        'returnAuthorizations' => ReturnAuthorization::class,
        'fulfillmentShipments' => FulfillmentShipment::class,
        'paymentInformation' => PaymentInformation::class,
    ];

    /**
     * @param  FulfillmentOrder  $fulfillmentOrder  General information about a fulfillment order, including its status.
     * @param  FulfillmentOrderItem[]  $fulfillmentOrderItems  An array of fulfillment order item information.
     * @param  ReturnItem[]  $returnItems  An array of items that Amazon accepted for return. Returns empty if no items were accepted for return.
     * @param  ReturnAuthorization[]  $returnAuthorizations  An array of return authorization information.
     * @param  FulfillmentShipment[]|null  $fulfillmentShipments  An array of fulfillment shipment information.
     * @param  PaymentInformation[]|null  $paymentInformation  An array of various payment attributes related to this fulfillment order.
     */
    public function __construct(
        public FulfillmentOrder $fulfillmentOrder,
        public array $fulfillmentOrderItems,
        public array $returnItems,
        public array $returnAuthorizations,
        public ?array $fulfillmentShipments = null,
        public ?array $paymentInformation = null,
    ) {}
}
