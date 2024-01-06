<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Feature extends BaseDto
{
    /**
     * @param  string  $featureName The feature name.
     * @param  string  $featureDescription The feature description.
     * @param  bool  $sellerEligible When true, indicates that the seller is eligible to use the feature.
     */
    public function __construct(
        public readonly ?string $featureName = null,
        public readonly ?string $featureDescription = null,
        public readonly ?bool $sellerEligible = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
