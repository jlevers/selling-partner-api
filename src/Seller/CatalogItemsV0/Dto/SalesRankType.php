<?php

namespace SellingPartnerApi\Seller\CatalogItemsV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SalesRankType extends BaseDto
{
    protected static array $attributeMap = ['productCategoryId' => 'ProductCategoryId', 'rank' => 'Rank'];

    /**
     * @param  string  $productCategoryId  Identifies the item category from which the sales rank is taken.
     * @param  int  $rank  The sales rank of the item within the item category.
     */
    public function __construct(
        public readonly string $productCategoryId,
        public readonly int $rank,
    ) {
    }
}
