<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ItemOffersRequestParams extends BaseDto
{
    protected static array $attributeMap = [
        'marketplaceId' => 'MarketplaceId',
        'itemCondition' => 'ItemCondition',
        'customerType' => 'CustomerType',
        'asin' => 'Asin',
    ];

    /**
     * @param  string  $marketplaceId  A marketplace identifier. Specifies the marketplace for which prices are returned.
     * @param  string  $itemCondition  Filters the offer listings to be considered based on item condition. Possible values: New, Used, Collectible, Refurbished, Club.
     * @param  ?string  $customerType  Indicates whether to request Consumer or Business offers. Default is Consumer.
     * @param  ?string  $asin  The Amazon Standard Identification Number (ASIN) of the item. This is the same Asin passed as a request parameter.
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly string $itemCondition,
        public readonly ?string $customerType = null,
        public readonly ?string $asin = null,
    ) {
    }
}
