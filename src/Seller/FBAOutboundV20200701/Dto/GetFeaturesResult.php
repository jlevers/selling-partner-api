<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GetFeaturesResult extends BaseDto
{
    protected static array $complexArrayTypes = ['features' => [Feature::class]];

    /**
     * @param  Feature[]  $features  An array of features.
     */
    public function __construct(
        public readonly array $features,
    ) {
    }
}
