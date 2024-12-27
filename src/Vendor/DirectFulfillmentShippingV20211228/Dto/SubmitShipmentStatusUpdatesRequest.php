<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Dto;

use SellingPartnerApi\Dto;

final class SubmitShipmentStatusUpdatesRequest extends Dto
{
    protected static array $complexArrayTypes = ['shipmentStatusUpdates' => ShipmentStatusUpdate::class];

    /**
     * @param  ShipmentStatusUpdate[]|null  $shipmentStatusUpdates  Contains a list of one or more `ShipmentStatusUpdate` objects. Each `ShipmentStatusUpdate` object represents an update to the status of a specific shipment.
     */
    public function __construct(
        public ?array $shipmentStatusUpdates = null,
    ) {}
}
