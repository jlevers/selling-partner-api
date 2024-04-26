<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class PlacementOptionSummary extends Dto
{
    /**
     * @param  string  $placementOptionId  Identifier to a placement option. A placement option represents the shipment splits and destinations of SKUs.
     * @param  string  $status  The status of a placement option. Can be `OFFERED` or `ACCEPTED`.
     */
    public function __construct(
        public readonly string $placementOptionId,
        public readonly string $status,
    ) {
    }
}
