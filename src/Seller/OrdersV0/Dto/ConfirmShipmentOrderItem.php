<?php

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ConfirmShipmentOrderItem extends BaseDto
{
    /**
     * @param  string  $orderItemId  The unique identifier of the order item.
     * @param  int  $quantity  The quantity of the item.
     * @param  ?string[]  $transparencyCodes  A list of order items.
     */
    public function __construct(
        public readonly string $orderItemId,
        public readonly int $quantity,
        public readonly ?array $transparencyCodes = null,
    ) {
    }
}
