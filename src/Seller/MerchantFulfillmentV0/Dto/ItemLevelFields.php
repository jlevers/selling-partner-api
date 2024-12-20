<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use SellingPartnerApi\Dto;

final class ItemLevelFields extends Dto
{
    protected static array $attributeMap = ['asin' => 'Asin', 'additionalInputs' => 'AdditionalInputs'];

    protected static array $complexArrayTypes = ['additionalInputs' => AdditionalInputs::class];

    /**
     * @param  string  $asin  The Amazon Standard Identification Number (ASIN) of the item.
     * @param  AdditionalInputs[]  $additionalInputs  A list of additional inputs.
     */
    public function __construct(
        public string $asin,
        public array $additionalInputs,
    ) {}
}
