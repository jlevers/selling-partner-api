<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Summary extends BaseDto
{
    protected static array $complexArrayTypes = [
        'numberOfOffers' => [OfferCountType::class],
        'lowestPrices' => [LowestPriceType::class],
        'buyBoxPrices' => [BuyBoxPriceType::class],
        'salesRankings' => [SalesRankType::class],
        'buyBoxEligibleOffers' => [OfferCountType::class],
    ];

    /**
     * @param  int  $totalOfferCount The number of unique offers contained in NumberOfOffers.
     * @param  OfferCountType[]  $numberOfOffers
     * @param  LowestPriceType[]  $lowestPrices
     * @param  BuyBoxPriceType[]  $buyBoxPrices
     * @param  ?MoneyType  $listPrice
     * @param  ?MoneyType  $competitivePriceThreshold
     * @param  ?MoneyType  $suggestedLowerPricePlusShipping
     * @param  SalesRankType[]  $salesRankings A list of sales rank information for the item, by category.
     * @param  OfferCountType[]  $buyBoxEligibleOffers
     * @param  ?string  $offersAvailableTime When the status is ActiveButTooSoonForProcessing, this is the time when the offers will be available for processing.
     */
    public function __construct(
        public readonly int $totalOfferCount,
        public readonly ?array $numberOfOffers = null,
        public readonly ?array $lowestPrices = null,
        public readonly ?array $buyBoxPrices = null,
        public readonly ?MoneyType $listPrice = null,
        public readonly ?MoneyType $competitivePriceThreshold = null,
        public readonly ?MoneyType $suggestedLowerPricePlusShipping = null,
        public readonly ?array $salesRankings = null,
        public readonly ?array $buyBoxEligibleOffers = null,
        public readonly ?string $offersAvailableTime = null,
    ) {
    }
}
