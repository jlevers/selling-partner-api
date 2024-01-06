<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class InboundShipmentPlan extends BaseDto
{
    protected static array $complexArrayTypes = ['items' => [InboundShipmentPlanItem::class]];

    /**
     * @param  string  $shipmentId A shipment identifier originally returned by the createInboundShipmentPlan operation.
     * @param  string  $destinationFulfillmentCenterId An Amazon fulfillment center identifier created by Amazon.
     * @param  string  $labelPrepType The type of label preparation that is required for the inbound shipment.
     * @param  InboundShipmentPlanItem[]  $items A list of inbound shipment plan item information.
     * @param  BoxContentsFeeDetails  $estimatedBoxContentsFee The manual processing fee per unit and total fee for a shipment.
     */
    public function __construct(
        public readonly ?string $shipmentId = null,
        public readonly ?string $destinationFulfillmentCenterId = null,
        public readonly ?Address $shipToAddress = null,
        public readonly ?string $labelPrepType = null,
        public readonly ?array $items = null,
        public readonly ?BoxContentsFeeDetails $estimatedBoxContentsFee = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
