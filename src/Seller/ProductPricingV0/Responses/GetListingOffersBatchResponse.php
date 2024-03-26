<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ProductPricingV0\Dto\ListingOffersResponse;

final class GetListingOffersBatchResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['responses' => [ListingOffersResponse::class]];

    /**
     * @param  ListingOffersResponse[]|null  $responses  A list of `getListingOffers` batched responses.
     */
    public function __construct(
        public readonly ?array $responses = null,
    ) {
    }
}
