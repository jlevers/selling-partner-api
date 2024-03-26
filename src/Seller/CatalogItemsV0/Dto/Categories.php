<?php

namespace SellingPartnerApi\Seller\CatalogItemsV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Categories extends BaseDto
{
    protected static array $attributeMap = [
        'productCategoryId' => 'ProductCategoryId',
        'productCategoryName' => 'ProductCategoryName',
    ];

    /**
     * @param  ?string  $productCategoryId  The identifier for the product category (or browse node).
     * @param  ?string  $productCategoryName  The name of the product category (or browse node).
     * @param  ?mixed[]  $parent  The parent product category.
     */
    public function __construct(
        public readonly ?string $productCategoryId = null,
        public readonly ?string $productCategoryName = null,
        public readonly ?array $parent = null,
    ) {
    }
}
