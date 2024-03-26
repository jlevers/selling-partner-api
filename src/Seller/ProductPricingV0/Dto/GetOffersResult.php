<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GetOffersResult extends BaseDto
{
    protected static array $attributeMap = [
        'marketplaceId' => 'MarketplaceID',
        'itemCondition' => 'ItemCondition',
        'identifier' => 'Identifier',
        'summary' => 'Summary',
        'offers' => 'Offers',
        'asin' => 'ASIN',
        'sku' => 'SKU',
    ];

    protected static array $complexArrayTypes = ['offers' => [OfferDetail::class]];

    /**
     * @param  string  $marketplaceId  A marketplace identifier.
     * @param  string  $itemCondition  Indicates the condition of the item. Possible values: New, Used, Collectible, Refurbished, Club.
     * @param  string  $status  The status of the operation.
     * @param  ItemIdentifier  $identifier  Information that identifies an item.
     * @param  Summary  $summary  Contains price information about the product, including the LowestPrices and BuyBoxPrices, the ListPrice, the SuggestedLowerPricePlusShipping, and NumberOfOffers and NumberOfBuyBoxEligibleOffers.
     * @param  OfferDetail[]  $offers
     * @param  ?string  $asin  The Amazon Standard Identification Number (ASIN) of the item.
     * @param  ?string  $sku  The stock keeping unit (SKU) of the item.
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly string $itemCondition,
        public readonly string $status,
        public readonly ItemIdentifier $identifier,
        public readonly Summary $summary,
        public readonly array $offers,
        public readonly ?string $asin = null,
        public readonly ?string $sku = null,
    ) {
    }
}
