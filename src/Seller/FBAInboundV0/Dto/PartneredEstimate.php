<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PartneredEstimate extends BaseDto
{
    /**
     * @param  Amount  $amount The monetary value.
     * @param  ?string  $confirmDeadline
     * @param  ?string  $voidDeadline
     */
    public function __construct(
        public readonly Amount $amount,
        public readonly ?string $confirmDeadline = null,
        public readonly ?string $voidDeadline = null,
    ) {
    }
}
