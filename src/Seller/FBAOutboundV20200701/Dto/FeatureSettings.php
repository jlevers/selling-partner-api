<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FeatureSettings extends BaseDto
{
    /**
     * @param  string  $featureName The name of the feature.
     * @param  string  $featureFulfillmentPolicy Specifies the policy to use when fulfilling an order.
     */
    public function __construct(
        public readonly string $featureName,
        public readonly string $featureFulfillmentPolicy,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
