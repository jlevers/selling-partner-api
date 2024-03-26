<?php

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;
use SellingPartnerApi\Seller\ProductPricingV20220501\Responses\Errors;

final class CompetitiveSummaryResponseBody extends BaseDto
{
    protected static array $complexArrayTypes = ['featuredBuyingOptions' => [FeaturedBuyingOption::class]];

    /**
     * @param  string  $asin  The Amazon Standard Identification Number (ASIN) of the item.
     * @param  string  $marketplaceId  A marketplace identifier. Specifies the marketplace for which data is returned.
     * @param  FeaturedBuyingOption[]|null  $featuredBuyingOptions  A list of featured buying options for the given ASIN `marketplaceId` combination.
     * @param  ?Errors  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly string $asin,
        public readonly string $marketplaceId,
        public readonly ?array $featuredBuyingOptions = null,
        public readonly ?Errors $errors = null,
    ) {
    }
}
