<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class PlacementOption extends Dto
{
    protected static array $complexArrayTypes = ['discounts' => [Incentive::class], 'fees' => [Incentive::class]];

    /**
     * @param  Incentive[]  $discounts  Discount for the offered option.
     * @param  Incentive[]  $fees  Fee for the offered option.
     * @param  string  $placementOptionId  Identifier to a placement option. A placement option represents the shipment splits and destinations of SKUs.
     * @param  string[]  $shipmentIds  Shipment ids.
     * @param  string  $status  The status of a placement option. Can be `OFFERED`, `ACCEPTED`, or `EXPIRED`.
     * @param  ?DateTime  $expiration  The expiration date of the placement option. This is in ISO 8601 datetime format with pattern `yyyy-MM-ddTHH:mm:ss.sssZ`.
     */
    public function __construct(
        public readonly array $discounts,
        public readonly array $fees,
        public readonly string $placementOptionId,
        public readonly array $shipmentIds,
        public readonly string $status,
        public readonly ?\DateTime $expiration = null,
    ) {
    }
}
