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
     * @param  string  $placementOptionId  The identifier of a placement option. A placement option represents the shipment splits and destinations of SKUs.
     * @param  string[]  $shipmentIds  Shipment ids.
     * @param  string  $status  The status of a placement option. Can be: `OFFERED`, `ACCEPTED`, or `EXPIRED`.
     * @param  ?\DateTimeInterface  $expiration  The expiration date of the placement option. This is based in ISO 8601 datetime with pattern `yyyy-MM-ddTHH:mm:ss.sssZ`.
     */
    public function __construct(
        public readonly array $discounts,
        public readonly array $fees,
        public readonly string $placementOptionId,
        public readonly array $shipmentIds,
        public readonly string $status,
        public readonly ?\DateTimeInterface $expiration = null,
    ) {
    }
}
