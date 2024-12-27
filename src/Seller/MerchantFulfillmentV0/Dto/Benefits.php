<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use SellingPartnerApi\Dto;

final class Benefits extends Dto
{
    protected static array $attributeMap = [
        'includedBenefits' => 'IncludedBenefits',
        'excludedBenefits' => 'ExcludedBenefits',
    ];

    protected static array $complexArrayTypes = ['excludedBenefits' => ExcludedBenefit::class];

    /**
     * @param  ?string[]  $includedBenefits  A list of included benefits.
     * @param  ExcludedBenefit[]|null  $excludedBenefits  A list of excluded benefits. Refer to the `ExcludeBenefit` object for further documentation.
     */
    public function __construct(
        public ?array $includedBenefits = null,
        public ?array $excludedBenefits = null,
    ) {}
}
