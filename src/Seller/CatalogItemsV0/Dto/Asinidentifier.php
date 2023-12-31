<?php

namespace SellingPartnerApi\Seller\CatalogItemsV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Asinidentifier extends BaseDto
{
    /**
     * @param  string  $marketplaceId A marketplace identifier.
     * @param  string  $asin The Amazon Standard Identification Number (ASIN) of the item.
     */
    public function __construct(
        public readonly ?string $marketplaceId = null,
        public readonly ?string $asin = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
