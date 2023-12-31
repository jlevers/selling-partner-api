<?php

namespace SellingPartnerApi\Seller\CatalogItemsV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Categories extends BaseDto
{
    /**
     * @param  string  $productCategoryId The identifier for the product category (or browse node).
     * @param  string  $productCategoryName The name of the product category (or browse node).
     * @param  array  $parent The parent product category.
     */
    public function __construct(
        public readonly string $productCategoryId,
        public readonly string $productCategoryName,
        public readonly array $parent,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
