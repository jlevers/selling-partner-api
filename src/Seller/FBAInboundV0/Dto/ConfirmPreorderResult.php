<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ConfirmPreorderResult extends BaseDto
{
    public function __construct(
        public readonly string $confirmedNeedByDate,
        public readonly string $confirmedFulfillableDate,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
