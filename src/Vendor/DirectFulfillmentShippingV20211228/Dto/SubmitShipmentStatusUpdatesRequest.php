<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Dto;

use SellingPartnerApi\Dto;

final class SubmitShipmentStatusUpdatesRequest extends Dto
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
