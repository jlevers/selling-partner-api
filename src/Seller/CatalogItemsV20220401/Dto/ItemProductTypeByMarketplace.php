<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\CatalogItemsV20220401\Dto;

use SellingPartnerApi\Dto;

final class ItemProductTypeByMarketplace extends Dto
{
    /**
     * @param  ?string  $marketplaceId  Amazon marketplace identifier. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     * @param  ?string  $productType  Name of the product type that is associated with the Amazon catalog item.
     */
    public function __construct(
        public ?string $marketplaceId = null,
        public ?string $productType = null,
    ) {}
}
