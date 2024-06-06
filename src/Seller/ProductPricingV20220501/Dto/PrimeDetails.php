<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use SellingPartnerApi\Dto;

final class PrimeDetails extends Dto
{
    /**
     * @param  string  $eligibility  Indicates whether the offer is an Amazon Prime offer.
     */
    public function __construct(
        public readonly string $eligibility,
    ) {
    }
}
