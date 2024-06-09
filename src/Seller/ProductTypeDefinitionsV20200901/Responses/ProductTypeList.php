<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductTypeDefinitionsV20200901\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\ProductTypeDefinitionsV20200901\Dto\ProductType;

final class ProductTypeList extends Response
{
    protected static array $complexArrayTypes = ['productTypes' => [ProductType::class]];

    /**
     * @param  ProductType[]  $productTypes
     * @param  string  $productTypeVersion  Amazon product type version identifier.
     */
    public function __construct(
        public readonly array $productTypes,
        public readonly string $productTypeVersion,
    ) {
    }
}
