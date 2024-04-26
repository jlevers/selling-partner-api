<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\CatalogItemsV0\Dto;

use SellingPartnerApi\Dto;

final class IdentifierType extends Dto
{
    protected static array $attributeMap = ['marketplaceAsin' => 'MarketplaceASIN', 'skuIdentifier' => 'SKUIdentifier'];

    /**
     * @param  ?AsinIdentifier  $marketplaceAsin
     * @param  ?SellerSkuIdentifier  $skuIdentifier
     */
    public function __construct(
        public readonly ?AsinIdentifier $marketplaceAsin = null,
        public readonly ?SellerSkuIdentifier $skuIdentifier = null,
    ) {
    }
}
