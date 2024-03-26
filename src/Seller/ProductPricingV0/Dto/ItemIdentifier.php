<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ItemIdentifier extends BaseDto
{
    protected static array $attributeMap = [
        'marketplaceId' => 'MarketplaceId',
        'itemCondition' => 'ItemCondition',
        'asin' => 'ASIN',
        'sellerSku' => 'SellerSKU',
    ];

    /**
     * @param  string  $marketplaceId  A marketplace identifier. Specifies the marketplace from which prices are returned.
     * @param  string  $itemCondition  Indicates the condition of the item. Possible values: New, Used, Collectible, Refurbished, Club.
     * @param  ?string  $asin  The Amazon Standard Identification Number (ASIN) of the item.
     * @param  ?string  $sellerSku  The seller stock keeping unit (SKU) of the item.
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly string $itemCondition,
        public readonly ?string $asin = null,
        public readonly ?string $sellerSku = null,
    ) {
    }
}
