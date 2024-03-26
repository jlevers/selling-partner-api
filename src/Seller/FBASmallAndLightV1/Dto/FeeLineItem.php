<?php

namespace SellingPartnerApi\Seller\FBASmallAndLightV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FeeLineItem extends BaseDto
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
