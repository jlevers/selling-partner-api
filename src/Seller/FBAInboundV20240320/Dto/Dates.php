<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class Dates extends Dto
{
    /**
     * @param  ?Window  $readyToShipWindow  Contains a start and end DateTime representing a time range.
     */
    public function __construct(
        public readonly ?Window $readyToShipWindow = null,
    ) {
    }
}
