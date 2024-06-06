<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class Carrier extends Dto
{
    /**
     * @param  string  $id  The carrier identifier for the offering, provided by the carrier.
     * @param  string  $name  The carrier name for the offering.
     */
    public function __construct(
        public readonly string $id,
        public readonly string $name,
    ) {
    }
}
