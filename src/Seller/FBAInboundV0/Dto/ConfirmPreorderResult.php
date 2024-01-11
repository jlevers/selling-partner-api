<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ConfirmPreorderResult extends BaseDto
{
    /**
     * @param  ?string  $confirmedNeedByDate
     * @param  ?string  $confirmedFulfillableDate
     */
    public function __construct(
        public readonly ?string $confirmedNeedByDate = null,
        public readonly ?string $confirmedFulfillableDate = null,
    ) {
    }
}
