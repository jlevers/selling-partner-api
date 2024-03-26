<?php

namespace SellingPartnerApi\Seller\CatalogItemsV20201201\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Refinements extends BaseDto
{
    protected static array $complexArrayTypes = [
        'brands' => [BrandRefinement::class],
        'classifications' => [ClassificationRefinement::class],
    ];

    /**
     * @param  BrandRefinement[]  $brands  Brand search refinements.
     * @param  ClassificationRefinement[]  $classifications  Classification search refinements.
     */
    public function __construct(
        public readonly array $brands,
        public readonly array $classifications,
    ) {
    }
}
