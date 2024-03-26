<?php

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ProductPricingV20220501\Dto\FeaturedOfferExpectedPriceResponse;

final class GetFeaturedOfferExpectedPriceBatchResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['responses' => [FeaturedOfferExpectedPriceResponse::class]];

    /**
     * @param  FeaturedOfferExpectedPriceResponse[]|null  $responses  A batched list of featured offer expected price responses.
     */
    public function __construct(
        public readonly ?array $responses = null,
    ) {
    }
}
