<?php

namespace SellingPartnerApi\Seller\CatalogItemsV20220401\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ItemVendorDetailsCategory extends BaseDto
{
    /**
     * @param  ?string  $displayName  Display name of the product category or subcategory
     * @param  ?string  $value  Value (code) of the product category or subcategory.
     */
    public function __construct(
        public readonly ?string $displayName = null,
        public readonly ?string $value = null,
    ) {
    }
}
