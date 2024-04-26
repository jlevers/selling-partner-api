<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use SellingPartnerApi\Dto;

final class SegmentDetails extends Dto
{
    /**
     * @param  ?float  $glanceViewWeightPercentage  Glance view weight percentage for this segment. The glance views for this segment as a percentage of total glance views across all segments on the ASIN. A higher percentage indicates more Amazon customers see this offer as the Featured Offer.
     */
    public function __construct(
        public readonly ?float $glanceViewWeightPercentage = null,
    ) {
    }
}
