<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\CatalogItemsV20201201\Dto;

use SellingPartnerApi\Dto;

final class ItemProductTypeByMarketplace extends Dto
{
    /**
     * @param  ?string  $marketplaceId  Amazon marketplace identifier.
     * @param  ?string  $productType  Name of the product type associated with the Amazon catalog item.
     */
    public function __construct(
        public readonly ?string $marketplaceId = null,
        public readonly ?string $productType = null,
    ) {
    }
}
