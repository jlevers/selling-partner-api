<?php

namespace SellingPartnerApi\Seller\CatalogItemsV20220401\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ItemIdentifier extends BaseDto
{
    /**
     * @param  string  $identifierType  Type of identifier, such as UPC, EAN, or ISBN.
     * @param  string  $identifier  Identifier.
     */
    public function __construct(
        public readonly string $identifierType,
        public readonly string $identifier,
    ) {
    }
}
