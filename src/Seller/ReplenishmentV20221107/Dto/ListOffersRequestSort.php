<?php

namespace SellingPartnerApi\Seller\ReplenishmentV20221107\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ListOffersRequestSort extends BaseDto
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
