<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ListingsItemsV20210801\Dto;

use SellingPartnerApi\Dto;

final class Points extends Dto
{
    public function __construct(
        public readonly int $pointsNumber,
    ) {
    }
}
