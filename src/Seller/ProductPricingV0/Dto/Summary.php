<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Summary extends BaseDto
{
    protected static array $attributeMap = [
        'totalOfferCount' => 'TotalOfferCount',
        'numberOfOffers' => 'NumberOfOffers',
        'lowestPrices' => 'LowestPrices',
        'buyBoxPrices' => 'BuyBoxPrices',
        'listPrice' => 'ListPrice',
        'competitivePriceThreshold' => 'CompetitivePriceThreshold',
        'suggestedLowerPricePlusShipping' => 'SuggestedLowerPricePlusShipping',
        'salesRankings' => 'SalesRankings',
        'buyBoxEligibleOffers' => 'BuyBoxEligibleOffers',
        'offersAvailableTime' => 'OffersAvailableTime',
    ];

    protected static array $complexArrayTypes = [
        'numberOfOffers' => [OfferCountType::class],
        'lowestPrices' => [LowestPriceType::class],
        'buyBoxPrices' => [BuyBoxPriceType::class],
        'salesRankings' => [SalesRankType::class],
        'buyBoxEligibleOffers' => [OfferCountType::class],
    ];

    /**
     * @param  int  $totalOfferCount  The number of unique offers contained in NumberOfOffers.
     * @param  OfferCountType[]|null  $numberOfOffers
     * @param  LowestPriceType[]|null  $lowestPrices
     * @param  BuyBoxPriceType[]|null  $buyBoxPrices
     * @param  ?MoneyType  $listPrice
     * @param  ?MoneyType  $competitivePriceThreshold
     * @param  ?MoneyType  $suggestedLowerPricePlusShipping
     * @param  SalesRankType[]|null  $salesRankings  A list of sales rank information for the item, by category.
     * @param  OfferCountType[]|null  $buyBoxEligibleOffers
     * @param  ?DateTime  $offersAvailableTime  When the status is ActiveButTooSoonForProcessing, this is the time when the offers will be available for processing.
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
        public readonly ?\DateTime $offersAvailableTime = null,
    ) {
    }
}
