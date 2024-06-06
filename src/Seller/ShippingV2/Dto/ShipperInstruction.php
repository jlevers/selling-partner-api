<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class ShipperInstruction extends Dto
{
    /**
     * @param  ?string  $deliveryNotes  The delivery notes for the shipment
     */
    public function __construct(
        public readonly ?string $deliveryNotes = null,
    ) {
    }
}
