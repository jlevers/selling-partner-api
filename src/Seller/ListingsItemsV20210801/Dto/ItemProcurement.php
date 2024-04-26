<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ListingsItemsV20210801\Dto;

use SellingPartnerApi\Dto;

final class ItemProcurement extends Dto
{
    /**
     * @param  Money  $costPrice  The currency type and the amount.
     */
    public function __construct(
        public readonly Money $costPrice,
    ) {
    }
}
