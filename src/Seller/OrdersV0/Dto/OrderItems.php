<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use SellingPartnerApi\Dto;

final class OrderItems extends Dto
{
    /**
     * @param  ?string  $orderItemId  The unique identifier of the order item.
     * @param  ?int  $quantity  The quantity for which to update the shipment status.
     */
    public function __construct(
        public readonly ?string $orderItemId = null,
        public readonly ?int $quantity = null,
    ) {
    }
}
