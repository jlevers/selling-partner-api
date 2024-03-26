<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GetItemOffersBatchRequest extends BaseDto
{
    protected static array $complexArrayTypes = ['requests' => [ItemOffersRequest::class]];

    /**
     * @param  ItemOffersRequest[]|null  $requests  A list of `getListingOffers` batched requests to run.
     */
    public function __construct(
        public readonly ?array $requests = null,
    ) {
    }
}
