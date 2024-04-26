<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use SellingPartnerApi\Dto;

final class SellerSkuIdentifier extends Dto
{
    protected static array $attributeMap = [
        'marketplaceId' => 'MarketplaceId',
        'sellerId' => 'SellerId',
        'sellerSku' => 'SellerSKU',
    ];

    /**
     * @param  string  $marketplaceId  A marketplace identifier.
     * @param  string  $sellerId  The seller identifier submitted for the operation.
     * @param  string  $sellerSku  The seller stock keeping unit (SKU) of the item.
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly string $sellerId,
        public readonly string $sellerSku,
    ) {
    }
}
