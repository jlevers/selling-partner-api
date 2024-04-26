<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ReplenishmentV20221107\Dto;

use SellingPartnerApi\Dto;

final class PaginationResponse extends Dto
{
    /**
     * @param  ?int  $totalResults  Total number of results matching the given filter criteria.
     */
    public function __construct(
        public readonly ?int $totalResults = null,
    ) {
    }
}
