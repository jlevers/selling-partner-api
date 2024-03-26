<?php

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AssociatedItem extends BaseDto
{
    protected static array $attributeMap = [
        'orderId' => 'OrderId',
        'orderItemId' => 'OrderItemId',
        'associationType' => 'AssociationType',
    ];

    /**
     * @param  ?string  $orderId  The order item's order identifier, in 3-7-7 format.
     * @param  ?string  $orderItemId  An Amazon-defined item identifier for the associated item.
     * @param  ?string  $associationType  The type of association an item has with an order item.
     */
    public function __construct(
        public readonly ?string $orderId = null,
        public readonly ?string $orderItemId = null,
        public readonly ?string $associationType = null,
    ) {
    }
}
