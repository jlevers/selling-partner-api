<?php

namespace SellingPartnerApi\Seller\CatalogItemsV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class IdentifierType extends BaseDto
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
