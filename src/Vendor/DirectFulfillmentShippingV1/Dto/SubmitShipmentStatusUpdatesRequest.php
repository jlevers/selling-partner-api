<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto;

use SellingPartnerApi\Dto;

final class SubmitShipmentStatusUpdatesRequest extends Dto
{
    protected static array $complexArrayTypes = ['shipmentStatusUpdates' => [ShipmentStatusUpdate::class]];

    /**
     * @param  ShipmentStatusUpdate[]|null  $shipmentStatusUpdates
     */
    public function __construct(
        public readonly ?array $shipmentStatusUpdates = null,
    ) {
    }
}
