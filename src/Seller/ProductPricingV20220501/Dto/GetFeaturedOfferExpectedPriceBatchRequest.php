<?php

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GetFeaturedOfferExpectedPriceBatchRequest extends BaseDto
{
    protected static array $complexArrayTypes = ['requests' => [FeaturedOfferExpectedPriceRequest::class]];

    /**
     * @param  FeaturedOfferExpectedPriceRequest[]|null  $requests  A batched list of featured offer expected price requests.
     */
    public function __construct(
        public readonly ?array $requests = null,
    ) {
    }
}
