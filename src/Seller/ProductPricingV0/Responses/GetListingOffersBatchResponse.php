<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class GetListingOffersBatchResponse extends BaseResponse
{
    /**
     * @param  ListingOffersResponse[]  $listingOffersResponse A list of `getListingOffers` batched responses.
     */
    public function __construct(
        public readonly ?array $listingOffersResponse = null,
    ) {
    }
}
