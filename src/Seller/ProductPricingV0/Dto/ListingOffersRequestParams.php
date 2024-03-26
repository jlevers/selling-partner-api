<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ListingOffersRequestParams extends BaseDto
{
    protected static array $attributeMap = [
        'marketplaceId' => 'MarketplaceId',
        'itemCondition' => 'ItemCondition',
        'sellerSku' => 'SellerSKU',
        'customerType' => 'CustomerType',
    ];

    /**
     * @param  string  $marketplaceId  A marketplace identifier. Specifies the marketplace for which prices are returned.
     * @param  string  $itemCondition  Filters the offer listings to be considered based on item condition. Possible values: New, Used, Collectible, Refurbished, Club.
     * @param  string  $sellerSku  The seller stock keeping unit (SKU) of the item. This is the same SKU passed as a path parameter.
     * @param  ?string  $customerType  Indicates whether to request Consumer or Business offers. Default is Consumer.
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly string $itemCondition,
        public readonly string $sellerSku,
        public readonly ?string $customerType = null,
    ) {
    }
}
