<?php

namespace SellingPartnerApi\Seller\CatalogItemsV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class IdentifierType extends BaseDto
{
    public function __construct(
        public readonly ASINIdentifier $marketplaceAsin,
        public readonly SellerSKUIdentifier $skuidentifier,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
