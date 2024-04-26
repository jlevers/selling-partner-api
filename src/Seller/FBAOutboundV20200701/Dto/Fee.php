<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use SellingPartnerApi\Dto;

final class Fee extends Dto
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
