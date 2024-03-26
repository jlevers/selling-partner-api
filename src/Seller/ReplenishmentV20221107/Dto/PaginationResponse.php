<?php

namespace SellingPartnerApi\Seller\ReplenishmentV20221107\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PaginationResponse extends BaseDto
{
    /**
     * @param  ?int  $totalResults  Total number of results matching the given filter criteria.
     */
    public function __construct(
        public readonly ?int $totalResults = null,
    ) {
    }
}
