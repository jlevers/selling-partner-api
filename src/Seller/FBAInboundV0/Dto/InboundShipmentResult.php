<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use SellingPartnerApi\Dto;

final class InboundShipmentResult extends Dto
{
    protected static array $attributeMap = ['shipmentId' => 'ShipmentId'];

    /**
     * @param  string  $shipmentId  The shipment identifier submitted in the request.
     */
    public function __construct(
        public string $shipmentId,
    ) {}
}
