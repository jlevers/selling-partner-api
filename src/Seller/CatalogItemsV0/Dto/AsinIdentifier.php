<?php

namespace SellingPartnerApi\Seller\CatalogItemsV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AsinIdentifier extends BaseDto
{
    protected static array $attributeMap = ['marketplaceId' => 'MarketplaceId', 'asin' => 'ASIN'];

    /**
     * @param  string  $marketplaceId  A marketplace identifier.
     * @param  string  $asin  The Amazon Standard Identification Number (ASIN) of the item.
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly string $asin,
    ) {
    }
}
