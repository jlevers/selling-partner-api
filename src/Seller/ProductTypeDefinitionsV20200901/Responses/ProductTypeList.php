<?php

namespace SellingPartnerApi\Seller\ProductTypeDefinitionsV20200901\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ProductTypeDefinitionsV20200901\Dto\ProductType;
use SellingPartnerApi\Seller\ProductTypeDefinitionsV20200901\Dto\ProductTypeVersion;

final class ProductTypeList extends BaseResponse
{
    protected static array $complexArrayTypes = ['productTypes' => [ProductType::class]];

    /**
     * @param  ProductType[]  $productTypes
     * @param  ProductTypeVersion  $productTypeVersion  The version details for an Amazon product type.
     */
    public function __construct(
        public readonly array $productTypes,
        public readonly ProductTypeVersion $productTypeVersion,
    ) {
    }
}
