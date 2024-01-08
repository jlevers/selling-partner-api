<?php

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class GetFeaturedOfferExpectedPriceBatchResponse extends BaseResponse
{
    /**
     * @param  FeaturedOfferExpectedPriceResponse[]  $featuredOfferExpectedPriceResponse A batched list of featured offer expected price responses.
     */
    public function __construct(
        public readonly ?array $featuredOfferExpectedPriceResponse = null,
    ) {
    }
}
