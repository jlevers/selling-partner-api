<?php

namespace SellingPartnerApi\Seller\CatalogItemsV20201201\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ItemVendorDetailsByMarketplace extends BaseDto
{
    /**
     * @param  string  $marketplaceId  Amazon marketplace identifier.
     * @param  ?string  $brandCode  Brand code associated with an Amazon catalog item.
     * @param  ?string  $categoryCode  Product category associated with an Amazon catalog item.
     * @param  ?string  $manufacturerCode  Manufacturer code associated with an Amazon catalog item.
     * @param  ?string  $manufacturerCodeParent  Parent vendor code of the manufacturer code.
     * @param  ?string  $productGroup  Product group associated with an Amazon catalog item.
     * @param  ?string  $replenishmentCategory  Replenishment category associated with an Amazon catalog item.
     * @param  ?string  $subcategoryCode  Product subcategory associated with an Amazon catalog item.
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly ?string $brandCode = null,
        public readonly ?string $categoryCode = null,
        public readonly ?string $manufacturerCode = null,
        public readonly ?string $manufacturerCodeParent = null,
        public readonly ?string $productGroup = null,
        public readonly ?string $replenishmentCategory = null,
        public readonly ?string $subcategoryCode = null,
    ) {
    }
}
