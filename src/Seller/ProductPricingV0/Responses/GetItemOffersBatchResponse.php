<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class GetItemOffersBatchResponse extends BaseResponse
{
    /**
     * @param  ItemOffersResponse[]  $itemOffersResponse A list of `getItemOffers` batched responses.
     */
    public function __construct(
        public readonly ?array $itemOffersResponse = null,
    ) {
    }
}
