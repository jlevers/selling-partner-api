<?php

namespace SellingPartnerApi\Seller\CatalogItemsV20201201\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ItemVariationsByMarketplace extends BaseDto
{
    /**
     * @param  string  $marketplaceId Amazon marketplace identifier.
     * @param  string  $variationType Type of variation relationship of the Amazon catalog item in the request to the related item(s): "PARENT" or "CHILD".
     * @param  ?string[]  $asins Identifiers (ASINs) of the related items.
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly string $variationType,
        public readonly ?array $asins = null,
    ) {
    }
}
