<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use SellingPartnerApi\Dto;

final class GetFeatureInventoryResult extends Dto
{
    protected static array $complexArrayTypes = ['featureSkus' => FeatureSku::class];

    /**
     * @param  string  $marketplaceId  The requested marketplace.
     * @param  string  $featureName  The name of the feature.
     * @param  ?string  $nextToken  When present and not empty, pass this string token in the next request to return the next response page.
     * @param  FeatureSku[]|null  $featureSkus  An array of SKUs eligible for this feature and the quantity available.
     */
    public function __construct(
        public string $marketplaceId,
        public string $featureName,
        public ?string $nextToken = null,
        public ?array $featureSkus = null,
    ) {}
}
