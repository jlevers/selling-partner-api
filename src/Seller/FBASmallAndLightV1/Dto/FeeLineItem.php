<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBASmallAndLightV1\Dto;

use SellingPartnerApi\Dto;

final class FeeLineItem extends Dto
{
    /**
     * @param  string  $feeType  The type of fee charged to the seller.
     */
    public function __construct(
        public readonly string $feeType,
        public readonly MoneyType $feeCharge,
    ) {
    }
}
