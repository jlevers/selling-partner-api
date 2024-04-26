<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use SellingPartnerApi\Dto;

final class SubmitShipmentConfirmationsRequest extends Dto
{
    protected static array $complexArrayTypes = ['shipmentConfirmations' => [ShipmentConfirmation::class]];

    /**
     * @param  ShipmentConfirmation[]  $shipmentConfirmations
     */
    public function __construct(
        public readonly ?array $shipmentConfirmations = null,
    ) {
    }
}
