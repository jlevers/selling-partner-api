<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ReplenishmentV20221107\Dto;

use SellingPartnerApi\Dto;

final class ListOffersRequestSort extends Dto
{
    /**
     * @param  string  $order  The sort order.
     * @param  string  $key  The attribute to use to sort the results.
     */
    public function __construct(
        public readonly string $order,
        public readonly string $key,
    ) {
    }
}
