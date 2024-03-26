<?php

namespace SellingPartnerApi\Seller\ReplenishmentV20221107\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ListOffersRequestPagination extends BaseDto
{
    /**
     * @param  int  $limit  The maximum number of results to return in the response.
     * @param  int  $offset  The offset from which to retrieve the number of results specified by the `limit` value. The first result is at offset 0.
     */
    public function __construct(
        public readonly int $limit,
        public readonly int $offset,
    ) {
    }
}
