<?php

namespace SellingPartnerApi\Seller\ReplenishmentV20221107\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ReplenishmentV20221107\Dto\PaginationResponse;

final class ListOffersResponse extends BaseResponse
{
    /**
     * @param  ListOffersResponseOffer[]  $offers A list of offers.
     * @param  PaginationResponse  $pagination Use these parameters to paginate through the response.
     */
    public function __construct(
        public readonly array $offers,
        public readonly PaginationResponse $pagination,
    ) {
    }
}
