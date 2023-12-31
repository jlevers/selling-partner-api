<?php

namespace SellingPartnerApi\Seller\ReplenishmentV20221107\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ReplenishmentV20221107\Dto\PaginationResponse;

final class ListOfferMetricsResponse extends BaseResponse
{
    /**
     * @param  ListOfferMetricsResponseOffer[]  $offers A list of offers and associated metrics.
     * @param  PaginationResponse  $pagination Use these parameters to paginate through the response.
     */
    public function __construct(
        public readonly array $offers,
        public readonly PaginationResponse $pagination,
    ) {
    }
}
