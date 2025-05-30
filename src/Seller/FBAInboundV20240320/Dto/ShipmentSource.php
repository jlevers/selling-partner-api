<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class ShipmentSource extends Dto
{
    /**
     * @param  string  $sourceType  The type of source for this shipment. Possible values: `SELLER_FACILITY`.
     * @param  ?Address  $address  Specific details to identify a place.
     */
    public function __construct(
        public string $sourceType,
        public ?Address $address = null,
    ) {}
}
