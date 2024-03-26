<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GetFeatureSkuResult extends BaseDto
{
    /**
     * @param  string  $marketplaceId  The requested marketplace.
     * @param  string  $featureName  The name of the feature.
     * @param  bool  $isEligible  When true, the seller SKU is eligible for the requested feature.
     * @param  ?string[]  $ineligibleReasons  A list of one or more reasons that the seller SKU is ineligibile for the feature.
     *
     * Possible values:
     * * MERCHANT_NOT_ENROLLED - The merchant isn't enrolled for the feature.
     * * SKU_NOT_ELIGIBLE - The SKU doesn't reside in a warehouse that supports the feature.
     * * INVALID_SKU - There is an issue with the SKU provided.
     * @param  ?FeatureSku  $skuInfo  Information about an SKU, including the count available, identifiers, and a list of overlapping SKUs that share the same inventory pool.
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly string $featureName,
        public readonly bool $isEligible,
        public readonly ?array $ineligibleReasons = null,
        public readonly ?FeatureSku $skuInfo = null,
    ) {
    }
}
