<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SalesRankType extends BaseDto
{
    /**
     * @param  string  $productCategoryId  Identifies the item category from which the sales rank is taken.
     * @param  int  $rank The sales rank of the item within the item category.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly string $productCategoryId,
        public readonly int $rank,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
