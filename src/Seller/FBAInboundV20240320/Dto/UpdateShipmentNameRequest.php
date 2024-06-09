<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class UpdateShipmentNameRequest extends Dto
{
    /**
     * @param  string  $name  A human-readable name to update the shipment name to.
     */
    public function __construct(
        public readonly string $name,
    ) {
    }
}
