<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CompetitivePricingType extends BaseDto
{
    protected static array $complexArrayTypes = [
        'competitivePrices' => [CompetitivePriceType::class],
        'numberOfOfferListings' => [OfferListingCountType::class],
    ];

    /**
     * @param  CompetitivePriceType[]  $competitivePrices A list of competitive pricing information.
     * @param  OfferListingCountType[]  $numberOfOfferListings The number of active offer listings for the item that was submitted. The listing count is returned by condition, one for each listing condition value that is returned.
     * @param  ?MoneyType  $tradeInValue
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?array $competitivePrices = null,
        public readonly ?array $numberOfOfferListings = null,
        public readonly ?MoneyType $tradeInValue = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
