<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SubmitShipmentStatusUpdatesRequest extends BaseDto
{
    protected static array $complexArrayTypes = ['shipmentStatusUpdates' => [ShipmentStatusUpdate::class]];

    /**
     * @param  ShipmentStatusUpdate[]  $shipmentStatusUpdates
     */
    public function __construct(
        public readonly ?array $shipmentStatusUpdates = null,
    ) {
    }
}
