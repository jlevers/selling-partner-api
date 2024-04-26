<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\EasyShipV20220323\Dto;

use SellingPartnerApi\Dto;

final class Item extends Dto
{
    /**
     * @param  ?string  $orderItemId  The Amazon-defined order item identifier.
     * @param  ?string[]  $orderItemSerialNumbers  A list of serial numbers for the items associated with the `OrderItemId` value.
     */
    public function __construct(
        public readonly ?string $orderItemId = null,
        public readonly ?array $orderItemSerialNumbers = null,
    ) {
    }
}
