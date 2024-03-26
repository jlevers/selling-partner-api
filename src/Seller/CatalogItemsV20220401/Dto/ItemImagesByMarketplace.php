<?php

namespace SellingPartnerApi\Seller\CatalogItemsV20220401\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ItemImagesByMarketplace extends BaseDto
{
    protected static array $complexArrayTypes = ['images' => [ItemImage::class]];

    /**
     * @param  string  $marketplaceId  Amazon marketplace identifier.
     * @param  ItemImage[]  $images  Images for an item in the Amazon catalog for the indicated Amazon marketplace.
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly array $images,
    ) {
    }
}
