<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\CatalogItemsV20201201\Dto;

use SellingPartnerApi\Dto;

final class ItemVariationsByMarketplace extends Dto
{
    /**
     * @param  string  $marketplaceId  Amazon marketplace identifier.
     * @param  string[]  $asins  Identifiers (ASINs) of the related items.
     * @param  string  $variationType  Type of variation relationship of the Amazon catalog item in the request to the related item(s): "PARENT" or "CHILD".
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly array $asins,
        public readonly string $variationType,
    ) {
    }
}
