<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CompetitivePricingType extends BaseDto
{
    protected static array $attributeMap = [
        'competitivePrices' => 'CompetitivePrices',
        'numberOfOfferListings' => 'NumberOfOfferListings',
        'tradeInValue' => 'TradeInValue',
    ];

    protected static array $complexArrayTypes = [
        'competitivePrices' => [CompetitivePriceType::class],
        'numberOfOfferListings' => [OfferListingCountType::class],
    ];

    /**
     * @param  CompetitivePriceType[]  $competitivePrices  A list of competitive pricing information.
     * @param  OfferListingCountType[]  $numberOfOfferListings  The number of active offer listings for the item that was submitted. The listing count is returned by condition, one for each listing condition value that is returned.
     * @param  ?MoneyType  $tradeInValue
     */
    public function __construct(
        public readonly array $competitivePrices,
        public readonly array $numberOfOfferListings,
        public readonly ?MoneyType $tradeInValue = null,
    ) {
    }
}
