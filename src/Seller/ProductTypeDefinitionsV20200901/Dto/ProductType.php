<?php

namespace SellingPartnerApi\Seller\ProductTypeDefinitionsV20200901\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ProductType extends BaseDto
{
    /**
     * @param  string  $name  The name of the Amazon product type.
     * @param  string  $displayName  The human-readable and localized description of the Amazon product type.
     * @param  string[]  $marketplaceIds  Amazon marketplace identifiers for which the product type definition is applicable.
     */
    public function __construct(
        public readonly string $name,
        public readonly string $displayName,
        public readonly array $marketplaceIds,
    ) {
    }
}
