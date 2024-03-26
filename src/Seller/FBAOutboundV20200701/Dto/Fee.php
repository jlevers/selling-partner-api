<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Fee extends BaseDto
{
    /**
     * @param  string  $name  The type of fee.
     * @param  Money  $amount  An amount of money, including units in the form of currency.
     */
    public function __construct(
        public readonly string $name,
        public readonly Money $amount,
    ) {
    }
}
