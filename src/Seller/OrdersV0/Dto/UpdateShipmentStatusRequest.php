<?php

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class UpdateShipmentStatusRequest extends BaseDto
{
    protected static array $complexArrayTypes = ['orderItems' => [object::class]];

    /**
     * @param  string  $marketplaceId The unobfuscated marketplace identifier.
     * @param  string  $shipmentStatus The shipment status to apply.
     * @param  object[]  $orderItems For partial shipment status updates, the list of order items and quantities to be updated.
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly string $shipmentStatus,
        public readonly ?array $orderItems = null,
    ) {
    }
}
