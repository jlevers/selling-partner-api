<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use SellingPartnerApi\Dto;

final class CompetitiveSummaryResponseBody extends Dto
{
    protected static array $complexArrayTypes = [
        'featuredBuyingOptions' => FeaturedBuyingOption::class,
        'lowestPricedOffers' => LowestPricedOffer::class,
        'referencePrices' => ReferencePrice::class,
    ];

    /**
     * @param  string  $asin  The ASIN of the item.
     * @param  string  $marketplaceId  The marketplace ID is the globally unique identifier of a marketplace. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     * @param  FeaturedBuyingOption[]|null  $featuredBuyingOptions  A list of featured buying options for the specified ASIN `marketplaceId` combination.
     * @param  LowestPricedOffer[]|null  $lowestPricedOffers  A list of lowest priced offers for the specified ASIN `marketplaceId` combination.
     * @param  ReferencePrice[]|null  $referencePrices  A list of reference prices for the specified ASIN `marketplaceId` combination.
     * @param  ?ErrorList  $errors  A list of error responses that are returned when a request is unsuccessful.
     */
    public function __construct(
        public string $asin,
        public string $marketplaceId,
        public ?array $featuredBuyingOptions = null,
        public ?array $lowestPricedOffers = null,
        public ?array $referencePrices = null,
        public ?ErrorList $errors = null,
    ) {}
}
