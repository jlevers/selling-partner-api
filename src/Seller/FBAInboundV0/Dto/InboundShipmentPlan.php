<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use SellingPartnerApi\Dto;

final class InboundShipmentPlan extends Dto
{
    protected static array $attributeMap = [
        'shipmentId' => 'ShipmentId',
        'destinationFulfillmentCenterId' => 'DestinationFulfillmentCenterId',
        'shipToAddress' => 'ShipToAddress',
        'labelPrepType' => 'LabelPrepType',
        'items' => 'Items',
        'estimatedBoxContentsFee' => 'EstimatedBoxContentsFee',
    ];

    protected static array $complexArrayTypes = ['items' => [InboundShipmentPlanItem::class]];

    /**
     * @param  string  $shipmentId  A shipment identifier originally returned by the createInboundShipmentPlan operation.
     * @param  string  $destinationFulfillmentCenterId  An Amazon fulfillment center identifier created by Amazon.
     * @param  string  $labelPrepType  The type of label preparation that is required for the inbound shipment.
     * @param  InboundShipmentPlanItem[]  $items  A list of inbound shipment plan item information.
     * @param  ?BoxContentsFeeDetails  $estimatedBoxContentsFee  The manual processing fee per unit and total fee for a shipment.
     */
    public function __construct(
        public readonly string $shipmentId,
        public readonly string $destinationFulfillmentCenterId,
        public readonly Address $shipToAddress,
        public readonly string $labelPrepType,
        public readonly array $items,
        public readonly ?BoxContentsFeeDetails $estimatedBoxContentsFee = null,
    ) {
    }
}
