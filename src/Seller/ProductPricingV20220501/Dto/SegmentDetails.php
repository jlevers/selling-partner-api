<?php

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SegmentDetails extends BaseDto
{
    /**
     * @param  ?float  $glanceViewWeightPercentage  Glance view weight percentage for this segment. The glance views for this segment as a percentage of total glance views across all segments on the ASIN. A higher percentage indicates more Amazon customers see this offer as the Featured Offer.
     */
    public function __construct(
        public readonly ?float $glanceViewWeightPercentage = null,
    ) {
    }
}
