<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBASmallAndLightV1\Dto;

use SellingPartnerApi\Dto;

final class Item extends Dto
{
    /**
     * @param  string  $asin  The Amazon Standard Identification Number (ASIN) value used to identify the item.
     */
    public function __construct(
        public readonly string $asin,
        public readonly MoneyType $price,
    ) {
    }
}
