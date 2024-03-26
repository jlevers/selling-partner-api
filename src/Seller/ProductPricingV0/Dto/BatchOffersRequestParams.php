<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class BatchOffersRequestParams extends BaseDto
{
    protected static array $attributeMap = [
        'marketplaceId' => 'MarketplaceId',
        'itemCondition' => 'ItemCondition',
        'customerType' => 'CustomerType',
    ];

    /**
     * @param  string  $marketplaceId  A marketplace identifier. Specifies the marketplace for which prices are returned.
     * @param  string  $itemCondition  Filters the offer listings to be considered based on item condition. Possible values: New, Used, Collectible, Refurbished, Club.
     * @param  ?string  $customerType  Indicates whether to request Consumer or Business offers. Default is Consumer.
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly string $itemCondition,
        public readonly ?string $customerType = null,
    ) {
    }
}
