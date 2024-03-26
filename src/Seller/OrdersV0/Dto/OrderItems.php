<?php

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OrderItems extends BaseDto
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
