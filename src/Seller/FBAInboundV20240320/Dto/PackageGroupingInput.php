<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class PackageGroupingInput extends Dto
{
    protected static array $complexArrayTypes = ['boxes' => [Box::class]];

    /**
     * @param  Box[]  $boxes  A list of boxes in an inbound plan.
     * @param  ?string  $packingGroupId  The ID of the `packingGroup` that packages are grouped according to. The `PackingGroupId` can only be provided before placement confirmation, and it must belong to the confirmed `PackingOption`. One of `ShipmentId` or `PackingGroupId` must be provided with every request.
     * @param  ?string  $shipmentId  The ID of the shipment that packages are grouped according to. The `ShipmentId` can only be provided after placement confirmation, and the shipment must belong to the confirmed placement option. One of `ShipmentId` or `PackingGroupId` must be provided with every request.
     */
    public function __construct(
        public readonly array $boxes,
        public readonly ?string $packingGroupId = null,
        public readonly ?string $shipmentId = null,
    ) {
    }
}
