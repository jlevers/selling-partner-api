<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class IdentifierType extends BaseDto
{
    protected static array $attributeMap = ['marketplaceAsin' => 'MarketplaceASIN', 'skuIdentifier' => 'SKUIdentifier'];

    /**
     * @param  ?SellerSkuIdentifier  $skuIdentifier
     */
    public function __construct(
        public readonly AsinIdentifier $marketplaceAsin,
        public readonly ?SellerSkuIdentifier $skuIdentifier = null,
    ) {
    }
}
