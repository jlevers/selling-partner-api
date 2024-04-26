<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use SellingPartnerApi\Dto;

final class SubmitShipments extends Dto
{
    protected static array $complexArrayTypes = ['shipments' => [Shipment::class]];

    /**
     * @param  Shipment[]  $shipments
     */
    public function __construct(
        public readonly ?array $shipments = null,
    ) {
    }
}
