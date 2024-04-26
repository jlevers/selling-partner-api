<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use SellingPartnerApi\Dto;

final class Feature extends Dto
{
    /**
     * @param  string  $featureName  The feature name.
     * @param  string  $featureDescription  The feature description.
     * @param  ?bool  $sellerEligible  When true, indicates that the seller is eligible to use the feature.
     */
    public function __construct(
        public readonly string $featureName,
        public readonly string $featureDescription,
        public readonly ?bool $sellerEligible = null,
    ) {
    }
}
