<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\CatalogItemsV20220401\Dto;

use SellingPartnerApi\Dto;

final class ItemDimensionsByMarketplace extends Dto
{
    /**
     * @param  string  $marketplaceId  Amazon marketplace identifier.
     * @param  ?Dimensions  $item  Dimensions of an Amazon catalog item or item in its packaging.
     * @param  ?Dimensions  $package  Dimensions of an Amazon catalog item or item in its packaging.
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly ?Dimensions $item = null,
        public readonly ?Dimensions $package = null,
    ) {
    }
}
