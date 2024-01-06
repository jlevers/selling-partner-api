<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PartneredEstimate extends BaseDto
{
    /**
     * @param  Amount  $amount The monetary value.
     */
    public function __construct(
        public readonly ?Amount $amount = null,
        public readonly ?string $confirmDeadline = null,
        public readonly ?string $voidDeadline = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
