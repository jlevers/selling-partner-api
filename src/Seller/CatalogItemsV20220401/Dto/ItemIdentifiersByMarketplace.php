<?php

namespace SellingPartnerApi\Seller\CatalogItemsV20220401\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ItemIdentifiersByMarketplace extends BaseDto
{
    protected static array $complexArrayTypes = ['identifiers' => [ItemIdentifier::class]];

    /**
     * @param  string  $marketplaceId  Amazon marketplace identifier.
     * @param  ItemIdentifier[]  $identifiers  Identifiers associated with the item in the Amazon catalog for the indicated Amazon marketplace.
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly array $identifiers,
    ) {
    }
}
