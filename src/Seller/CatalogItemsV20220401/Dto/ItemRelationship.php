<?php

namespace SellingPartnerApi\Seller\CatalogItemsV20220401\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ItemRelationship extends BaseDto
{
    /**
     * @param  string  $type  Type of relationship.
     * @param  ?string[]  $childAsins  Identifiers (ASINs) of the related items that are children of this item.
     * @param  ?string[]  $parentAsins  Identifiers (ASINs) of the related items that are parents of this item.
     * @param  ?ItemVariationTheme  $variationTheme  Variation theme indicating the combination of Amazon item catalog attributes that define the variation family.
     */
    public function __construct(
        public readonly string $type,
        public readonly ?array $childAsins = null,
        public readonly ?array $parentAsins = null,
        public readonly ?ItemVariationTheme $variationTheme = null,
    ) {
    }
}
