<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ProductPricingV0\Dto\ItemOffersResponse;

final class GetItemOffersBatchResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['responses' => [ItemOffersResponse::class]];

    /**
     * @param  ItemOffersResponse[]|null  $responses  A list of `getItemOffers` batched responses.
     */
    public function __construct(
        public readonly ?array $responses = null,
    ) {
    }
}
