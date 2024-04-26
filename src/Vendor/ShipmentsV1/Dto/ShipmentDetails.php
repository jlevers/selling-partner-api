<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use SellingPartnerApi\Dto;

final class ShipmentDetails extends Dto
{
    protected static array $complexArrayTypes = ['shipments' => [Shipment::class]];

    /**
     * @param  ?Pagination  $pagination
     * @param  Shipment[]  $shipments
     */
    public function __construct(
        public readonly ?Pagination $pagination = null,
        public readonly ?array $shipments = null,
    ) {
    }
}
