<?php

namespace SellingPartnerApi\Seller\CatalogItemsV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SellerSkuidentifier extends BaseDto
{
    /**
     * @param  string  $marketplaceId A marketplace identifier.
     * @param  string  $sellerId The seller identifier submitted for the operation.
     * @param  string  $sellerSku The seller stock keeping unit (SKU) of the item.
     */
    public function __construct(
        public readonly ?string $marketplaceId = null,
        public readonly ?string $sellerId = null,
        public readonly ?string $sellerSku = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
