<?php

namespace SellingPartnerApi\Seller\FBASmallAndLightV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Item extends BaseDto
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
