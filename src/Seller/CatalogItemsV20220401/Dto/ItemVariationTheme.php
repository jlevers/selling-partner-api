<?php

namespace SellingPartnerApi\Seller\CatalogItemsV20220401\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ItemVariationTheme extends BaseDto
{
    /**
     * @param  ?string[]  $attributes  Names of the Amazon catalog item attributes associated with the variation theme.
     * @param  ?string  $theme  Variation theme indicating the combination of Amazon item catalog attributes that define the variation family.
     */
    public function __construct(
        public readonly ?array $attributes = null,
        public readonly ?string $theme = null,
    ) {
    }
}
